<?php
class ControllerInformationHikaye extends Controller {
	public function index() {
		$this->document->setTitle('Uannes\'in Hikayesi | Zamansız Zarafet ve Miras');
		$this->document->setDescription('Akdeniz köklerinden doğan Uannes hikayesi; doğaya saygılı saf dokular, zanaatkar işçilik ve zamansız lüksün buluşması.');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => 'Anasayfa',
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Uannes\'in Hikayesi',
			'href' => $this->url->link('information/hikaye')
		);

		// Dynamic Images with Fallbacks
		$hero_bg = $this->config->get('module_uannes_pages_hikaye_hero_bg');
		$data['hero_bg'] = (!empty($hero_bg) && is_file(DIR_IMAGE . $hero_bg)) ? 'image/' . $hero_bg : 'image/catalog/hikaye_hero.png';

		$chapter_img = $this->config->get('module_uannes_pages_hikaye_chapter_img');
		$data['chapter_img'] = (!empty($chapter_img) && is_file(DIR_IMAGE . $chapter_img)) ? 'image/' . $chapter_img : 'image/catalog/hikaye_atelier.png';

		$cta_bg = $this->config->get('module_uannes_pages_hikaye_cta_bg');
		$data['cta_bg'] = (!empty($cta_bg) && is_file(DIR_IMAGE . $cta_bg)) ? 'image/' . $cta_bg : 'image/catalog/hikaye_cta_banner.png';

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/hikaye', $data));
	}
}
