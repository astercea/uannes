<?php
class ControllerExtensionModuleReklamKarti extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/reklam_karti');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		$this->load->model('tool/image');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_reklam_karti', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/reklam_karti', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/reklam_karti', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/reklam_karti', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$sections = array('giyim', 'esarp', 'tum_urunler');
		$defaults = array(
			'giyim' => array(
				'status'   => '1',
				'position' => '6',
				'image'    => 'catalog/uannes-banner-new-season.webp',
				'eyebrow'  => 'UANNES',
				'title'    => 'YENİ SEZON',
				'text'     => 'Zamansız silüetler, özenle seçilmiş dokular.',
				'link'     => ''
			),
			'esarp' => array(
				'status'   => '0',
				'position' => '6',
				'image'    => 'catalog/uannes-banner-new-season.webp',
				'eyebrow'  => 'UANNES',
				'title'    => 'EŞARP KOLEKSİYONU',
				'text'     => 'İpeğin zarafeti, eşsiz desenlerle buluşuyor.',
				'link'     => ''
			),
			'tum_urunler' => array(
				'status'   => '1',
				'position' => '6',
				'image'    => 'catalog/uannes-banner-new-season.webp',
				'eyebrow'  => 'UANNES',
				'title'    => 'YENİ SEZON',
				'text'     => 'Zamansız silüetler, özenle seçilmiş dokular.',
				'link'     => ''
			)
		);

		foreach ($sections as $section) {
			if (isset($this->request->post['module_reklam_karti_' . $section])) {
				$section_data = $this->request->post['module_reklam_karti_' . $section];
			} elseif ($this->config->get('module_reklam_karti_' . $section)) {
				$section_data = $this->config->get('module_reklam_karti_' . $section);
			} else {
				$section_data = $defaults[$section];
			}

			if (!empty($section_data['image']) && is_file(DIR_IMAGE . $section_data['image'])) {
				$thumb = $this->model_tool_image->resize($section_data['image'], 100, 100);
			} elseif (!empty($section_data['image']) && is_file(DIR_IMAGE . $section_data['image'])) {
				$thumb = $this->model_tool_image->resize($section_data['image'], 100, 100);
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 100, 100);
			}

			$data['cards'][$section] = array(
				'status'   => isset($section_data['status']) ? $section_data['status'] : '0',
				'position' => isset($section_data['position']) ? $section_data['position'] : '6',
				'image'    => isset($section_data['image']) ? $section_data['image'] : '',
				'thumb'    => $thumb,
				'eyebrow'  => isset($section_data['eyebrow']) ? $section_data['eyebrow'] : '',
				'title'    => isset($section_data['title']) ? $section_data['title'] : '',
				'text'     => isset($section_data['text']) ? $section_data['text'] : '',
				'link'     => isset($section_data['link']) ? $section_data['link'] : ''
			);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/reklam_karti', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/reklam_karti')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
