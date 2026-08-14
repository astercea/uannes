<?php
class ControllerInformationKumas extends Controller {
	public function index() {
		$this->document->setTitle('Kumaşlar & Doku Rehberi | Uannes');
		$this->document->setDescription('Uannes ürünlerinde kullanılan %100 doğal ipek twill, ipek saten, bambu ipek ve lüks dokuma kumaşların özellikleri, dokuları ve bakım rehberi.');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => 'Anasayfa',
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Kumaşlarımız',
			'href' => $this->url->link('information/kumas')
		);

		// Dynamic Images with Fallbacks
		$hero_bg = $this->config->get('module_uannes_pages_kumas_hero_bg');
		$data['hero_bg'] = (!empty($hero_bg) && is_file(DIR_IMAGE . $hero_bg)) ? 'image/' . $hero_bg : 'image/catalog/kumas_banner.png';

		$card_twill = $this->config->get('module_uannes_pages_kumas_card_twill');
		$data['card_twill'] = (!empty($card_twill) && is_file(DIR_IMAGE . $card_twill)) ? 'image/' . $card_twill : 'image/catalog/kumas_twill.png';

		$card_satin = $this->config->get('module_uannes_pages_kumas_card_satin');
		$data['card_satin'] = (!empty($card_satin) && is_file(DIR_IMAGE . $card_satin)) ? 'image/' . $card_satin : 'image/catalog/kumas_satin.png';

		$card_linen = $this->config->get('module_uannes_pages_kumas_card_linen');
		$data['card_linen'] = (!empty($card_linen) && is_file(DIR_IMAGE . $card_linen)) ? 'image/' . $card_linen : 'image/catalog/kumas_linen.png';

		$cta_bg = $this->config->get('module_uannes_pages_kumas_cta_bg');
		$data['cta_bg'] = (!empty($cta_bg) && is_file(DIR_IMAGE . $cta_bg)) ? 'image/' . $cta_bg : 'image/catalog/kumas_satin.png';

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/kumas', $data));
	}
}
