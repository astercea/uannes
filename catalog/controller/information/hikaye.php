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

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('information/hikaye', $data));
	}
}
