<?php
class ControllerExtensionModuleSlideshow extends Controller {
	public function index($setting) {
		static $module = 0;		

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title'       => $result['title'],
					'description' => isset($result['description']) ? $result['description'] : '',
					'button_text' => isset($result['button_text']) ? $result['button_text'] : '',
					'link'        => html_entity_decode($result['link'], ENT_QUOTES, 'UTF-8'),
					'image'       => 'image/' . $result['image']
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/slideshow', $data);
	}
}