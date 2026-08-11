<?php
/**
 * File: TamiPaymentClient.php
 * Year: 2023
 */

namespace Tami\Opencart;

use Exception;

//ini_set( 'display_errors', 1 );
//ini_set( 'display_startup_errors', 1 );
//error_reporting( E_ALL );

class TamiPaymentClient {
	private ?string $merchantId;
	private ?string $terminalId;
	private ?string $secret_key;
	private ?string $fixed_kid_value;
	private ?string $fixed_k_value;
	private bool $testMode = false;
	private ?string $method;

	private bool $debugMode = false;
	private $debugger = null;


	private bool $three_d_enabled = false;

	const TEST_ENV_HOST = "https://sandbox-paymentapi.tami.com.tr";
	const PROD_ENV_HOST = "https://paymentapi.tami.com.tr";

	const TEST_HOSTED_BASE_URL = "https://sandbox-portal.tami.com.tr/hostedPaymentPage";
	const PROD_HOSTED_BASE_URL = "https://portal.tami.com.tr/hostedPaymentPage";

	public function __construct() {
		$this->load_request_class();
	}

	public function enableDebug( $status ): TamiPaymentClient {
		$this->debugMode = $status;

		if ( ! class_exists( '\Tami\Opencart\Debugger' ) ) {
			include dirname( __FILE__ ) . '/Debugger.php';
		}
		$this->debugger = new Debugger();

		return $this;
	}

	public static function slugify( $string, $replace = array(), $delimiter = '-' ) {
		// https://github.com/phalcon/incubator/blob/master/Library/Phalcon/Utils/Slug.php
		if ( ! extension_loaded( 'iconv' ) ) {
			throw new Exception( 'iconv module not loaded' );
		}
		// Save the old locale and set the new locale to UTF-8
		$oldLocale = setlocale( LC_ALL, '0' );
		setlocale( LC_ALL, 'en_US.UTF-8' );
		$clean = iconv( 'UTF-8', 'ASCII//TRANSLIT', $string );
		if ( ! empty( $replace ) ) {
			$clean = str_replace( (array) $replace, ' ', $clean );
		}
		$clean = preg_replace( "/[^a-zA-Z0-9\/_|.+-]/", '', $clean );
		$clean = strtolower( $clean );
		$clean = preg_replace( "/[\/_|+ -]+/", $delimiter, $clean );
		$clean = trim( $clean, $delimiter );
		// Revert back to the old locale
		setlocale( LC_ALL, $oldLocale );

		return $clean;
	}

	public function getHost(): string {
		return $this->testMode ? self::TEST_ENV_HOST : self::PROD_ENV_HOST;
	}

	public function setTest( bool $t ): TamiPaymentClient {
		$this->testMode = $t;

		return $this;
	}

	public function isTest(): bool {
		return $this->testMode;
	}
	public function setPaymentMethod( string $method ): TamiPaymentClient {
		$this->method = $method;
		$this->three_d_enabled = $method == '3D';

		return $this;
	}


	public function getPaymentMethod(): string {
		return $this->method;
	}

	public function getThreeDEnabled(): bool {
		return $this->three_d_enabled;
	}

	public function setMerchantId( ?string $merchantId ): TamiPaymentClient {
		$this->merchantId = $merchantId;

		return $this;
	}

	public function setTerminalId( ?string $terminalId ): TamiPaymentClient {
		$this->terminalId = $terminalId;

		return $this;
	}

	public function setSecretKey( ?string $secretKey ): TamiPaymentClient {
		$this->secret_key = $secretKey;

		return $this;
	}

	public function setFixedKidValue( ?string $fixedKidValue ): TamiPaymentClient {
		$this->fixed_kid_value = $fixedKidValue;

		return $this;
	}
	public function setFixedKValue( ?string $fixedKValue ): TamiPaymentClient {
		$this->fixed_k_value = $fixedKValue;

		return $this;
	}

	public static function random_numbers( $digits ): int {
		$min = pow( 10, $digits - 1 );
		$max = pow( 10, $digits ) - 1;

		return mt_rand( $min, $max );
	}

