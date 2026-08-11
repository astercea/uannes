<?php
/**
 * File: tami.php
 * Year: 2023
 */

use Tami\Opencart\Response;
use Tami\Opencart\TamiPaymentClient;

if ( ! class_exists( 'Tami\Opencart\TamiPaymentClient' ) ) {
	include dirname( __FILE__ ) . '/Tami/TamiPaymentClient.php';
}
if ( ! class_exists( 'Tami\Opencart\Response' ) ) {
	include dirname( __FILE__ ) . '/Tami/Response.php';
}
if ( ! class_exists( 'Tami\Opencart\ModuleSettings' ) ) {
	include dirname( __FILE__ ) . '/Tami/ModuleSettings.php';
}

class ControllerExtensionPaymentTami extends Controller {
	public function index() {
		$this->load->language( 'extension/payment/tami' );
		$tami_checkout_i18n = $this->language->get( 'tami_checkout_i18n' );

		$this->load->model( 'checkout/order' );
		$orderId = $this->session->data['order_id'] ?? '';;
		$order = $this->model_checkout_order->getOrder( $orderId );

		$data = [
			'tamiCheckoutPaymentUrl'     => $this->url->link( 'extension/payment/tami/make_payment', '', true ),
			'tamiCheckoutInstallmentUrl' => $this->url->link( 'extension/payment/tami/installment', '', true ),
			'tamiOrderSuccessUrl'        => $this->url->link( 'checkout/success', '', true ),
			'tamiCheckoutAssetsBase'     => '',
			'tamiCheckoutApp_i18n'       => $tami_checkout_i18n,
			'popup_lang'                 => $this->language->get( 'tami_checkout_popup' ),
			'orderDetails'               => $order,
			'tamiCheckout_process_i18n'  => $this->language->get( 'checkout_process' )
		];

		$tami = $this->payment_object();
		if ( $tami->getPaymentMethod() === 'HostedPayment' ) {


			$amount   = $this->currency->format( $order['total'], $order['currency_code'], $order['currency_value'], false );
			$hostedPaymentLink = $tami->generateOneTimeHostedToken( [
				'amount'      => $amount,
				'phonenumber' => TamiPaymentClient::filterOnlyNumbers( $order['telephone'] ?? '' ),
				'callback'    => $this->url->link( 'extension/payment/tami/callback' ),
				'orderid'     => TamiPaymentClient::encodeOrderId( $orderId )
			] );

			return <<<HTML
<script>window.location.href='{$hostedPaymentLink}'</script>
HTML;

		}

		$data['popup'] = $this->load->view( 'extension/payment/tami/popup', $data );

		return $this->load->view( 'extension/payment/tami/payment', $data );
	}

	public function payment_object(): TamiPaymentClient {
		$moduleSetting = new \Tami\Opencart\ModuleSettings( $this );
		$debugMode     = $moduleSetting->get_settings( 'module_settings', 'debug_mode' );
		$apiSettings   = $moduleSetting->get_settings( 'api_settings' );
		$testMode      = $apiSettings['environment'] === 'test';
		if ( $testMode ) {
			$array = [
				'merchant_id',
				'terminal_id',
				'secret_key',
				'fixed_kid_value',
				'fixed_k_value',
				'payment_method'
			];
			foreach ( $array as $item ) {
				if ( isset( $apiSettings[ $item . '_test' ] ) ) {
					$apiSettings[ $item ] = $apiSettings[ $item . '_test' ];
				}
				unset( $apiSettings[ $item . '_test' ] );
			}
		}

		return ( new Tami\Opencart\TamiPaymentClient() )
			->setTest( $testMode )
			->setPaymentMethod( $apiSettings['payment_method'] )
			->enableDebug( $debugMode )
			->setTerminalId( $apiSettings['terminal_id'] ?? '' )
			->setMerchantId( $apiSettings['merchant_id'] ?? '' )
			->setSecretKey( $apiSettings['secret_key'] ?? '' )
			->setFixedKidValue( $apiSettings['fixed_kid_value'] ?? '' )
			->setFixedKValue( $apiSettings['fixed_k_value'] ?? '' );
	}

	public function get_payment_error( $slug = '' ) {
		$errors = $this->language->get( 'payment_errors' );
		if ( isset( $errors[ $slug ] ) ) {
			return $errors[ $slug ];
		}

		return $errors['unknown'];
	}

