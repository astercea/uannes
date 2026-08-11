<?php
/**
 * File: tami.php
 * Year: 2023
 */

$_['tami_checkout_i18n'] = [
    'card' => [
        'cardHolder' => 'Kart Sahibi',
        'fullName' => 'AD SOYAD',
        'expires' => 'Son Kullanım',
        'MM' => 'AA',
        'YY' => 'YY'
    ],
    'cardForm' => [
        'cardNumber' => 'Kart Numarası',
        'cardName' => 'Kart Sahibi',
        'expirationDate' => 'Son Kullanım Tarihi',
        'month' => 'Ay',
        'year' => 'Yıl',
        'CVV' => 'CVV',
        'invalidCardNumber' => 'Geçersiz kart numarası!',
        'installmentTableNumber' => 'Taksit',
        'installmentTableTotal' => 'Toplam',
        'installmentTableLabelAdvance' => 'Peşin',
        'installmentTableLabel' => '%d Taksit',
        'submit' => 'Ödeme Yap',
    ]
];
$_['tami_checkout_popup'] = [
    'contacting' => 'Bankanız ile iletişim kuruluyor',
    'please_wait' => 'Lütfen bekleyin...'
];
$_['payment_errors'] = [
	'invalidCardNumber' => 'Lütfen geçerli bir kart numarası giriniz!',
	'invalidExpiryMonth' => 'Lütfen geçerli bir kart son kullanım tarihi giriniz!',
	'invalidExpiryYear' => 'Lütfen geçerli bir kart son kullanım tarihi giriniz!',
	'invalidCVV' => 'Lütfen geçerli bir CVV kodu giriniz!',
	'unknown' => 'Bilinmeyen bir hata oluştu!',
];
$_['checkout_process'] = [
	'error_title' => 'Bir hata oluştu!',
	'error_button_text' => 'Tamam'
];
$_['text_installment_fee_label'] = "Vade Farkı (%d Taksit)";
$_['text_checkout_label'] = "Kredi/Banka Kartı ile Ödeme";