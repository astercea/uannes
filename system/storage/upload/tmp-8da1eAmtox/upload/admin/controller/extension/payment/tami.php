<?php

use Tami\Opencart\TamiPaymentClient;

/**
 * File: tami.php
 * Year: 2023
 */
class ControllerExtensionPaymentTami extends Controller {
	const MODULE_SLUG = "tami";
	const MODULE_SETTINGS = [
		"module_extra"         => [
			"application_dismiss"
		],
		"api_settings"         => [
			'environment',
			'payment_method',
			'merchant_id',
			'terminal_id',
			'secret_key',
			'fixed_kid_value',
			'fixed_k_value',
			'payment_method_test',
			'merchant_id_test',
			'terminal_id_test',
			'secret_key_test',
			'fixed_kid_value_test',
			'fixed_k_value_test'
		],
		"installment_settings" => [
			'enabled',
			'minimum_amount',
			'2',
			'3',
			'4',
			'5',
			'6',
			'7',
			'8',
			'9',
			'10',
			'11',
			'12'
		],
		"module_settings"      => [
			"enabled",
			"title",
			"order_status",
			"order_status_refund",
			"order_status_failed",
			"debug_mode",
			"save_failed_transactions",
			"checkout_order"
		]
	];
	private $error = [];
	private $token_slug = "user_token";
	private $settings_prefix = "payment_";

	public static function get_posted_json_data() {
		$data = file_get_contents( 'php://input' );
		if ( ! empty( $data ) ) {
			$data = trim( $data );
		}
		if ( strpos( $data, '{' ) === 0 || strpos( $data, '[' ) === 0 ) {
			return json_decode( $data );
		}

		return (object) [];
	}

	public function index() {
		$this->admin_page();
	}

	public function admin_page() {
		$data = [];
		$this->append_language( $data );

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript( 'view/javascript/tami/bootstrap.bundle.js' );
		$this->document->addScript( 'view/javascript/tami/sweetalert2.all.min.js' );
		$this->document->addScript( 'view/javascript/tami/main.js' );


		$data['header']      = $this->load->controller( 'common/header' );
		$data['column_left'] = $this->load->controller( 'common/column_left' );
		$data['footer']      = $this->load->controller( 'common/footer' );
		$this->load->model( 'localisation/order_status' );

		$data['order_statuses']               = $this->model_localisation_order_status->getOrderStatuses();
		$data['ui_localize']                  = $this->get_ui_localize();
		$data['tami_api_validate_url']        = $this->get_url_with_token( 'extension/payment/tami/api_validate' );
		$data['tami_application_dismiss_url'] = $this->get_url_with_token( 'extension/payment/tami/application_dismiss' );
		$data['tamiAdminOrdersUrl']           = $this->get_url_with_token( 'sale/order' );
		$data['default_currency']             = $this->config->get( 'config_currency' );

		$this->load->model( 'sale/order' );
		$orders = $this->model_sale_order->getOrders();

		$orderTableName = DB_PREFIX . 'order';
		$tamiMetaTable  = DB_PREFIX . 'tami_order_meta';
		$sql            = "SELECT {$orderTableName}.order_id, {$orderTableName}.currency_code, {$orderTableName}.total, {$tamiMetaTable}.meta_value as 'payment_completed_time' FROM `{$orderTableName}`" .
		                  " INNER JOIN {$tamiMetaTable} ON {$tamiMetaTable}.order_id = {$orderTableName}.order_id AND {$tamiMetaTable}.meta_key = 'payment_completed_time' " .
		                  " WHERE TRUE LIMIT 1";

		$lastOrder = $this->db->query( $sql );

		if ( isset( $lastOrder->row ) ) {
			$lastOrder = (object) $lastOrder->row;
		}

		if ( ! isset( $lastOrder ) || ! is_object( $lastOrder ) || ! isset( $lastOrder->currency_code ) ) {
			$lastOrder = (object) [
				'currency_code'          => '',
				'order_id'               => '-',
				'payment_completed_time' => '-',
				'total'                  => '-'
			];
		} else {
			$lastOrder->detail_url = $this->get_url_with_token( 'sale/order/info', [
				'order_id' => $lastOrder->order_id
			] );
		}

		if ( $lastOrder->payment_completed_time && is_numeric( $lastOrder->payment_completed_time ) ) {
			$lastOrder->payment_completed_time += 3 * 60 * 60; // timezone convert
		}

		$data['last_order'] = $lastOrder;
		$settings_group     = [ "saved_settings" ];
		foreach ( self::MODULE_SETTINGS as $mKey => $mItem ) {
			$settings_group[] = $mKey;
		}
		foreach ( $settings_group as $item ) {
			$data[ $item ] = $this->get_settings( $this->get_setting_name( $item ) );
		}

		$env                  = ( ( $data['api_settings'] ?? [] )['environment'] ?? "test" );
		$merchant_setting_key = "merchant_id";
		$terminal_setting_key = "terminal_id";

		if ( $env === 'test' ) {
			$merchant_setting_key .= '_test';
		}
		if ( $env === 'test' ) {
			$terminal_setting_key .= '_test';
		}

		$data['installation_status'] = [
			'environment' => $env,
			'terminal_id' => ( ( $data['api_settings'] ?? [] )[ $terminal_setting_key ] ?? "" ),
			'merchant_id' => ( ( $data['api_settings'] ?? [] )[ $merchant_setting_key ] ?? "" ),
		];

		if(!class_exists('\Tami\Opencart\Debugger'))
		{
			include dirname(__FILE__,5 ) . '/catalog/controller/extension/payment/Tami/Debugger.php';
		}
		$data['debug_dir'] = str_replace('//','/', sprintf( "%s/logs/%s_%s.log",
			DIR_STORAGE,
			\Tami\Opencart\Debugger::LOG_FILE_PREFIX, date( 'Y-m-d' ) ));
		$data['apiFormSaveUrl'] = $this->url->link( 'extension/payment/tami/save_tami_options', $this->get_user_token_key() . '=' . $this->get_user_token() );
		$data['module_menu']    = $this->get_admin_menu( false, $data );
		$data['module_header']  = $this->load->view( 'extension/payment/tami/common/header', $data );
		$data['module_footer']  = $this->load->view( 'extension/payment/tami/common/footer', $data );

		$this->response->setOutput( $this->load->view( 'extension/payment/tami/admin', $data ) );
	}