	public function installment( $bin = '', $amount = '', $returnType = 'html' ) {
		if ( ! $bin ) {
			$bin = filter_var( ( $_GET['bin'] ?? '' ), FILTER_SANITIZE_NUMBER_INT );
		}
		if ( ! $amount ) {
			$amount = filter_var( $_GET['amount'] ?? '', FILTER_SANITIZE_NUMBER_FLOAT );
		}

		$data = [
			'bin'    => TamiPaymentClient::filterOnlyNumbers( $bin ),
			'amount' => (float) ( $amount ),
		];

		$ms = new \Tami\Opencart\ModuleSettings( $this );

		$ratesFormatted = [ '1' => 0 ];
		$rates          = $ms->get_settings( 'installment_settings' );

		if (
			( isset( $rates['enabled'] ) && $rates['enabled'] == '0' )
		) {
			$response = [
				'status' => true,
				'rates'  => $ratesFormatted
			];
		} else {

			if ( ! $this->installment_available( $data['amount'] ) ) {
				$response = [
					'status' => true,
					'rates'  => $ratesFormatted
				];
			} else {

				try {
					$tami = $this->payment_object();
					if ( empty( $data['bin'] ) ) {
						throw new \Exception( $this->get_payment_error( 'invalidCardNumber' ) );
					}
					$binCheck     = $tami->getInstallmentInfo( $data['bin'] );
					$installments = $binCheck->installments ?? [];
					foreach ( $rates as $k => $rate ) {
						if ( $rate === '-1' ) {
							continue;
						}
						if ( ! in_array( $k, $installments ) ) {
							continue;
						}

						if ( in_array( $k, [ 'minimum_amount', 'enabled' ] ) ) {
							continue;
						}
						$ratesFormatted[ str_replace( 'installment_', '', $k ) ] = (float) number_format( $rate, 2 );
					}

					$response = [
						'status' => true,
						'rates'  => $ratesFormatted
					];
				} catch ( Exception $exception ) {
					$response = [
						'status' => false,
						'rates'  => $ratesFormatted
					];
				}
			}
		}

		if ( $returnType === 'object' ) {
			return $response;
		}

		\Tami\Opencart\Response::json_output( $response );

		return true;

	}

	public function installment_available( $amount = '' ) {
		if ( ! $amount ) {
			return true;
		}

		$moduleSetting        = new \Tami\Opencart\ModuleSettings( $this );
		$installment_settings = $moduleSetting->get_settings( 'installment_settings' );
		if ( isset( $installment_settings['minimum_amount'] ) ) {
			$minimum_data = $installment_settings['minimum_amount'];
			if ( $minimum_data == '-1' ) {
				$minimum_data = 0;
			}
		} else {
			$minimum_data = 0;
		}

		return ! ( $minimum_data && floatval( $minimum_data ) > floatval( $amount ) );
	}

	public function getCityName( $cityCode = '' ) {
		return $cityCode;
	}

	private function generateBuyerId( $order ): string {
		$buyerId = $order['customer_id'] ?? '';

		if ( ! $buyerId ) {
			$buyerId = $order['email'] ?? '';
		}

		$store_url = $order['store_url'] ?? '';
		if ( $store_url ) {
			$store_url = str_replace( [
				'http://',
				'https://'
			], [ '', '' ], $store_url );
		}
		try {
			return TamiPaymentClient::slugify( substr( sprintf( "Customer_%s_%s", $buyerId, $store_url ), 0, 50 ) );
		} catch ( Exception $e ) {
			return TamiPaymentClient::slugify( "VISITOR_" . TamiPaymentClient::random_numbers( 10 ) );
		}
	}

	/**
	 * @throws Exception
	 */
	private function calculateAmount( $get_total, $installment, $binNumber ) {
		$installmentRates = $this->installment( $binNumber, $get_total, 'object' );
		$message          = '%d installment rate not defined!';
		if ( ! isset( $installmentRates['rates'] ) || ! isset( $installmentRates['rates'][ $installment ] ) ) {
			throw new Exception( sprintf( $message, $installment ) );
		}
		$installmentRate = floatval( $installmentRates['rates'][ $installment ] );
		$amount          = $get_total / ( ( 100 - $installmentRate ) / 100 );

		return floatval( number_format( $amount, 2, '.', '' ) );
	}

	public static function getBinNumber( $in ) {
		return substr( TamiPaymentClient::filterOnlyNumbers( $in ), 0, 6 );
	}

