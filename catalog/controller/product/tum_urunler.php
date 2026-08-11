<?php
require_once(DIR_APPLICATION . 'controller/product/giyim.php');

class ControllerProductTumUrunler extends ControllerProductGiyim {
	protected function getCatalogueConfig() {
		return array(
			'name' => 'Tüm Ürünler',
			'category_name' => 'tüm ürünler',
			'fallback_category_id' => 64,
			'route' => 'product/tum_urunler',
			'all_products' => true,
			'exclude_category_ids' => array(64)
		);
	}
}