	public static function getClientIpAddress() {
		if ( isset( $_SERVER["HTTP_CLIENT_IP"] ) ) {
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		} elseif ( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			if ( strstr( $ip, ',' ) ) {
				$tmp = explode( ',', $ip );
				$ip  = trim( $tmp[0] );
			}
		} else {
			$ip = $_SERVER["REMOTE_ADDR"];
		}

		return $ip;
	}

	public static function encodeOrderId( $order_id ): string {
		$order_num = self::random_numbers( 5 );
		$order_num .= self::random_numbers( 5 );
		$order_num .= self::random_numbers( 5 );
		$order_num .= sprintf( "_%s", $order_id );

		return substr( $order_num, - 15 );
	}

	public function getAuthToken(): string {
		$hash_str = sprintf( "%s%s%s",
			trim( $this->merchantId ),
			trim( $this->terminalId ),
			trim( $this->secret_key )
		);

		$hash = base64_encode( hash( 'sha256', $hash_str, true ) );

		return sprintf( "%s:%s:%s", trim( $this->merchantId ), trim( $this->terminalId ), $hash );
	}

	public static function filterOnlyNumbers( $in ) {
		return preg_replace( '/[^0-9]/', '', $in );
	}

	public static function decodeOrderId( string $order_id ): string {
		$order_id = explode( '_', $order_id );

		return $order_id[1] ?? '';
	}

	public function load_request_class() {
		$firstInclude      = [ 'PostAuthRequest' ];
		$request_directory = dirname( __FILE__ ) . '/Requests/*.php';
		$files             = glob( $request_directory );

		$filesFirst = [];
		foreach ( $files as $kFile => $file ) {
			foreach ( $firstInclude as $fFile ) {
				if ( strpos( $file, $fFile ) !== false ) {
					$filesFirst[] = $file;
					unset( $files[ $kFile ] );
				}
			}
		}
		foreach ( $filesFirst as $f ) {
			include $f;
		}
		foreach ( $files as $f ) {
			include $f;
		}
	}

	public function generateOneTimeHostedToken($data): string {
		$request = new OneTimeHostedTokenRequest();
		$request->set_amount($data['amount']);
		$request->set_mobile_phone_number($data['phonenumber']);
		$request->set_order_id($data['orderid']);
		$request->set_success_callback_url($data['callback']);
		$request->set_fail_callback_url($data['callback']);

		$response = $this->curl('/hosted/create-one-time-hosted-token', $request->get());
		$token = (string) $response->oneTimeToken;

		$baseUrl = self::PROD_HOSTED_BASE_URL;
		if($this->isTest())
			$baseUrl = self::TEST_HOSTED_BASE_URL;

		return sprintf("%s?token=%s", $baseUrl, $token);
	}