	public function make_payment() {
		try {
			$this->load->model( 'setting/setting' );
			$this->load->model( 'checkout/order' );
			$this->load->model( 'catalog/product' );
			$this->load->language( 'extension/payment/tami' );

			$tami = $this->payment_object();

			$installment = ( $_POST['installment'] ?? '1' );
			$orderId     = $this->session->data['order_id'] ?? '';;

			if ( ! $orderId ) {
				Response::sendMessageToParent( [
					'status'  => false,
					'message' => 'Order id not found!'
				], $this->url->link( 'checkout/cart' ) );
			}

			$order    = $this->model_checkout_order->getOrder( $orderId );
			$buyerId  = $this->generateBuyerId( $order );
			$amount   = $this->currency->format( $order['total'], $order['currency_code'], $order['currency_value'], false );
			$currency = $order['currency_code'] ?? 'TRY';
			if ( ! $this->installment_available(
				$amount
			) ) {
				$installment = '1';
			}

			$cardNumber = TamiPaymentClient::filterOnlyNumbers( $_POST['cardNumber'] ?? '' );

			if ( strlen( $cardNumber ) < 15 ) {
				throw new \Exception( $this->get_payment_error( 'invalidCardNumber' ) );
			}

			if ( strlen( TamiPaymentClient::filterOnlyNumbers( $_POST['cardMonth'] ?? '' ) ) < 2 ) {
				throw new \Exception( $this->get_payment_error( 'invalidExpiryMonth' ) );
			}

			if ( strlen( TamiPaymentClient::filterOnlyNumbers( $_POST['cardYear'] ?? '' ) ) < 2 ) {
				throw new \Exception( $this->get_payment_error( 'invalidExpiryYear' ) );
			}

			if ( strlen( TamiPaymentClient::filterOnlyNumbers( $_POST['cardCvv'] ?? '' ) ) < 3 ) {
				throw new \Exception( $this->get_payment_error( 'invalidCvv' ) );
			}

			$amountOriginal = $amount + 0;
			$amount         = $this->calculateAmount( $amount, $installment, self::getBinNumber( $cardNumber ) );
			$installmentFee = $amount - $amountOriginal;


			$data = [
				'order'   => [
					'orderId'               => TamiPaymentClient::encodeOrderId( $orderId ),
					'amount'                => $amount,
					'currency'              => $currency,
					'buyerId'               => $buyerId,
					'email'                 => ( $order['email'] ?? '' ),
					'billingAddress'        => trim( sprintf( '%s %s', ( $order['payment_address_1'] ?? '' ), ( $order['payment_address_2'] ?? '' ) ) ),
					'billingCity'           => self::getCityName( $order['payment_zone'] ?? '' ),
					'billingCompany'        => ( $order['payment_company'] ?? '' ),
					'billingCountry'        => ( $order['payment_iso_code_2'] ?? '' ),
					'billingEmailAddress'   => ( $order['email'] ?? '' ),
					'billingFirstname'      => ( $order['payment_firstname'] ?? '' ),
					'billingLastname'       => ( $order['payment_lastname'] ?? '' ),
					'billingPhone'          => TamiPaymentClient::filterOnlyNumbers( $order['telephone'] ?? '' ),
					'billingZipcode'        => ( $order['payment_postcode'] ?? '' ),
					'billingDistrict'       => ( $order['payment_city'] ?? '' ),
					'shippingAddress'       => trim( sprintf( '%s %s', ( $order['shipping_address_1'] ?? '' ), ( $order['shipping_address_2'] ?? '' ) ) ),
					'shippingCity'          => self::getCityName( $order['shipping_zone'] ?? '' ),
					'shippingCompany'       => ( $order['shipping_company'] ?? '' ),
					'shippingCountry'       => ( $order['shipping_iso_code_2'] ?? '' ),
					'shippingContactName'   => trim( sprintf( '%s %s', ( $order['shipping_firstname'] ?? '' ), ( $order['shipping_lastname'] ?? '' ) ) ),
					'shippingEmailAddress'  => ( $order['email'] ?? '' ),
					'shippingPhone'         => null,
					'shippingZipcode'       => ( $order['shipping_postcode'] ?? '' ),
					'shippingDistrict'      => ( $order['shipping_city'] ?? '' ),
					'billingIdentityNumber' => null
				],
				'card'    => [
					'number'      => $cardNumber,
					'expireMonth' => TamiPaymentClient::filterOnlyNumbers( $_POST['cardMonth'] ?? '' ),
					'expireYear'  => TamiPaymentClient::filterOnlyNumbers( $_POST['cardYear'] ?? '' ),
					'cvv'         => TamiPaymentClient::filterOnlyNumbers( $_POST['cardCvv'] ?? '' ),
					'cardHolder'  => $_POST['cardHolder'] ?? ''
				],
				'payment' => [
					'installmentCount' => $installment,
					'ipAddress'        => TamiPaymentClient::getClientIpAddress(),
					'basketId'         => sprintf( "BASKET_%s_%s", $orderId, TamiPaymentClient::random_numbers( 5 ) )
				],
				'other'   => [
					'callback'        => $this->url->link( 'extension/payment/tami/callback' ),
					'installment_fee' => max( $installmentFee, 0 )
				]
			];


			$this->load->model( 'account/order' );
			$products = $this->model_account_order->getOrderProducts( $orderId );
			$totals   = $this->model_account_order->getOrderTotals( $orderId );
			if ( $totals ) {
				$totals = array_values( array_filter( $totals, function ( $item ) {
					return ! in_array( $item['code'], [ 'total', 'sub_total' ] );
				} ) );
			}
			if ( $products ) {
				$products = array_map( function ( $item ) {
					if ( ( $item['product_id'] ?? '0' ) ) {
						$shipping_status = $this->db->query( sprintf( "SELECT shipping FROM %sproduct WHERE product_id = '%s'", DB_PREFIX, $item['product_id'] ) );
						if ( $shipping_status->row ) {
							$shipping_status = $shipping_status->row;
						}
						$item['shipping'] = ( $shipping_status['shipping'] ?? '0' );
					}

					return $item;
				}, $products );
			}

			$data['products'] = $products;
			$data['totals']   = $totals;

			$preAuth = $tami->authRequest( $data );

			if ( isset( $preAuth->card ) ) {
				$this->add_or_update_order_meta(
					$orderId, 'card_info', json_encode( $preAuth->card )
				);
			}


			if ( $tami->getThreeDEnabled() ) {
				// save card data
				$threeDSHtmlContent = isset( $preAuth->threeDSHtmlContent ) ? base64_decode( $preAuth->threeDSHtmlContent ) : '';
				if ( $threeDSHtmlContent ) {
					Response::sendHtmlResult( $threeDSHtmlContent );
				} else {
					Response::sendMessageToParent( [
						'status'  => false,
						'message' => 'threeDSHtmlContent data missing!'
					], $this->url->link( 'checkout/cart' ) );
				}
			} else {
				if ( is_object( $preAuth ) && isset( $preAuth->success ) && $preAuth->success ) {
					$this->tami_order_success(
						$orderId,
						( $preAuth->orderId ?? 'TRANSACTION_ID_ERROR' ),
						( $preAuth->installmentCount ?? 'INSTALLMENT_COUNT_ERROR' ),
						( $preAuth->amount ?? $order->get_total() )
					);

					Response::sendMessageToParent( [
						'status'  => true,
						'message' => '',
						'orderId' => $orderId,
						// 'orderKey' => $order->get_order_key()
					], $this->url->link( 'checkout/cart' ) );
				}
			}
		} catch ( Exception $exception ) {
			$orderId = $this->session->data['order_id'] ?? '';
			$this->tami_order_failed( $orderId, $exception->getMessage() );
			Response::sendMessageToParent( [
				'status'  => false,
				'message' => $exception->getMessage()
			], $this->url->link( 'checkout/cart' ) );
		}

	}

