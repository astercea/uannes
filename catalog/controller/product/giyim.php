<?php
class ControllerProductGiyim extends Controller {
	protected function getCatalogueConfig() {
		return array(
			'name' => 'Giyim',
			'category_name' => 'giyim',
			'fallback_category_id' => 67,
			'route' => 'product/giyim',
			'all_products' => false,
			'exclude_category_ids' => array()
		);
	}

	public function index() {
		$catalogue = $this->getCatalogueConfig();
		$catalogue += array(
			'all_products' => false,
			'exclude_category_ids' => array()
		);
		$this->response->addHeader('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
		$this->response->addHeader('Pragma: no-cache');

		$this->load->language('product/category');
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$this->document->setTitle($catalogue['name'] . ' - Uannes');
		$data['heading_title'] = $catalogue['name'];
		$data['catalogue_name'] = $catalogue['name'];
		// The catalogue template is shared by Giyim, Eşarp and Tüm Ürünler.
		// Keep a small, predictable page modifier so individual catalogues can
		// retain their own editorial grid proportions without affecting the rest.
		$data['catalogue_key'] = preg_replace('/[^a-z0-9_-]/', '', str_replace('product/', '', $catalogue['route']));
		$data['filter_action'] = $this->url->link($catalogue['route']);

		$data['breadcrumbs'] = array(
			array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/home')),
			array('text' => $catalogue['name'], 'href' => $data['filter_action'])
		);

		$is_all_products = !empty($catalogue['all_products']);
		$data['is_all_products'] = $is_all_products;
		if ($is_all_products) {
			$catalogue_category_id = 0;
			$child_categories = $this->model_catalog_category->getCategories(0);
		} else {
			// Resolve the catalogue root by name so this page remains usable if categories
			// are restored or re-imported.
			$language_id = (int)$this->config->get('config_language_id');
			$catalogue_query = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) WHERE cd.language_id = '" . $language_id . "' AND LCASE(cd.name) = '" . $this->db->escape($catalogue['category_name']) . "' ORDER BY c.parent_id ASC, c.sort_order ASC LIMIT 1");
			$catalogue_category_id = $catalogue_query->num_rows ? (int)$catalogue_query->row['category_id'] : (int)$catalogue['fallback_category_id'];
			$child_categories = $this->model_catalog_category->getCategories($catalogue_category_id);
		}
		$allowed_category_ids = array();
		$data['filter_categories'] = array();

		foreach ($child_categories as $category) {
			$category_id = (int)$category['category_id'];
			if (in_array($category_id, $catalogue['exclude_category_ids'], true)) {
				continue;
			}
			$allowed_category_ids[] = $category_id;
			$data['filter_categories'][] = array(
				'id' => $category_id,
				'name' => $category['name']
			);
		}

		$selected_category = isset($this->request->get['kategori']) ? (int)$this->request->get['kategori'] : 0;
		if (!in_array($selected_category, $allowed_category_ids, true)) {
			$selected_category = 0;
		}

		$selected_color = isset($this->request->get['renk']) ? (int)$this->request->get['renk'] : 0;
		$selected_size = isset($this->request->get['beden']) ? (int)$this->request->get['beden'] : 0;
		$selected_stock = isset($this->request->get['stok']) ? $this->request->get['stok'] : 'all';
		$stock_filters = array('all', 'in-stock', 'low-stock', 'out-of-stock');
		if (!in_array($selected_stock, $stock_filters, true)) {
			$selected_stock = 'all';
		}

		$filter_data = array(
			'sort' => 'p.sort_order',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 100
		);
		if ($selected_category || !$is_all_products) {
			$filter_data['filter_category_id'] = $selected_category ? $selected_category : $catalogue_category_id;
			$filter_data['filter_sub_category'] = true;
		}
		$results = $this->model_catalog_product->getProducts($filter_data);

		$color_values = array();
		$size_values = array();
		$product_records = array();

		foreach ($results as $result) {
			$product_colors = array();
			$product_sizes = array();

			foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
				$option_name = utf8_strtolower(trim($option['name']));
				$is_color = strpos($option_name, 'renk') !== false || strpos($option_name, 'color') !== false || strpos($option_name, 'colour') !== false;
				$is_size = strpos($option_name, 'beden') !== false || strpos($option_name, 'size') !== false || strpos($option_name, 'ölçü') !== false;

				foreach ($option['product_option_value'] as $option_value) {
					$value_id = (int)$option_value['option_value_id'];
					if ($is_color) {
						$product_colors[] = $value_id;
						$color_values[$value_id] = $option_value['name'];
					}
					if ($is_size) {
						$product_sizes[] = $value_id;
						$size_values[$value_id] = $option_value['name'];
					}
				}
			}

			$product_records[] = array(
				'product' => $result,
				'colors' => array_unique($product_colors),
				'sizes' => array_unique($product_sizes)
			);
		}

		asort($color_values, SORT_NATURAL | SORT_FLAG_CASE);
		uksort($size_values, function ($first, $second) use ($size_values) {
			return strnatcasecmp($size_values[$first], $size_values[$second]);
		});

		$data['filter_colors'] = array();
		foreach ($color_values as $id => $name) {
			$data['filter_colors'][] = array('id' => $id, 'name' => $name);
		}
		$data['filter_sizes'] = array();
		foreach ($size_values as $id => $name) {
			$data['filter_sizes'][] = array('id' => $id, 'name' => $name);
		}

