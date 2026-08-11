<?php
/**
 * File: tami.php
 * Year: 2023
 */

class ModelExtensionPaymentTami extends Model {
	public function install()
	{
		$this->db->query( "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "tami_order_meta` (
				`id` INT(11) NOT NULL AUTO_INCREMENT,
				`order_id` INT(11) NOT NULL,
				`meta_key` varchar(255) NOT NULL,
				`meta_value` varchar(255),
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
		");
		return true;
	}
}