	public function tami_order_failed( $order_id, $detail ): bool {
		if ( ! $order_id ) {
			return false;
		}

		$moduleSettings = new \Tami\Opencart\ModuleSettings( $this );
		$moduleSettings = $moduleSettings->get_settings( 'module_settings' );

		$saveFails  = $moduleSettings['save_failed_transactions'] ?? '0';
		$failStatus = $moduleSettings['order_status_failed'] ?? '';
		if ( ! $saveFails || ! $failStatus ) {
			return false;
		}

		if ( is_object( $detail ) || is_array( $detail ) ) {
			$detail = json_encode( $detail, JSON_PRETTY_PRINT );
		}

		if ( ! $detail ) {
			$detail = '-';
		}

		if ( ! $this->model_checkout_order ) {
			$this->load->model( 'checkout/order' );
		}

		$this->model_checkout_order->addOrderHistory( $order_id, $failStatus, $detail, false );

		return true;
	}

	/**
	 * @throws Exception
	 */
	public function tami_order_success( $order_id, $trans_id, $installment = 1, $totalAmount = null ): bool {
		$ms               = new \Tami\Opencart\ModuleSettings( $this );
		$order_status     = $ms->get_settings( 'module_settings', 'order_status' );
		$orderHistoryNote = sprintf( 'Payment completed. Transaction ID: #%s - Installment: %d', $trans_id, $installment );

		if ( ! $this->model_checkout_order ) {
			$this->load->model( 'checkout/order' );
		}

		$this->model_checkout_order->addOrderHistory( $order_id, $order_status, $orderHistoryNote, true );

		$order = $this->model_checkout_order->getOrder( $order_id );
		if ( ! isset( $order['total'] ) ) {
			throw new Exception( 'Order details could not found!' );
		}

		$orderAmount = floatval( $order['total'] );
		if ( is_string( $totalAmount ) ) {
			$totalAmount = floatval( $totalAmount );
		}
		$fee = $totalAmount - $orderAmount;

		if ( $installment ) {
			$this->add_or_update_order_meta( $order_id, 'installment', $installment );
		}

		$update_meta = [
			'installment'            => $installment,
			'payment_amount'         => $totalAmount,
			'transaction_id'         => $trans_id,
			'payment_completed_time' => time()
		];
		if ( $this->payment_object()->isTest() ) {
			$update_meta['test_environment_payment'] = 1;
		}

		$this->add_or_update_order_meta( $order_id, $update_meta );

		if (
			intval( $installment ) > 1 &&
			$orderAmount < floatval( $totalAmount )
		) {
			$installmentLineLabel = sprintf( $this->language->get( 'text_installment_fee_label' ), $installment );
			$this->db->query( "INSERT INTO " . DB_PREFIX . "order_total (`order_total_id`, `order_id`, `code`, `title`, `value`, `sort_order`) VALUES (NULL, " . (int) $order_id . ", 'installment_fee', '$installmentLineLabel', " . $fee . ", '8')" );
			$this->db->query( "UPDATE " . DB_PREFIX . "order_total SET `value` = '" . $totalAmount . "' WHERE order_id = '" . (int) $order_id . "' AND `code` = 'total'" );
			$this->db->query( "UPDATE " . DB_PREFIX . "order SET `total` = '" . $totalAmount . "' WHERE order_id = '" . (int) $order_id . "'" );
		}

		return true;
	}

