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

			foreach ($results as $result) {
				if (is_file(DIR_IMAGE . $result['image'])) {
					$data['banners'][] = array(
						'title' => $result['title'],
						'link'  => $result['link'],
						'image' => 'image/' . $result['image']
					);
				}
			}
		}

		// Ensure at least 5 banners for the swiper
		if (count($data['banners']) < 5) {
			$existing_count = count($data['banners']);
			for ($i = $existing_count + 1; $i <= 5; $i++) {
				$data['banners'][] = array(
					'title' => 'Uannes Koleksiyon ' . $i,
					'link'  => '',
					'image' => ''
				);
			}
		}

		// Dynamic Slide Images from Admin Panel with Fallbacks
		$data['slide_images'] = array();
		for ($i = 1; $i <= 5; $i++) {
			$cfg = $this->config->get('module_uannes_pages_home_slide_' . $i);
			if (!empty($cfg) && is_file(DIR_IMAGE . $cfg)) {
				$data['slide_images'][] = 'image/' . $cfg;
			} else {
				$data['slide_images'][] = 'image/catalog/slide_model_' . $i . '.jpg';
			}
		}

		// Dynamic Discover Cards from Admin Panel with Fallbacks
		$disc_hikaye = $this->config->get('module_uannes_pages_home_discover_hikaye');
		$data['discover_hikaye'] = (!empty($disc_hikaye) && is_file(DIR_IMAGE . $disc_hikaye)) ? 'image/' . $disc_hikaye : 'image/catalog/hikaye_discover_card.png';

		$disc_ozel = $this->config->get('module_uannes_pages_home_discover_ozel_uretim');
		$data['discover_ozel_uretim'] = (!empty($disc_ozel) && is_file(DIR_IMAGE . $disc_ozel)) ? 'image/' . $disc_ozel : 'image/catalog/ozel_uretim_card.png';

		$disc_kumas = $this->config->get('module_uannes_pages_home_discover_kumas');
		$data['discover_kumas'] = (!empty($disc_kumas) && is_file(DIR_IMAGE . $disc_kumas)) ? 'image/' . $disc_kumas : 'image/catalog/kumas_banner.png';

		$data['module'] = $module++;

		return $this->load->view('extension/module/imaj', $data);
	}
}