	public function append_language( &$data ) {
		$lang      = $this->load->language( 'extension/payment/tami' );
		$lang_keys = [
			'text_merchant_id',
			'text_terminal_id',
			'text_security_method',
			'text_security_method_3d',
			'text_security_method_non_secure',
			'text_security_method_hosted_payment',
			'text_installation_not_completed',
			'text_hash_value',
			'text_secret_key',
			'text_fixed_kid_value',
			'text_fixed_k_value',
			'text_button_verify',
			'text_save_changes',
			'text_minimum_installment_amount',
			'desc_minimum_installment_amount',
			'text_installment_input_label',
			'desc_installment_input_label',
			'text_enable_installments',
			'text_installments_rates',
			'text_installments_disabled',
			'text_module_enable_disable',
			'desc_module_enable_disable',
			'text_method_name',
			'desc_method_name',
			'text_order_status_after_payment',
			'text_order_status_after_refund',
			'text_refund_status_no_change',
			'text_order_status_default',
			'text_enable_debug',
			'desc_enable_debug',
			'text_store_failed_transactions',
			'text_failed_orders_status',
			'text_widget_installation_title',
			'text_widget_merchant_id',
			'text_widget_terminal_id',
			'text_widget_environment',
			'text_widget_environment_test',
			'text_widget_environment_prod',
			'text_widget_go_settings',
			'text_widget_last_order',
			'text_widget_last_order_id',
			'text_widget_last_order_paymentdate',
			'text_widget_last_order_amount',
			'text_widget_last_order_detail_button',
			'text_widget_list_orders_button',
			'text_last_order_not_found',
			'text_api_environment_test',
			'text_api_environment_prod',
			'desc_contact_us',
			'text_go_portal_button',
			'text_go_installation_guide_button',
			'text_contact_us',
			'text_checkout_order',
			'desc_checkout_order'
		];
		foreach ( $lang_keys as $lang_key ) {
			$data[ 'lang_' . $lang_key ] = $lang[ $lang_key ];
		}
	}

	public function get_ui_localize() {
		$this->load->language( 'extension/payment/tami' );

		return [
			'adminUI'               => null,
			'tamiAdminPanelMainUrl' => $this->url->link( 'extension/payment/tami', $this->token_slug . '=' . $this->get_user_token(), true ),
			'i18n'                  => [
				'changes_saved'        => $this->language->get( 'warn_changes_saved' ),
				'api_validate_success' => $this->language->get( 'validate_correct' ),
				'an_error_occurred'    => $this->language->get( 'tami_an_error_occurred' )
			],
			'swal'                  => [
				'confirmButtonText' => $this->language->get( 'tami_swal_close' )
			],
			'tamiAdminPanelTabs'    => array_map( function ( $item ) {
				return [
					'slug'    => $item->slug,
					'button'  => sprintf( 'tami-%s-tab-button', $item->slug ),
					'content' => sprintf( 'tab-tami-%s-tab', $item->slug )
				];
			}, $this->get_admin_menu() )
		];
	}

