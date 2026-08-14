<?php
class ControllerInformationFaq extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');
		$this->load->model('extension/module/faq');

		$faq_information_id = (int)$this->config->get('module_faq_information_id');
		if (!$faq_information_id) {
			$faq_information_id = 7;
		}

		$information_info = $this->model_catalog_information->getInformation($faq_information_id);

		if ($information_info) {
			$this->document->setTitle($information_info['meta_title'] ? $information_info['meta_title'] : $information_info['title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);
			$heading_title = $information_info['title'];
		} else {
			$this->document->setTitle('Sıkça Sorulan Sorular');
			$heading_title = 'Sıkça Sorulan Sorular';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $heading_title,
			'href' => $this->url->link('information/faq')
		);

		$data['heading_title'] = $heading_title;

		$data['faqs'] = $this->model_extension_module_faq->getFaqs($this->config->get('config_language_id'));

		$this->document->addScript('catalog/view/javascript/uannes-faq.js');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/faq', $data));
	}
}