	public function add_or_update_order_meta( $order_id, $meta_key, $meta_value = '' ) {
		$tableName = sprintf( '%stami_order_meta', DB_PREFIX );

		if ( ! is_array( $meta_key ) ) {
			$meta_key = [ $meta_key => $meta_value ];
		}

		foreach ( $meta_key as $item_key => $item_value ) {
			$_key      = $item_key;
			$_value    = $item_value;
			$selectSql = "SELECT * FROM $tableName WHERE `order_id` = '$order_id' AND `meta_key` = '$_key'";
			$select    = $this->db->query(
				$selectSql
			);
			if ( ! isset( $select->num_rows ) || ! $select->num_rows ) {
				$sql = "INSERT INTO " . DB_PREFIX . "tami_order_meta (`order_id`, `meta_key`, `meta_value`) VALUES('$order_id','$_key', '$_value')";
			} else {
				$sql = "UPDATE " . DB_PREFIX . "tami_order_meta SET meta_value = '$_value' WHERE `order_id` = '$order_id' AND `meta_key` = '$_key'";
			}
			$this->db->query( $sql );
		}

		return true;
	}

	public function delete_order_meta( $order_id, $meta_key ): bool {
		$tableName = sprintf( '%stami_order_meta', DB_PREFIX );
		$meta_key  = explode( ",", $meta_key );
		foreach ( $meta_key as $item ) {
			$deleteSql = "DELETE FROM $tableName WHERE `order_id` = '$order_id' AND `meta_key` = '$item'";
			$this->db->query( $deleteSql );
		}

		return true;
	}

	public function callback() {
		try {
			$this->load->language( 'extension/payment/tami' );
			$tami   = $this->payment_object();
			$result = $tami->callback( $_POST );

			$trans_id    = $result['transactionId'] ?? '';
			$order_id    = $result['orderId'] ?? '';
			$installment = $result['installment'] ?? '';
			$totalAmount = $result['amount'];

			$this->tami_order_success(
				$order_id,
				$trans_id,
				$installment,
				$totalAmount
			);

			Response::sendMessageToParent( [
				'status'  => true,
				'message' => '',
				'orderId' => $order_id
			], $this->url->link( 'checkout/success', '', true ) );
		} catch ( Exception $exception ) {
			$order_id = $_POST['orderId'] ?? '';
			$this->tami_order_failed( TamiPaymentClient::decodeOrderId( $order_id ), $exception->getMessage() );
			Response::sendMessageToParent( [
				'status'  => false,
				'message' => $exception->getMessage()
			], $this->url->link( 'checkout/cart' ) );
		}

	}
}