	public function get_user_token() {
		if ( isset( $this->session->data['user_token'] ) ) {
			return $this->session->data['user_token'];
		} else {
			$this->settings_prefix = '';
		}
		if ( isset( $this->session->data['token'] ) ) {
			return $this->session->data['token'];
		}

		return null;
	}

	public function get_admin_menu( $onlyMenu = true, $with_exists_data = [] ) {
		$lang = $this->load->language( 'extension/payment/tami' );
		$menu = [
			(object) [
				'label'         => $lang['module_menu_label_home'],
				'slug'          => 'home',
				'icon'          => '<i class="fa fa-home"></i>',
				'view'          => 'home',
				'include_views' => [
					'applicationBanner'  => 'extra/applicationBanner',
					'lastCompletedOrder' => 'widgets/lastCompletedOrder',
					'installationStatus' => 'widgets/installationStatus',
				]
			],
			(object) [
				'label'         => $lang['module_menu_label_api_settings'],
				'slug'          => 'api',
				'icon'          => '<i class="fa fa-cubes"></i>',
				'view'          => 'api',
				'include_views' => [
					'liveSettings' => 'extra/api/liveSettings',
					'testSettings' => 'extra/api/testSettings',
					'saveRow'      => 'extra/api/saveRow'
				]
			],
			(object) [
				'label' => $lang['module_menu_label_installment_settings'],
				'slug'  => 'installment',
				'icon'  => '<i class="fa fa-credit-card"></i>',
				'view'  => 'installments'
			],
			(object) [
				'label' => $lang['module_menu_label_module_settings'],
				'slug'  => 'module',
				'icon'  => '<i class="fa fa-cogs"></i>',
				'view'  => 'module'
			],
			(object) [
				'label' => $lang['module_menu_label_support'],
				'slug'  => 'support',
				'icon'  => '<i class="fa fa-question-circle"></i>',
				'view'  => 'support'
			]
		];
		if ( $onlyMenu ) {
			return $menu;
		}

		return array_map( function ( $item ) use ( $with_exists_data ) {

			if ( isset( $item->include_views ) ) {
				foreach ( $item->include_views as $include_key => $include_view ) {
					$with_exists_data[ $include_key ] = $this->load->view( 'extension/payment/tami/' . $include_view, $with_exists_data );
				}
			}
			if ( isset( $item->view ) ) {
				$item->content = $this->load->view( 'extension/payment/tami/' . $item->view, $with_exists_data );

				return $item;
			}

			return $item;
		}, $menu );
	}

	public function get_url_with_token( $url, $extra = [] ) {
		$suffix = '';
		if ( is_array( $extra ) && count( $extra ) ) {
			foreach ( $extra as $key => $item ) {
				$suffix .= $key . '=' . $item;
			}
		}
		if ( $suffix ) {
			$suffix = '&' . $suffix;
		}

		return $this->url->link( $url, $this->token_slug . '=' . $this->get_user_token() . $suffix, true );
	}

	private function get_settings( $slug = '' ) {
		$this->load->model( 'setting/setting' );
		$setting = $this->model_setting_setting->getSetting(
			$this->get_setting_group_name()
		);
		if ( $slug && isset( $setting[ $slug ] ) ) {
			return $setting[ $slug ];
		}

		return $setting;
	}

	public function get_setting_group_name() {
		$this->get_user_token_key();

		return $this->settings_prefix . 'tami';
	}

	public function get_user_token_key() {
		if ( isset( $this->session->data['user_token'] ) ) {
			return 'user_token';
		} else {
			$this->settings_prefix = '';
		}
		if ( isset( $this->session->data['token'] ) ) {
			return 'token';
		}

		return null;
	}

	public function get_setting_name( $input ) {
		return sprintf( "%s%s_%s", $this->settings_prefix, self::MODULE_SLUG, $input );
	}

	public function install() {
		$this->load->model( 'setting/event' );
		$this->model_setting_event->addEvent( 'tami_left_menu', 'admin/view/common/column_left/before', 'extension/payment/tami/left_before' );
		$this->model_setting_event->addEvent( 'tami_global_header', 'admin/view/common/header/before', 'extension/payment/tami/header_before' );
		$this->load->model( 'extension/payment/tami' );
		$this->model_extension_payment_tami->install();
	}

