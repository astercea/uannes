<?php
/**
 * File: tami.php
 * Year: 2023
 */

class ModelExtensionPaymentTami extends Model
{
    const MODULE_SLUG = "tami";


    /*
      CREATE TABLE `opencart3`.`oc_tami_order_meta`
          (
              `id` BIGINT NOT NULL AUTO_INCREMENT ,
              `order_id` INT NOT NULL ,
              `meta_key` VARCHAR(255) NOT NULL ,
              `meta_value` VARCHAR(500) NOT NULL ,
              PRIMARY KEY (`id`)
          )
     * */

    public static function get_opencart_version()
    {
        if (!defined('VERSION')) {
            return 3;
        }

        return doubleval(VERSION);
    }

    public static function get_setting_prefix()
    {
        $version = self::get_opencart_version();
        return $version === 3.0 ? 'payment_' : '';
    }

    public function get_settings($groupName = '', $fieldName = '')
    {
        $this->load->model('setting/setting');
        $settingName = self::get_setting_prefix() . self::MODULE_SLUG;
        $setting = $this->model_setting_setting->getSetting('payment_tami');

        $settingValue = $setting[$settingName . '_' . $groupName] ?? [];

        if ($fieldName && isset($settingValue[$fieldName]))
            return $settingValue[$fieldName];
        elseif ($settingValue)
            return $settingValue;
        return null;
    }

    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/tami');
		$title = $this->get_settings('module_settings','title');
		if(!$title)
			$title = $this->language->get('text_checkout_label');

        if (intval($this->get_settings('status')) > 0) {
            return array(
                'code' => 'tami',
                'title' => $title,
                'terms' => '',
                'sort_order' => (int)$this->get_settings('module_settings','checkout_order')
            );
        }
        return null;
    }
}