	/**
	 * @throws Exception
	 */
	public function authRequest( $data = [] ) {

		$orderData   = $data['order'] ?? [];
		$cardData    = $data['card'] ?? [];
		$paymentData = $data['payment'] ?? [];
		$otherData   = $data['other'] ?? [];
		$totals      = $data['totals'];
		$products    = $data['products'];

		$paymentAuth = new AuthRequest();
		$paymentAuth->setOrderId( $orderData['orderId'] ?? '' );
		$paymentAuth->setAmount( $orderData['amount'] );
		$paymentAuth->setCurrency( $orderData['currency'] );
		$paymentAuth->setInstallmentCount( $paymentData['installmentCount'] );
		$paymentAuth->setMotoInd( false );
		$paymentAuth->setPaymentGroup( "PRODUCT" );
		$paymentAuth->setPaymentChannel( "WEB" );
		$paymentAuth->setSubType( "" );

		if ( $this->three_d_enabled ) {
			$paymentAuth->setCallbackUrl( $otherData['callback'] );
		}

		// card
		$card = new Card();
		$card->setNumber( $cardData['number'] );
		$card->setExpireMonth( $cardData['expireMonth'] );
		$card->setExpireYear( $cardData['expireYear'] );
		$card->setCvv( $cardData['cvv'] );
		$card->setHolderName( $cardData['cardHolder'] );
		$paymentAuth->setCard( $card );

		$billingAddress = new Address();
		$billingAddress->setAddress( $orderData['billingAddress'] );
		$billingAddress->setEmailAddress( $orderData['billingEmailAddress'] );
		$billingAddress->setCity( $orderData['billingCity'] );
		$billingAddress->setCompanyName( $orderData['billingCompany'] );
		$billingAddress->setCountry( $orderData['billingCountry'] );
		$billingAddress->setContactName( sprintf( '%s %s', $orderData['billingFirstname'], $orderData['billingLastname'] ) );
		$billingAddress->setPhoneNumber( $orderData['billingPhone'] );
		$billingAddress->setZipCode( $orderData['billingZipcode'] );
		$billingAddress->setDistrict( $orderData['billingDistrict'] );
		$paymentAuth->setBillingAddress( $billingAddress );

		// auto-fill from billing
		$addressFields = [
			'shippingEmailAddress',
			'shippingAddress',
			'shippingCity',
			'shippingCompany',
			'shippingCountry',
			'shippingContactName',
			'shippingPhone',
			'shippingZipcode',
			'shippingDistrict'
		];

		foreach ( $addressFields as $item ) {
			if ( empty( $orderData[ $item ] ) && ! empty( $orderData[ str_replace( 'shipping', 'billing', $item ) ] ) ) {
				$orderData[ $item ] = $orderData[ str_replace( 'shipping', 'billing', $item ) ];
			}
		}

		$shippingAddress = new Address();
		$shippingAddress->setAddress( $orderData['shippingAddress'] );
		$shippingAddress->setCity( $orderData['shippingCity'] );
		$shippingAddress->setCompanyName( $orderData['shippingCompany'] );
		$shippingAddress->setCountry( $orderData['shippingCountry'] );
		$shippingAddress->setContactName( $orderData['shippingContactName'] );
		$shippingAddress->setPhoneNumber( $orderData['shippingPhone'] );
		$shippingAddress->setZipCode( $orderData['shippingZipcode'] );
		$shippingAddress->setDistrict( $orderData['shippingDistrict'] );
		$paymentAuth->setShippingAddress( $shippingAddress );

		$buyer = new Buyer();
		$buyer->setIpAddress( $paymentData['ipAddress'] );
		$buyer->setBuyerId( $orderData['buyerId'] );
		$buyer->setName( $orderData['billingFirstname'] );
		$buyer->setSurName( $orderData['billingLastname'] );
//		$buyer->setIdentityNumber( $orderData['billingIdentityNumber'] );
		$buyer->setCity( $orderData['billingCity'] );
		$buyer->setCountry( $orderData['billingCountry'] );
		$buyer->setEmailAddress( $orderData['email'] );
		$buyer->setPhoneNumber( $orderData['billingPhone'] );
		$buyer->setRegistrationAddress( $orderData['billingAddress'] );
		$buyer->setZipCode( $orderData['billingZipcode'] );
		//registrationDate empty
		//lastLoginDate empty
		$paymentAuth->setBuyer( $buyer );

		$basket = new Basket();
		$basket->setBasketId( $paymentData['basketId'] );

		$basketItems = [];
		foreach ( $products as $product ) {
			$q = 1;
			if ( isset( $product['quantity'] ) ) {
				$q = $product['quantity'];
			}
			$basketItems[] = ( new BasketItem() )
				->setItemId( $product['product_id'] )
				->setItemType( 'PHYSICAL' )
				->setName( $product['name'] )
				->setNumberOfProducts( $q )
				->setUnitPrice( $product['price'] )
				->setTotalPrice( $product['total'] );
		}

		if ( $totals ) {
			foreach ( $totals as $total ) {
				$basketItems[] = ( new BasketItem() )
					->setItemId( $total['code'] )
					->setItemType( 'PHYSICAL' )
					->setName( $total['title'] )
					->setNumberOfProducts( 1 )
					->setUnitPrice( $total['value'] )
					->setTotalPrice( $total['value'] );
			}
		}

		if ( $otherData['installment_fee'] ) {
			$basketItems[] = ( new BasketItem() )
				->setItemId( 'INSTALLMENT_FEE' )
				->setItemType( 'VIRTUAL' )
				->setName( 'Installment Fee' )
				->setNumberOfProducts( 1 )
				->setUnitPrice( $otherData['installment_fee'] )
				->setTotalPrice( $otherData['installment_fee'] );
		}

		$basket->setBasketItems( $basketItems );

		$paymentAuth->setBasket( $basket );
		$paymentAuth->generateHash(
			$this->merchantId,
			$this->terminalId,
			$this->secret_key,
			$this->fixed_kid_value,
			$this->fixed_k_value,
			json_decode(json_encode( $paymentAuth->get() ), true)
		);

		return $this->curl( '/payment/auth', $paymentAuth->get() );
	}

