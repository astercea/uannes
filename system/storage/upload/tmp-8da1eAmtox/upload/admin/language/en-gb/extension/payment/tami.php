<?php
/**
 * File: tami.php
 * Year: 2023
 */

// Heading
$_['heading_title']          = 'Tami';
$_['menu_title']             = 'Tami';
$_['text_tami']              = '<a href="https://www.tami.com.tr/" target="_blank"><img height="38" src="view/image/payment/tami.png" /></a>';
$_['text_tami_child']        = 'Alt';
$_['warn_changes_saved']     = 'Changes saved!';
$_['validate_correct']       = 'The information you entered looks correct.';
$_['validate_error']         = 'Please check your merchant details!';
$_['tami_an_error_occurred'] = 'An error occurred!';
$_['tami_swal_close']        = 'Close';

$_['module_menu_label_home']                 = 'Home';
$_['module_menu_label_api_settings']         = 'API Settings';
$_['module_menu_label_installment_settings'] = 'Installments';
$_['module_menu_label_module_settings']      = 'Module Settings';
$_['module_menu_label_support']              = 'Support';

$_['text_save_changes'] = 'Save Changes';

// api settings
$_['text_api_environment_test']           = 'Test';
$_['text_api_environment_prod']           = 'Production';
$_['text_merchant_id']                    = 'Merchant Id';
$_['text_terminal_id']                    = 'Terminal Id';
$_['text_security_method']                = 'Security Method';
$_['text_security_method_3d']             = '3D Secure Payment(Recommended)';
$_['text_security_method_non_secure']     = 'Non Secure';
$_['text_security_method_hosted_payment'] = 'Hosted Payment Page';
$_['text_hash_value']                     = 'Hash Value';
$_['text_secret_key']                     = 'Secret Key';
$_['text_fixed_kid_value']                = 'Fixed KID Value';
$_['text_fixed_k_value']                  = 'Fixed K Value';
$_['text_button_verify']                  = 'Verify Credentials';

// installment settings
$_['text_minimum_installment_amount'] = 'Minimum Installment Amount';
$_['desc_minimum_installment_amount'] = 'You can set minimum amount for installments. If you don\'t want to limit it, you can leave it blank.';
$_['text_installment_input_label']    = '%d Installment';
$_['desc_installment_input_label']    = 'Enter the rate to be applied for installments.';
$_['text_enable_installments']        = 'Enable Installments';
$_['text_installments_disabled']      = 'Installments is disabled now.';
$_['text_installments_rates']         = 'Installment Rates';

// module settings
$_['text_module_enable_disable']      = 'Enable Tami';
$_['desc_module_enable_disable']      = 'Enable the payment method to be available to your customers.';
$_['text_method_name']                = 'Payment Method Name';
$_['desc_method_name']                = 'Enter the method name to be displayed on the payment page.';
$_['text_checkout_order']             = 'Checkout Order';
$_['desc_checkout_order']             = 'Set payment gateway order for checkout pages.';
$_['text_order_status_after_payment'] = 'Paid Order Status';
$_['text_order_status_after_refund']  = 'Refund Order Status';
$_['text_refund_status_no_change']    = 'No Change';
$_['text_order_status_default']       = 'Default';
$_['text_enable_debug']               = 'Debug Mode';
$_['desc_enable_debug']               = 'When you activate debug mode, the movement between your server and Tami will be recorded. You can review the transactions in the %s directory.';
$_['text_store_failed_transactions']  = 'Save Failed Transactions';
$_['text_failed_orders_status']       = 'Failed Order Status';

// support
$_['text_create_ticket']                = 'Create Support Ticket';
$_['desc_contact_us']                   = 'You can contact us via contact form in merchant portal.';
$_['text_go_portal_button']             = 'Go to Portal';
$_['text_go_installation_guide_button'] = 'Go to Installation Guide';
$_['text_contact_us']                   = 'Contact Us';

// widgets
$_['text_widget_installation_title']       = 'Installation Status';
$_['text_installation_not_completed']      = 'Installation not completed.';
$_['text_widget_merchant_id']              = 'Merchant Id';
$_['text_widget_terminal_id']              = 'Terminal Id';
$_['text_widget_environment']              = 'Environment';
$_['text_widget_environment_test']         = 'Test Environment';
$_['text_widget_environment_prod']         = 'Production Environment';
$_['text_widget_go_settings']              = 'Go Merchant Settings';
$_['text_widget_last_order']               = 'Last Order Paid';
$_['text_widget_last_order_id']            = 'Order Number';
$_['text_widget_last_order_paymentdate']   = 'Payment Date';
$_['text_widget_last_order_amount']        = 'Order Total';
$_['text_widget_last_order_detail_button'] = 'Order Details';
$_['text_widget_list_orders_button']       = 'List Orders';
$_['text_last_order_not_found']            = 'No order found!';

// order tab
$_['text_ordertab_paid_with_tami'] = 'This order paid with Tami!';
$_['text_ordertab_test_payment']   = 'This payment was made in a test environment.';
$_['text_ordertab_payment_date']   = 'Payment Time';
$_['text_ordertab_payment_amount'] = 'Paid Total';
$_['text_ordertab_installment']    = 'Installment';
$_['text_ordertab_transaction_id'] = 'Transaction Number';
$_['text_ordertab_card_number']    = 'Card Number';
$_['text_ordertab_refund_title']   = 'Refund Payment';
$_['text_ordertab_refund_amount']  = 'Amount';
$_['text_ordertab_refund_button']  = 'Refund';