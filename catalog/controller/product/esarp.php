<?php
require_once(DIR_APPLICATION . 'controller/product/giyim.php');

class ControllerProductEsarp extends ControllerProductGiyim {
	protected function getCatalogueConfig() {
		return array(
			'name' => 'Eşarp',
			'category_name' => 'eşarp',
			'fallback_category_id' => 66,
			'route' => 'product/esarp'
		);
	}
}