		$data['products'] = array();
		foreach ($product_records as $record) {
			$result = $record['product'];
			$quantity = (int)$result['quantity'];
			$matches_stock = $selected_stock === 'all'
				|| ($selected_stock === 'in-stock' && $quantity > 0)
				|| ($selected_stock === 'low-stock' && $quantity > 0 && $quantity <= 5)
				|| ($selected_stock === 'out-of-stock' && $quantity <= 0);

			if (($selected_color && !in_array($selected_color, $record['colors'], true))
				|| ($selected_size && !in_array($selected_size, $record['sizes'], true))
				|| !$matches_stock) {
				continue;
			}

			$product_images = $this->model_catalog_product->getProductImages($result['product_id']);
			$image_sources = array();
			// The product image is the intentional catalogue cover. Keep it first
			// instead of allowing the first detail-gallery image to replace it.
			if (!empty($result['image'])) {
				$image_sources[] = $result['image'];
			}
			foreach ($product_images as $product_image) {
				if (!empty($product_image['image'])) {
					$image_sources[] = $product_image['image'];
				}
			}
			$image_sources = array_values(array_unique($image_sources));
			if (!$image_sources) {
				$image_sources[] = 'placeholder.png';
			}

			// Detect whether this product belongs to the Eşarp category (66)
			// so we can use square card dimensions for scarves everywhere.
			$esarp_category_id = 66;
			$is_esarp = false;
			if (isset($catalogue['fallback_category_id']) && (int)$catalogue['fallback_category_id'] === $esarp_category_id) {
				$is_esarp = true;
			} else {
				$cat_query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$result['product_id'] . "' AND category_id = '" . $esarp_category_id . "' LIMIT 1");
				$is_esarp = $cat_query->num_rows > 0;
			}

			if ($is_esarp) {
				$card_w = 500;
				$card_h = 500;
			} else {
				$card_w = isset($catalogue['card_image_width'])  ? (int)$catalogue['card_image_width']  : 400;
				$card_h = isset($catalogue['card_image_height']) ? (int)$catalogue['card_image_height'] : 500;
			}
			$images = array();
			foreach ($image_sources as $image_source) {
				$images[] = $this->model_tool_image->resizeCover($image_source, $card_w, $card_h);
			}

			$badge_info = $this->model_catalog_product->getProductBadges($result);
			$data['products'][] = array(
				'product_id' => $result['product_id'],
				'images' => $images,
				'name' => $result['name'],
				'badges' => $badge_info['badges'],
				'is_esarp' => $is_esarp,
				'href' => $this->url->link('product/product', 'product_id=' . $result['product_id'])
			);
		}

		$data['selected_filters'] = array(
			'category' => $selected_category,
			'color' => $selected_color,
			'size' => $selected_size,
			'stock' => $selected_stock
		);
		$data['active_filter_count'] = ($selected_category ? 1 : 0) + ($selected_color ? 1 : 0) + ($selected_size ? 1 : 0) + ($selected_stock !== 'all' ? 1 : 0);

		// Reklam Kartı (Promo Card) Configuration
		$ad_setting = $this->config->get('module_reklam_karti_' . $data['catalogue_key']);
		if ($ad_setting === null) {
			$ad_defaults = array(
				'giyim' => array('status' => '1', 'position' => '6', 'image' => 'catalog/uannes-banner-new-season.webp', 'eyebrow' => 'UANNES', 'title' => 'YENİ SEZON', 'text' => 'Zamansız silüetler, özenle seçilmiş dokular.', 'link' => ''),
				'esarp' => array('status' => '0', 'position' => '6', 'image' => 'catalog/uannes-banner-new-season.webp', 'eyebrow' => 'UANNES', 'title' => 'EŞARP KOLEKSİYONU', 'text' => 'İpeğin zarafeti, eşsiz desenlerle buluşuyor.', 'link' => ''),
				'tum_urunler' => array('status' => '1', 'position' => '6', 'image' => 'catalog/uannes-banner-new-season.webp', 'eyebrow' => 'UANNES', 'title' => 'YENİ SEZON', 'text' => 'Zamansız silüetler, özenle seçilmiş dokular.', 'link' => '')
			);
			$ad_setting = isset($ad_defaults[$data['catalogue_key']]) ? $ad_defaults[$data['catalogue_key']] : null;
		}

		if (!empty($ad_setting) && !empty($ad_setting['status']) && (string)$ad_setting['status'] === '1') {
			$ad_image_rel = !empty($ad_setting['image']) ? $ad_setting['image'] : 'catalog/uannes-banner-new-season.webp';
			if (is_file(DIR_IMAGE . $ad_image_rel)) {
				$ad_image_url = 'image/' . $ad_image_rel;
			} else {
				$ad_image_url = 'image/catalog/uannes-banner-new-season.webp';
			}

			$data['ad_card'] = array(
				'status'   => true,
				'position' => !empty($ad_setting['position']) ? (int)$ad_setting['position'] : 6,
				'image'    => $ad_image_url,
				'eyebrow'  => !empty($ad_setting['eyebrow']) ? $ad_setting['eyebrow'] : '',
				'title'    => !empty($ad_setting['title']) ? $ad_setting['title'] : '',
				'text'     => !empty($ad_setting['text']) ? $ad_setting['text'] : '',
				'link'     => !empty($ad_setting['link']) ? $ad_setting['link'] : ''
			);
		} else {
			$data['ad_card'] = false;
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/giyim', $data));
	}
}