	public function header_before( &$route, &$data ) {
		$data['styles'][] = [
			'rel'   => 'stylesheet',
			'media' => 'screen',
			'href'  => 'view/stylesheet/tami/tami-global.css'
		];
	}

	public function left_before( &$route, &$data ) {
		if ( ! ( $this->user->hasPermission( 'access', 'extension/payment/tami' ) ) ) {
			return;
		}

		$token     = $this->get_version_token();
		$lang      = $this->load->language( 'extension/payment/tami' );
		$menu_page = array(
			'id'       => 'menu-tami',
			'icon'     => 'fa fa-credit-card',
			'name'     => $lang['menu_title'],
			'href'     => $this->url->link( 'extension/payment/tami', $this->token_slug . '=' . $token, true ),
			'children' => null /* array(
				array(
					'name'     => $lang['text_tami_child'],
					'href'     => $this->url->link( 'extension/payment/tami', $this->token_slug . '=' . $token . '#gateways', true ),
					'children' => array()
				)
			) */
		);

		array_splice( $data['menus'], 2, 0, array( $menu_page ) );
	}

	private function get_version_token() {
		$token = $this->session->data['user_token'] ?? '';
		if ( empty( $token ) ) {
			$token                = $this->session->data['token'] ?? '';
			$this->token_slug     = "token";
			$this->oc_version     = 2.3;
			$this->setting_prefix = "";
		}

		return $token;
	}

	public function uninstall() {
		$this->load->model( 'setting/event' );
		$this->model_setting_event->deleteEventByCode( 'tami_left_menu' );
		$this->model_setting_event->deleteEventByCode( 'tami_global_header' );
		// database table delete may be
	}

	public function save_tami_options() {
		try {
			$this->update_settings( $_POST );
			self::set_json_output( [
				'status' => true,
				'detail' => ''
			] );
		} catch ( \Exception $exception ) {
			self::set_json_output( [
				'status' => false,
				'detail' => $exception->getMessage()
			] );
		}
	}

	/**
	 * @throws Exception
	 */
	public function update_settings( $update_array = [] ) {
		$message = '';
		try {
			$save_data = $this->get_settings();
			foreach ( $update_array as $post_key => $setting_group ) {
				$post_keySystem = $this->get_setting_name( $post_key );
				if ( ! in_array( $post_key, array_keys( self::MODULE_SETTINGS ) ) ) {
					continue;
				}

				foreach ( $setting_group as $post_item_key => $settings_item ) {
					if ( ! in_array( $post_item_key, self::MODULE_SETTINGS[ $post_key ] ) ) {
						continue;
					}

					if ( ! isset( $save_data[ $post_keySystem ] ) || ! is_array( $save_data[ $post_keySystem ] ) ) {
						$save_data[ $post_keySystem ] = [];
					}

					$save_data[ $post_keySystem ][ $post_item_key ] = $settings_item;
				}
			}

			if (
				isset( $save_data[ $this->get_setting_name( 'module_settings' ) ] )
				&& isset( $save_data[ $this->get_setting_name( 'module_settings' ) ]['enabled'] )
			) {
				$save_data[ $this->get_setting_name( 'status' ) ] = $save_data[ $this->get_setting_name( 'module_settings' ) ]['enabled'];
			}

			$this->load->model( 'setting/setting' );
			$this->model_setting_setting->editSetting( $this->get_setting_group_name(), $save_data );
		} catch ( \Exception $exception ) {
			$message = $exception->getMessage();
		}
		if ( $message ) {
			throw new \Exception( $message );
		}

		return true;
	}

	public static function set_json_output( $data = [] ) {
		if ( is_object( $data ) || is_array( $data ) ) {
			$data = json_encode( $data );
		}
		header( 'Content-Type: application/json' );
		die( $data );
	}

	public function application_dismiss() {
		try {
			$save_data['module_extra'] = [
				'application_dismiss' => '1'
			];
			$this->update_settings( $save_data );
			self::set_json_output( [
				'status' => true
			] );
		} catch ( \Exception $exception ) {
			self::set_json_output( [
				'status' => false
			] );
		}
	}

	public function application_dismiss_reset() {
		try {
			$save_data['module_extra'] = [
				'application_dismiss' => '0'
			];
			$this->update_settings( $save_data );
			self::set_json_output( [
				'status' => true
			] );
		} catch ( \Exception $exception ) {
			self::set_json_output( [
				'status' => false
			] );
		}
	}