	/**
	 * @throws Exception
	 */
	public function installmentQuery( array $data ) {
		$installmentRequest = new GetInstallmentInfoRequest();
		$installmentRequest->setBinNumber( $data['bin'] ?? 0 );
		$installmentRequest->generateSecurityHash(
			$this->merchantId,
			$this->terminalId,
			$this->secret_key,
			$this->fixed_kid_value,
			$this->fixed_k_value
		);
		return $this->curl( '/installment/bin-info', $installmentRequest->get());
	}



	/**
	 * @throws Exception
	 */
	public function getInstallmentInfo( $bin ) {
		$installmentRequest = new GetInstallmentInfoRequest();
		$installmentRequest->setBinNumber( $bin ?? 0 );
		$installmentRequest->generateSecurityHash(
			$this->merchantId,
			$this->terminalId,
			$this->secret_key,
			$this->fixed_kid_value,
			$this->fixed_k_value
		);
		return $this->curl( '/installment/installment-info', $installmentRequest->get());
	}

	/**
	 * @throws Exception
	 */
	public function callback( array $data ): array {
		$status = ( $data['success'] ?? 'false' );
		if ( $status !== 'true' ) {
			$message = ( $data['message'] ?? '' );

			if ( empty( $message ) ) {
				$message = ( $data['mdErrorMessage'] ?? 'Unknown error!' );
			}

			if ( empty( $message ) ) {
				$message = $data['callbackStatus'] ?? '';
			}

			if ( empty( $message ) ) {
				$message = 'Error!';
			}

			throw new Exception( $message );
		}
		$transaction_id = ( $data['orderId'] ?? '' );
		$hash           = $data['hashedData'] ?? '';


		if ( ! $this->checkCallbackHash( $hash, $data ) ) {
			throw new \Exception( 'Hash validation failed!' );
		}

		$complete3DRequest = new Complete3DAuthRequest();
		$complete3DRequest->setOrderId( $transaction_id );
		$complete3DRequest->generateHash(
			$this->merchantId,
			$this->terminalId,
			$this->secret_key,
			$this->fixed_kid_value,
			$this->fixed_k_value
		);
		$competeRequestResponse = $this->curl( '/payment/complete-3ds', $complete3DRequest );

		if ( ! is_object( $competeRequestResponse ) ) {
			$competeRequestResponse = new \stdClass();
		}

		if ( ! isset( $competeRequestResponse->success ) ) {
			$competeRequestResponse->success = false;
		}
		if ( ! isset( $competeRequestResponse->errorMessage ) ) {
			$competeRequestResponse->errorMessage = 'Invalid response returned from 3D Complete Request!';
		}
		if ( ! isset( $competeRequestResponse->errorCode ) ) {
			$competeRequestResponse->errorCode = '0001';
		}

		if ( ! $competeRequestResponse->success ) {
			throw new \Exception( sprintf( '%s - #%s', $competeRequestResponse->errorMessage, $competeRequestResponse->errorCode ) );
		}

		$amount = $competeRequestResponse->amount ?? '0';

		return [
			'transactionId' => $transaction_id,
			'orderId'       => self::decodeOrderId( $transaction_id ),
			'installment'   => (int) ( $data['installmentCount'] ?? '' ),
			'amount'        => $amount
		];
	}

