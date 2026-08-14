<?php
class ControllerExtensionModuleUannesPages extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/uannes_pages');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		$this->load->model('tool/image');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_uannes_pages', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/uannes_pages', 'user_token=' . $this->session->data['user_token'], true));
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
			'href' => $this->url->link('extension/module/uannes_pages', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/uannes_pages', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		// Placeholder image
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		// Image fields definition
		$fields = array(
			// Home Slider (5 slides)
			'module_uannes_pages_home_slide_1',
			'module_uannes_pages_home_slide_2',
			'module_uannes_pages_home_slide_3',
			'module_uannes_pages_home_slide_4',
			'module_uannes_pages_home_slide_5',
			// Home Discover (3 cards)
			'module_uannes_pages_home_discover_hikaye',
			'module_uannes_pages_home_discover_ozel_uretim',
			'module_uannes_pages_home_discover_kumas',
			// Hikaye
			'module_uannes_pages_hikaye_hero_bg',
			'module_uannes_pages_hikaye_chapter_img',
			'module_uannes_pages_hikaye_cta_bg',
			// Kumas
			'module_uannes_pages_kumas_hero_bg',
			'module_uannes_pages_kumas_card_twill',
			'module_uannes_pages_kumas_card_satin',
			'module_uannes_pages_kumas_card_linen',
			'module_uannes_pages_kumas_cta_bg',
			// Ozel Uretim
			'module_uannes_pages_ozel_hero_bg',
			'module_uannes_pages_ozel_chapter_img',
			'module_uannes_pages_ozel_gallery_1',
			'module_uannes_pages_ozel_gallery_2',
			'module_uannes_pages_ozel_gallery_3',
			'module_uannes_pages_ozel_gallery_4',
			'module_uannes_pages_ozel_cta_bg',
		);

		foreach ($fields as $field) {
			if (isset($this->request->post[$field])) {
				$data[$field] = $this->request->post[$field];
			} else {
				$data[$field] = $this->config->get($field);
			}

			$thumb_field = 'thumb_' . $field;
			if (!empty($data[$field]) && is_file(DIR_IMAGE . $data[$field])) {
				$data[$thumb_field] = $this->model_tool_image->resize($data[$field], 100, 100);
			} else {
				$data[$thumb_field] = $data['placeholder'];
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/uannes_pages', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/uannes_pages') && !$this->user->hasPermission('modify', 'design/banner')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
