<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		$this->load->model('catalog/category');
		$this->load->model('tool/image');

		$data['text_close'] = $this->language->get('text_close');
		$data['text_category'] = $this->language->get('text_category');
		$data['menu_items'] = array();

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		$data['name'] = $this->config->get('config_name');
		$data['home'] = $this->url->link('common/home');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		// Anasayfa mega menü: sabit sıra — Eşarp, Giyim, Tüm Ürünler
		$menu_category_ids = array(66, 67, 64);

		foreach ($menu_category_ids as $category_id) {
			$category = $this->model_catalog_category->getCategory($category_id);

			if (!$category) {
				continue;
			}

			if (!empty($category['image']) && is_file(DIR_IMAGE . $category['image'])) {
				$thumb = 'image/' . $category['image'];
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 560, 700);
			}

			$data['menu_items'][] = array(
				'name'  => $category['name'],
				'href'  => $this->url->link('product/category', 'path=' . (int)$category_id),
				'thumb' => $thumb
			);
		}

		return $this->load->view('common/menu', $data);
	}
}
