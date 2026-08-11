<?php
/**
 * File: tami.php
 * Year: 2023
 */

// Heading
$_['heading_title']          = 'Tami - Ödeme Yöntemi';
$_['menu_title']             = 'Tami';
$_['text_tami']              = '<a href="https://www.gri.net/" target="_blank">XX</a>';
$_['text_tami_child']        = 'Alt';
$_['warn_changes_saved']     = 'Değişiklikler kaydedildi!';
$_['validate_correct']       = 'Girmiş olduğunuz bilgiler geçerli görünüyor.';
$_['validate_error']         = 'Mağaza bilgilerini kontrol ediniz.';
$_['tami_an_error_occurred'] = 'Bir hata oluştu!';
$_['tami_swal_close']        = 'Kapat';

$_['module_menu_label_home']                 = 'Giriş';
$_['module_menu_label_api_settings']         = 'API Ayarları';
$_['module_menu_label_installment_settings'] = 'Taksit Ayarları';
$_['module_menu_label_module_settings']      = 'Modül Ayarları';
$_['module_menu_label_support']              = 'Destek';

$_['text_save_changes'] = 'Değişiklikleri Kaydet';

// api settings
$_['text_api_environment_test']           = 'Test Ortamı';
$_['text_api_environment_prod']           = 'Gerçek Ortam';
$_['text_merchant_id']                    = 'Mağaza Numarası';
$_['text_terminal_id']                    = 'Terminal Numarası';
$_['text_security_method']                = 'Doğrulama Yöntemi';
$_['text_security_method_3d']             = '3D Güvenli Ödeme(Önerilen)';
$_['text_security_method_non_secure']     = 'Non Secure';
$_['text_security_method_hosted_payment'] = 'Ortak Ödeme Sayfası';
$_['text_hash_value']                     = 'Hash Değeri';
$_['text_secret_key']                     = 'Gizli Anahtar';
$_['text_fixed_kid_value']                = 'Sabit KID Değeri';
$_['text_fixed_k_value']                  = 'Sabit K Değeri';
$_['text_button_verify']                  = 'Bilgileri Kontrol Et';

// installment settings
$_['text_minimum_installment_amount'] = 'Taksit Alt Limiti';
$_['desc_minimum_installment_amount'] = 'Taksitli ödemeler için bir alt limit ayarlamak istiyorsanız doldurunuz. Boş bıraktığınız takdirde alt limit uygulanmayacak tüm tutarlar için taksite izin verilecektir.';
$_['text_installment_input_label']    = '%d Taksit';
$_['desc_installment_input_label']    = 'Uygulanacak vade farkı oranını giriniz. Örnek: 4.74';
$_['text_installments_disabled']      = 'Taksitli ödemeler aktif değil.';
$_['text_installments_rates']         = 'Taksit Oranları';
$_['text_enable_installments']        = 'Taksitli ödemeleri aktifleştir.';

// module settings
$_['text_module_enable_disable']      = 'Tami\'yi Etkinleştir';
$_['desc_module_enable_disable']      = 'Ödeme yöntemini müşterilerinize sunmak için aktif edin.';
$_['text_method_name']                = 'Ödeme Yöntemi Adı';
$_['desc_method_name']                = 'Ödeme sayfasında görüntülenecek yöntem adını giriniz.';
$_['text_checkout_order']             = 'Sepet Sıralaması';
$_['desc_checkout_order']             = 'Ödeme yönteminin sipariş sırasında kaçıncı sırada görüntüleneceğini belirleyin.';
$_['text_order_status_after_payment'] = 'Ödenen Sipariş Durumu';
$_['text_order_status_after_refund']  = 'İade Sipariş Durumu';
$_['text_refund_status_no_change']    = 'Değiştirme';
$_['text_order_status_default']       = 'Varsayılan';
$_['text_enable_debug']               = 'Hata Ayıklama Modu';
$_['desc_enable_debug']               = 'Hata ayıklama modunu aktif ettiğinizde sunucunuz ve Tami arasındaki hareket kayıt altına alınacaktır. Hareketleri %s dizininde inceleyebilirsiniz.';
$_['text_store_failed_transactions']  = 'Başarısız İşlem Kayıtları';
$_['text_failed_orders_status']       = 'Başarısız Sipariş Durumu';

// support
$_['text_create_ticket']                = 'Destek Talebi Oluşturun';
$_['desc_contact_us']                   = 'Üye iş yeri portali üzerinden iletişim formunu doldurarak bize ulaşabilirsin.';
$_['text_go_portal_button']             = 'Portale Git';
$_['text_go_installation_guide_button'] = 'Kurulum Rehberine Git';
$_['text_contact_us']                   = 'Bize Ulaşın';

// widgets
$_['text_widget_installation_title']       = 'Kurulum Detayları';
$_['text_installation_not_completed']      = 'Kurulum henüz tamamlanmadı.';
$_['text_widget_merchant_id']              = 'Mağaza Numarası';
$_['text_widget_terminal_id']              = 'Terminal Numarası';
$_['text_widget_environment']              = 'Aktif Ortam';
$_['text_widget_environment_test']         = 'Test Ortamı';
$_['text_widget_environment_prod']         = 'Gerçek Ortam';
$_['text_widget_go_settings']              = 'Ayarlara Git';
$_['text_widget_last_order']               = 'Son Başarılı Sipariş';
$_['text_widget_last_order_id']            = 'Sipariş Numarası';
$_['text_widget_last_order_paymentdate']   = 'Ödeme Tarihi';
$_['text_widget_last_order_amount']        = 'Sipariş Tutarı';
$_['text_widget_last_order_detail_button'] = 'Sipariş Detayları';
$_['text_widget_list_orders_button']       = 'Siparişleri Listele';
$_['text_last_order_not_found']            = 'Sipariş bulunamadı!';

// order tab
$_['text_ordertab_paid_with_tami'] = 'Bu sipariş Tami ile ödenmiştir!';
$_['text_ordertab_test_payment']   = 'Bu ödeme test ortamında gerçekleştirilmiştir.';
$_['text_ordertab_payment_date']   = 'Ödeme Tarihi';
$_['text_ordertab_payment_amount'] = 'Ödenen Tutar';
$_['text_ordertab_installment']    = 'Taksit';
$_['text_ordertab_transaction_id'] = 'İşlem Numarası';
$_['text_ordertab_card_number']    = 'Kart Numarası';
$_['text_ordertab_refund_title']   = 'Ödemeyi İade Et';
$_['text_ordertab_refund_amount']  = 'İade Tutarı';
$_['text_ordertab_refund_button']  = 'İade Et';