	public function api_validate() {
		if ( ! class_exists( '\Tami\Opencart\TamiPaymentClient' ) ) {
			include dirname( __FILE__, 5 ) . '/catalog/controller/extension/payment/Tami/TamiPaymentClient.php';
		}

		$this->load->language( 'extension/payment/tami' );
		$tami_gw = $this->payment_object();
		try {
			$i = $tami_gw->installmentQuery( [ 'bin' => '55496012' ] ); // garantibbva-bonus-example
			$status = (isset($i->success) && $i->success);

			$result = [
				'status'  => $status,
				'message' => !$status ? $this->language->get( 'validate_error' ) : ''
			];
		} catch ( \Exception $exception ) {
			$result = [
				'status'  => false,
				'message' => $exception->getMessage()
			];
		}
		self::set_json_output( $result );
	}

	public function payment_object(): TamiPaymentClient {
		if ( ! class_exists( '\Tami\Opencart\TamiPaymentClient' ) ) {
			include dirname( __FILE__, 5 ) . '/catalog/controller/extension/payment/Tami/TamiPaymentClient.php';
		}
		
		$apiSettings    = $this->get_settings( $this->get_setting_name( 'api_settings' ) );
		$moduleSettings = $this->get_settings( $this->get_setting_name( 'module_settings' ) );
		$testMode  = isset($apiSettings['environment']) && ( $apiSettings['environment'] ) == 'test';
		$debugMode = isset($moduleSettings['debug_mode']) && ( $moduleSettings['debug_mode'] ) == '1';
		
		if ( $testMode ) {
			$apiSettings['payment_method'] = $apiSettings['payment_method_test'];
			$apiSettings['terminal_id']    = $apiSettings['terminal_id_test'];
			$apiSettings['merchant_id']    = $apiSettings['merchant_id_test'];
			$apiSettings['secret_key']     = $apiSettings['secret_key_test'];
			$apiSettings['fixed_kid_value']     = $apiSettings['fixed_kid_value_test'];
			$apiSettings['fixed_k_value']     = $apiSettings['fixed_k_value_test'];
			unset( $apiSettings['payment_method_test'] );
			unset( $apiSettings['terminal_id_test'] );
			unset( $apiSettings['merchant_id_test'] );
			unset( $apiSettings['secret_key_test'] );
			unset( $apiSettings['fixed_kid_value_test'] );
			unset( $apiSettings['fixed_k_value_test'] );
		}

		return ( new TamiPaymentClient() )
			->setTest( $testMode )
			->setPaymentMethod( $apiSettings['payment_method'] )
			->enableDebug( $debugMode )
			->setTerminalId( $apiSettings['terminal_id'] ?? '' )
			->setMerchantId( $apiSettings['merchant_id'] ?? '' )
			->setSecretKey( $apiSettings['secret_key'] ?? '' )
			->setFixedKidValue( $apiSettings['fixed_kid_value'] ?? '' )
			->setFixedKValue( $apiSettings['fixed_k_value'] ?? '' )
			;
	}

