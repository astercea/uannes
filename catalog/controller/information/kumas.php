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

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/kumas', $data));
	}
}
