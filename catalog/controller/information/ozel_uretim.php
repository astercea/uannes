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

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/ozel_uretim', $data));
	}
}