	public function order() {
		$data = [
			'lang' => []
		];

		$widget_lang_keys = [
			"text_ordertab_paid_with_tami",
			"text_ordertab_test_payment",
			"text_ordertab_refund_title",
			"text_ordertab_refund_amount",
			"text_ordertab_refund_button"
		];

		$this->load->language( 'extension/payment/tami' );
		foreach ( $widget_lang_keys as $item ) {
			$data['lang'][ $item ] = $this->language->get( $item );
		}

		$this->load->model( 'sale/order' );
		$orderId = $this->request->get['order_id'];
		if ( ! $orderId ) {
			return false;
		}
		$data['orderId'] = $orderId;

		$order      = $this->model_sale_order->getOrder( $orderId );
		$orderMetas = $this->get_order_meta( $orderId );

		if ( isset( $orderMetas['card_info'] ) && $orderMetas['card_info'] && strpos( $orderMetas['card_info'], '{' ) === 0 ) {
			$orderMetas['card_info'] = json_decode( $orderMetas['card_info'] );
		}

		$widgetTableData = [];

		if ( $orderMetas['payment_completed_time'] ?? false ) {
			$paymentDateTime = new \DateTime();
			$paymentDateTime->setTimestamp( $orderMetas['payment_completed_time'] );
			$tz = new DateTimeZone( 'Europe/Istanbul' );
			$paymentDateTime->setTimezone( $tz );

			$widgetTableData[] = [
				'label' => $this->language->get( 'text_ordertab_payment_date' ),
				'value' => $paymentDateTime->format( 'd/m/Y H:i:s' ) . ' (TSİ)'
			];
		} else {
			return false;
		}

		if ( $orderMetas['payment_amount'] ?? false ) {
			$widgetTableData[] = [
				'label' => $this->language->get( 'text_ordertab_payment_amount' ),
				'value' => number_format( $orderMetas['payment_amount'], 2 ) . $order['currency_code']
			];
		}
		if ( $orderMetas['installment'] ?? false ) {
			$widgetTableData[] = [
				'label' => $this->language->get( 'text_ordertab_installment' ),
				'value' => $orderMetas['installment']
			];
		}
		if ( $orderMetas['transaction_id'] ?? false ) {
			$widgetTableData[] = [
				'label' => $this->language->get( 'text_ordertab_transaction_id' ),
				'value' => $orderMetas['transaction_id']
			];
		}
		if ( ( $orderMetas['card_info'] ?? false ) && isset( $orderMetas['card_info']->maskedNumber ) ) {
			$widgetTableData[] = [
				'label' => $this->language->get( 'text_ordertab_card_number' ),
				'value' => $orderMetas['card_info']->maskedNumber
			];
		}

		$data['order_meta']      = $orderMetas;
		$data['currency_symbol'] = $order['currency_code'];
		$data['widget_table']    = $widgetTableData;
		$data['refund_url']      = $this->url->link( 'extension/payment/tami/refund', $this->token_slug . '=' . $this->get_version_token(), true );

		return $this->load->view( 'extension/payment/tami/ordertab', $data );
	}

	public function get_order_meta( $order_id, $meta_key = '' ) {
		$table = DB_PREFIX . 'tami_order_meta';

		$whereStr = "`order_id` = $order_id";
		if ( $meta_key ) {
			$whereStr .= " AND `meta_key` = '$meta_key'";
		}

		$sql    = sprintf( "SELECT * FROM %s WHERE TRUE AND %s", $table, $whereStr );
		$result = $this->db->query( $sql );
		if ( ! isset( $result->num_rows ) || (int) $result->num_rows === 0 ) {
			if ( $meta_key ) {
				return false;
			}

			return [];
		}

		$resultFormatted = [];
		foreach ( $result->rows as $item ) {
			$resultFormatted[ $item['meta_key'] ] = $item['meta_value'];
			if ( $meta_key && $meta_key === $item['meta_key'] ) {
				return $item['meta_value'];
			}
		}

		return $resultFormatted;
	}

	public function refund() {
		$order_id = $this->request->post['order_id'];
		$amount   = $this->request->post['amount'];
		$tami     = $this->payment_object();

		$transaction_id = $this->get_order_meta( $order_id, 'transaction_id' );
		$status         = false;
		$message        = "";

		try {

			$this->load->model( 'sale/order' );
			$order = $this->model_sale_order->getOrder( $order_id );

			$refundAuthCode      = $tami->refund(
				$transaction_id, $amount
			);
			$status              = true;
			$moduleSettings      = $this->get_settings( $this->get_setting_name( 'module_settings' ) );
			$order_status_refund = $moduleSettings['order_status_refund'] ?? '';
			$historyComment      = sprintf( 'Refund amount: %s %s - Transaction ID: #%s', floatval( $refundAuthCode->amount ), $order['currency_code'], $refundAuthCode->orderId );
			if ( $order_status_refund ) {
				$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `order_status_id` = '" . (int)$order_status_refund . "' WHERE `order_id` = '" . (int)$order_id . "'");
				$this->db->query( "INSERT INTO `" . DB_PREFIX . "order_history` SET `order_id` = '" . (int) $order_id . "', `order_status_id` = '" . (int) $order_status_refund . "', `notify` = '1', `comment` = '{$historyComment}', `date_added` = NOW()" );
			}
		} catch ( \Exception $exception ) {
			$status  = false;
			$message = $exception->getMessage();
		}

		header( 'Content-Type: application/json' );
		die( json_encode( [
			'status'  => $status,
			'message' => $message
		] ) );
	}

	private function validate() {
		if ( ! $this->user->hasPermission( 'modify', 'extension/payment/tami' ) ) {
			$this->error['warning'] = $this->language->get( 'error_permission' );
		}

		return ! $this->error;
	}

	public function return_test() {
		die( 'a' );
	}
}
