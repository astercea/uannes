<?php
class ControllerExtensionModuleImaj extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.min.js');

		$data['banners'] = array();

		if (!empty($setting['banner_id'])) {
			$results = $this->model_design_banner->getBanner($setting['banner_id']);

			$card_index = 0;
			foreach ($results as $result) {
				if (is_file(DIR_IMAGE . $result['image'])) {
					$banner_img = ($card_index === 0) ? 'image/catalog/marka_hikayesi_card1.png' : 'image/' . $result['image'];
					$data['banners'][] = array(
						'title' => $result['title'],
						'image' => $banner_img
					);
					$card_index++;
				}
			}
		}

		if (!$data['banners']) {
			return '';
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/imaj', $data);
	}
}
