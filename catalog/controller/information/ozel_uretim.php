<?php
class ControllerInformationOzelUretim extends Controller {
	public function index() {
		$this->document->setTitle('Kişiye Özel Üretim & Zanaat Atölyesi | Uannes');
		$this->document->setDescription('Size ve kurumunuza özel ipek dokuma, monogram işleme, özel desen tasarımı ve bespoke zanaat koleksiyonları.');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => 'Anasayfa',
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Özel Üretim',
			'href' => $this->url->link('information/ozel_uretim')
		);

		// Dynamic Images with Fallbacks
		$hero_bg = $this->config->get('module_uannes_pages_ozel_hero_bg');
		$data['hero_bg'] = (!empty($hero_bg) && is_file(DIR_IMAGE . $hero_bg)) ? 'image/' . $hero_bg : 'image/catalog/ozel_uretim_hero.png';

		$chapter_img = $this->config->get('module_uannes_pages_ozel_chapter_img');
		$data['chapter_img'] = (!empty($chapter_img) && is_file(DIR_IMAGE . $chapter_img)) ? 'image/' . $chapter_img : 'image/catalog/ozel_uretim_bespoke.png';

		$gallery_1 = $this->config->get('module_uannes_pages_ozel_gallery_1');
		$data['gallery_1'] = (!empty($gallery_1) && is_file(DIR_IMAGE . $gallery_1)) ? 'image/' . $gallery_1 : 'image/catalog/ozel_gallery_1.jpg';

		$gallery_2 = $this->config->get('module_uannes_pages_ozel_gallery_2');
		$data['gallery_2'] = (!empty($gallery_2) && is_file(DIR_IMAGE . $gallery_2)) ? 'image/' . $gallery_2 : 'image/catalog/ozel_gallery_2.jpg';

		$gallery_3 = $this->config->get('module_uannes_pages_ozel_gallery_3');
		$data['gallery_3'] = (!empty($gallery_3) && is_file(DIR_IMAGE . $gallery_3)) ? 'image/' . $gallery_3 : 'image/catalog/ozel_gallery_3.jpg';

		$gallery_4 = $this->config->get('module_uannes_pages_ozel_gallery_4');
		$data['gallery_4'] = (!empty($gallery_4) && is_file(DIR_IMAGE . $gallery_4)) ? 'image/' . $gallery_4 : 'image/catalog/ozel_gallery_4.jpg';

		$cta_bg = $this->config->get('module_uannes_pages_ozel_cta_bg');
		$data['cta_bg'] = (!empty($cta_bg) && is_file(DIR_IMAGE . $cta_bg)) ? 'image/' . $cta_bg : 'image/catalog/ozel_uretim_cta.png';

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/ozel_uretim', $data));
	}
}
