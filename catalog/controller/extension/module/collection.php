<?php
class ControllerExtensionModuleCollection extends Controller {
	public function index() {
		$this->load->model('catalog/category');
		$this->load->language('extension/module/collection');

		$categories = $this->model_catalog_category->getCollectionCategories();

		$data['collection_categories'] = array();

		foreach ($categories as $category) {
			if (empty($category['image']) || !is_file(DIR_IMAGE . $category['image'])) {
				continue;
			}

			$description = html_entity_decode($category['description'], ENT_QUOTES, 'UTF-8');
			$description = trim(preg_replace('/\s+/', ' ', strip_tags($description)));

			$data['collection_categories'][] = array(
				'title'       => $category['name'],
				'description' => $description,
				'button_text' => 'KEŞFET',
				'link'        => $this->url->link('product/category', 'path=' . (int)$category['category_id']),
				'image'       => 'image/' . $category['image']
			);
		}

		if (!$data['collection_categories']) {
			return '';
		}

		return $this->load->view('extension/module/collection', $data);
	}
}
