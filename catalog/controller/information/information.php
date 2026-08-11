<?php
class ControllerInformationInformation extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		if (in_array((int)$information_id, array(8, 12, 13))) {
			$this->response->redirect($this->url->link('common/home'));
			return;
		}

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$this->document->setTitle($information_info['meta_title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);

			$data['breadcrumbs'][] = array(
				'text' => $information_info['title'],
				'href' => $this->url->link('information/information', 'information_id=' .  $information_id)
			);

			$data['heading_title'] = $information_info['title'];
			$data['information_id'] = (int)$information_id;

			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');

			$data['continue'] = $this->url->link('common/home');

			$faq_information_id = (int)$this->config->get('module_faq_information_id');

			if (!$faq_information_id) {
				$faq_information_id = 7;
			}

			$use_faq_template = $this->config->get('module_faq_status') && $information_id === $faq_information_id;

			$use_landing_template = false;

			if ($this->config->get('module_landing_page_status')) {
				$this->load->model('extension/module/landing_page');

				$landing_page = $this->model_extension_module_landing_page->getPageByInformationId($information_id);

				if (!$landing_page && in_array((int)$information_id, array(8, 11, 12, 13))) {
					$landing_codes = array(8 => 'brand_story', 11 => 'made_to_order', 12 => 'fabrics', 13 => 'brand_story_detail');
					$landing_page = array(
						'landing_page_id' => 0,
						'code' => $landing_codes[(int)$information_id],
						'display_mode' => 'content'
					);
				}

				if ($landing_page) {
					$use_landing_template = true;
					$data['hero'] = $this->model_extension_module_landing_page->getHero($landing_page);
					$data['landing_code'] = $landing_page['code'];
					$data['display_mode'] = (!empty($landing_page['display_mode']) && $landing_page['display_mode'] === 'hub') ? 'hub' : 'content';
					$data['text_topics'] = $this->language->get('text_topics');

					if ($data['display_mode'] === 'hub') {
						$data['sections'] = $this->model_extension_module_landing_page->getChildTopics($landing_page['landing_page_id']);
					} else {
						$data['sections'] = $this->model_extension_module_landing_page->getSections($landing_page['landing_page_id']);
					}
				}
			}

			if ($use_faq_template) {
				$this->load->model('extension/module/faq');

				$data['faqs'] = $this->model_extension_module_faq->getFaqs($this->config->get('config_language_id'));

				$this->document->addScript('catalog/view/javascript/uannes-faq.js');
			}

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			if ($use_landing_template) {
				$this->response->setOutput($this->load->view('information/landing_page', $data));
			} elseif ($use_faq_template) {
				$this->response->setOutput($this->load->view('information/faq', $data));
			} else {
				$this->response->setOutput($this->load->view('information/information', $data));
			}
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->addHeader('X-Robots-Tag: noindex');

		$this->response->setOutput($output);
	}
}
