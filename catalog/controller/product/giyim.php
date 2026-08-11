<?php
class ControllerProductGiyim extends Controller {
	public function index() {
		$this->response->addHeader('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
		$this->response->addHeader('Pragma: no-cache');

		$this->load->language('product/category');
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$this->document->setTitle('Giyim - Uannes');
		$data['heading_title'] = 'Giyim';
		$data['filter_action'] = $this->url->link('product/giyim');

		$data['breadcrumbs'] = array(
			array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/home')),
			array('text' => 'Giyim', 'href' => $data['filter_action'])
		);

		// Giyim is the catalogue root (currently category 67). Resolve it by name
		// first so this page remains usable if categories are restored or re-imported.
		$language_id = (int)$this->config->get('config_language_id');
		$giyim_query = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) WHERE cd.language_id = '" . $language_id . "' AND LCASE(cd.name) = 'giyim' ORDER BY c.parent_id ASC, c.sort_order ASC LIMIT 1");
		$giyim_category_id = $giyim_query->num_rows ? (int)$giyim_query->row['category_id'] : 67;

		$child_categories = $this->model_catalog_category->getCategories($giyim_category_id);
		$allowed_category_ids = array();
		$data['filter_categories'] = array();

		foreach ($child_categories as $category) {
			$category_id = (int)$category['category_id'];
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
			'filter_category_id' => $selected_category ? $selected_category : $giyim_category_id,
			'filter_sub_category' => true,
			'sort' => 'p.sort_order',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 100
		);
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
			if (!empty($product_images[0]['image'])) {
				$image_sources[] = $product_images[0]['image'];
			}
			foreach ($product_images as $product_image) {
				if (!empty($product_image['image'])) {
					$image_sources[] = $product_image['image'];
				}
			}
			if (!empty($result['image'])) {
				$image_sources[] = $result['image'];
			}
			$image_sources = array_values(array_unique($image_sources));
			if (!$image_sources) {
				$image_sources[] = 'placeholder.png';
			}

			$images = array();
			foreach ($image_sources as $image_source) {
				$images[] = $this->model_tool_image->resizeCover($image_source, 400, 500);
			}

			$badge_info = $this->model_catalog_product->getProductBadges($result);
			$data['products'][] = array(
				'product_id' => $result['product_id'],
				'images' => $images,
				'name' => $result['name'],
				'badges' => $badge_info['badges'],
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

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/giyim', $data));
	}
}
