<?php

namespace Tami\Opencart;

class ModuleSettings
{
    const MODULE_SLUG = "tami";
    private $modelOrController;

    public function __construct($modelOrController)
    {
        $this->modelOrController = $modelOrController;
    }

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
        $this->modelOrController->load->model('setting/setting');
        $settingName = ModuleSettings . phpself::get_setting_prefix() . self::MODULE_SLUG;
        $setting = $this->modelOrController->model_setting_setting->getSetting('payment_tami');
        $settingValue = $setting[$settingName . '_' . $groupName] ?? [];

        if ($fieldName && isset($settingValue[$fieldName]))
            return $settingValue[$fieldName];
        elseif ($settingValue)
            return $settingValue;
        return null;
    }
}