	/**
	 * @throws Exception
	 */
	public function curl( $url = '', $postdata = '', $header = array() ) {
		if ( empty( $url ) ) {
			throw new Exception( 'cURL address missing!' );
		}
		$urlBackup = $url . '';
		if ( strpos( $url, 'https://' ) === false && strpos( $url, 'http://' ) === false ) {
			$url = $this->getHost() . $url;
		}

		$header[] = sprintf( "PG-Auth-Token: %s", $this->getAuthToken() );
		$header[] = sprintf( "correlationId: %s", $this->getCorrelationId() );
		$header[] = sprintf( "PG-Api-Version: %s", "v2" );

		$logData = [
			'url'       => $url,
			'post_data' => $postdata,
			'header'    => $header
		];

		if ( $this->debugMode ) {
			try {
				$this->debugger->log(
					$logData, 'Curl Request Details'
				);
			} catch ( \Exception $exception ) {
			}
		}

		if ( is_array( $postdata ) || is_object( $postdata ) ) {
			$postdata = json_encode( $postdata );
			$header[] = 'Content-Type: application/json';
		}

		$ch = curl_init();
		if ( $header ) {
			curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
		}


		curl_setopt( $ch, CURLOPT_TIMEOUT, 30 );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch, CURLOPT_HEADER, false );
		curl_setopt( $ch, CURLOPT_URL, $url );

		if ( strlen( $postdata ) ) {
			curl_setopt( $ch, CURLOPT_POST, true );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $postdata );
		}

		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$data = curl_exec( $ch );

		if ( $this->debugMode ) {
			try {
				$this->debugger->log( $data, 'Curl Response' );
			} catch ( \Exception $exception ) {

			}
		}

		if ( curl_error( $ch ) ) {
			throw new Exception( curl_error( $ch ) );
		}
		curl_close( $ch );

		if ( strpos( $data, '{' ) === 0 ) {
			$data = json_decode( $data );
		}

		if ( is_object( $data ) && isset( $data->success ) && ! $data->success ) {
			$message = sprintf( "#%s - %s", $data->errorCode, $data->errorMessage );
			throw new Exception( $message );
		}

		return $data;
	}

	private function getCorrelationId(): string {
		return 'tami_' . self::random_numbers( 10 ) . '_' . time() . '_' . self::random_numbers( 10 );
	}

	/**
	 * @throws Exception
	 */
	public function check_api_connection() {
		$this->installmentQuery( [ 'bin' => '55496012' ] ); // garantibbva-bonus-example
	}

	/**
	 * @throws Exception
	 */
	public function refund( $transaction_id, $amount, $reason = '' ) {
		$refundRequest = new ReverseAndRefundRequest();
		$refundRequest->setOrderId( $transaction_id );
		$refundRequest->generateHash(
			$this->merchantId,
			$this->terminalId,
			$this->secret_key,
			$this->fixed_kid_value,
			$this->fixed_k_value
		);
		$refundRequest->setAmount( $amount );
		$refundRequest->setReason( $reason );

		return $this->curl( '/payment/reverse', $refundRequest->get() );
	}

	private function checkCallbackHash( $hash, array $data ): bool {
		$hashStr = "";
		$parts   = [
			'cardOrganization',
			'cardBrand',
			'cardType',
			'maskedNumber',
			'installmentCount',
			'currencyCode',
			'txnAmount',
			'orderId',
			'systemTime',
			'success'
		];
		foreach ( $parts as $part ) {
			if ( isset( $data[ $part ] ) ) {
				$hashStr .= $data[ $part ];
			}
		}
		$hashGenerated = base64_encode( hash_hmac( 'sha256', $hashStr, $this->secret_key, true ) );

		return $hashGenerated === $hash;
	}

	public function authResponseHashIsValid( $authResponse ): bool {
		$authResponse->amount = sprintf('%0.2f', $authResponse->amount);

		$hash_str = $authResponse->amount . $authResponse->orderId . $authResponse->correlationId . $authResponse->currency . $authResponse->installmentCount . $authResponse->systemTime . ( $authResponse->success ? 'true' : 'false' ) . $this->secret_key;
		$hash     = base64_encode( hash( 'sha256', $hash_str, true ) );

		return $hash === $authResponse->securityHash;
	}
}
