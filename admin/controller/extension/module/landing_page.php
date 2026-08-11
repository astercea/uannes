<?php
class ControllerExtensionModuleLandingPage extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/landing_page');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_landing_page', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
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
			'href' => $this->url->link('extension/module/landing_page', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/landing_page', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['list'] = $this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true);

		$data['module_landing_page_status'] = $this->request->post['module_landing_page_status'] ?? $this->config->get('module_landing_page_status');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/landing_page', $data));
	}

	public function list() {
		$this->load->language('extension/module/landing_page');

		$this->document->setTitle($this->language->get('text_list'));

		$this->load->model('extension/module/landing_page');

		$this->getList();
	}

	public function add() {
		$this->load->language('extension/module/landing_page');

		$this->document->setTitle($this->language->get('text_add'));

		$this->load->model('extension/module/landing_page');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			if (empty($this->request->post['code']) && !empty($this->request->post['name'])) {
				$this->request->post['code'] = str_replace('-', '_', $this->model_extension_module_landing_page->slugify($this->request->post['name']));
			}

			$this->model_extension_module_landing_page->addLandingPage($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success_item');

			$this->response->redirect($this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('extension/module/landing_page');

		$this->document->setTitle($this->language->get('text_edit'));

		$this->load->model('extension/module/landing_page');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_module_landing_page->editLandingPage($this->request->get['landing_page_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success_item');

			$this->response->redirect($this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('extension/module/landing_page');

		$this->load->model('extension/module/landing_page');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $landing_page_id) {
				$this->model_extension_module_landing_page->deleteLandingPage($landing_page_id);
			}

			$this->session->data['success'] = $this->language->get('text_success_delete');

			$this->response->redirect($this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getList();
	}

	public function install() {
		$this->load->model('extension/module/landing_page');
		$this->model_extension_module_landing_page->install();
	}

	public function uninstall() {
		$this->load->model('extension/module/landing_page');
		$this->model_extension_module_landing_page->uninstall();
	}

	protected function getList() {
		$this->load->model('extension/module/landing_page');
		$this->model_extension_module_landing_page->ensureSchema();

		$data['heading_title'] = $this->language->get('heading_title');

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
			'text' => $this->language->get('text_list'),
			'href' => $this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['add'] = $this->url->link('extension/module/landing_page/add', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('extension/module/landing_page/delete', 'user_token=' . $this->session->data['user_token'], true);
		$data['settings'] = $this->url->link('extension/module/landing_page', 'user_token=' . $this->session->data['user_token'], true);

		$data['landing_pages'] = array();

		$results = $this->model_extension_module_landing_page->getLandingPages();
		$parents = array();
		$children = array();

		foreach ($results as $result) {
			$parent_id = isset($result['parent_landing_page_id']) ? (int)$result['parent_landing_page_id'] : 0;

			if ($parent_id > 0) {
				$children[$parent_id][] = $result;
			} else {
				$parents[] = $result;
			}
		}

		$ordered = array();

		foreach ($parents as $parent) {
			$ordered[] = array('row' => $parent, 'depth' => 0);

			if (!empty($children[$parent['landing_page_id']])) {
				foreach ($children[$parent['landing_page_id']] as $child) {
					$ordered[] = array('row' => $child, 'depth' => 1);
				}
			}
		}

		foreach ($children as $parent_id => $child_rows) {
			$known = false;

			foreach ($parents as $parent) {
				if ((int)$parent['landing_page_id'] === (int)$parent_id) {
					$known = true;
					break;
				}
			}

			if ($known) {
				continue;
			}

			foreach ($child_rows as $child) {
				$ordered[] = array('row' => $child, 'depth' => 1);
			}
		}

		foreach ($ordered as $item) {
			$result = $item['row'];
			$prefix = $item['depth'] > 0 ? str_repeat('— ', $item['depth']) : '';
			$mode = (!empty($result['display_mode']) && $result['display_mode'] === 'hub') ? $this->language->get('text_mode_hub') : $this->language->get('text_mode_content');

			$data['landing_pages'][] = array(
				'landing_page_id'   => $result['landing_page_id'],
				'name'              => $prefix . $result['name'],
				'code'              => $result['code'],
				'information_title' => $result['information_title'],
				'display_mode'      => $mode,
				'sort_order'        => $result['sort_order'],
				'status'            => $result['status'],
				'edit'              => $this->url->link('extension/module/landing_page/edit', 'user_token=' . $this->session->data['user_token'] . '&landing_page_id=' . $result['landing_page_id'], true)
			);
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/landing_page_list', $data));
	}

	protected function getForm() {
		$this->load->model('extension/module/landing_page');
		$this->model_extension_module_landing_page->ensureSchema();

		$data['text_form'] = !isset($this->request->get['landing_page_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['code'])) {
			$data['error_code'] = $this->error['code'];
		} else {
			$data['error_code'] = '';
		}

		if (isset($this->error['section'])) {
			$data['error_section'] = $this->error['section'];
		} else {
			$data['error_section'] = array();
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_list'),
			'href' => $this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (!isset($this->request->get['landing_page_id'])) {
			$data['action'] = $this->url->link('extension/module/landing_page/add', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/landing_page/edit', 'user_token=' . $this->session->data['user_token'] . '&landing_page_id=' . $this->request->get['landing_page_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/module/landing_page/list', 'user_token=' . $this->session->data['user_token'], true);

		$landing_info = array();

		if (isset($this->request->get['landing_page_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$landing_info = $this->model_extension_module_landing_page->getLandingPage($this->request->get['landing_page_id']);
		}

		$fields = array('name', 'code', 'information_id', 'parent_landing_page_id', 'hero_banner_id', 'hero_banner_image_id', 'sort_order', 'status', 'display_mode', 'image', 'seo_keyword');

		foreach ($fields as $field) {
			if (isset($this->request->post[$field])) {
				$data[$field] = $this->request->post[$field];
			} elseif ($field === 'seo_keyword') {
				$data[$field] = '';
			} elseif (!empty($landing_info) && isset($landing_info[$field])) {
				$data[$field] = $landing_info[$field];
			} elseif ($field === 'status') {
				$data[$field] = 1;
			} elseif ($field === 'hero_banner_id') {
				$data[$field] = 7;
			} elseif ($field === 'display_mode') {
				$data[$field] = 'content';
			} elseif ($field === 'parent_landing_page_id') {
				$data[$field] = 0;
			} else {
				$data[$field] = '';
			}
		}

		$hub_parents = $this->model_extension_module_landing_page->getHubParents();
		$data['hub_parents'] = array();

		foreach ($hub_parents as $hub_parent) {
			if (isset($this->request->get['landing_page_id']) && (int)$hub_parent['landing_page_id'] === (int)$this->request->get['landing_page_id']) {
				continue;
			}

			$data['hub_parents'][] = $hub_parent;
		}

		if (isset($this->request->get['landing_page_id'])) {
			$data['code_readonly'] = true;
		} else {
			$data['code_readonly'] = false;
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('tool/image');

		if (!empty($data['image']) && is_file(DIR_IMAGE . $data['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		if (isset($this->request->post['landing_section'])) {
			$landing_sections = $this->request->post['landing_section'];
		} elseif (isset($this->request->get['landing_page_id'])) {
			$landing_sections = $this->model_extension_module_landing_page->getSectionRows($this->request->get['landing_page_id']);
		} else {
			$landing_sections = array();
		}

		$data['landing_sections'] = array();

		foreach ($data['languages'] as $language) {
			$data['landing_sections'][$language['language_id']] = array();

			if (isset($landing_sections[$language['language_id']])) {
				foreach ($landing_sections[$language['language_id']] as $row) {
					if (!empty($row['image']) && is_file(DIR_IMAGE . $row['image'])) {
						$thumb = $this->model_tool_image->resize($row['image'], 100, 100);
					} else {
						$thumb = $this->model_tool_image->resize('no_image.png', 100, 100);
					}

					$data['landing_sections'][$language['language_id']][] = array(
						'title'       => $row['title'],
						'description' => $row['description'],
						'image'       => $row['image'],
						'thumb'       => $thumb,
						'button_text' => isset($row['button_text']) ? $row['button_text'] : '',
						'link'        => isset($row['link']) ? $row['link'] : '',
						'sort_order'  => $row['sort_order']
					);
				}
			}
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['section_row_count'] = 0;

		foreach ($data['landing_sections'] as $rows) {
			$data['section_row_count'] = max($data['section_row_count'], count($rows));
		}

		$data['informations'] = $this->model_extension_module_landing_page->getInformations();
		$data['banners'] = $this->model_extension_module_landing_page->getBanners();

		$hero_banner_id = (int)$data['hero_banner_id'];

		if ($hero_banner_id) {
			$data['banner_images'] = $this->model_extension_module_landing_page->getBannerImages($hero_banner_id);
		} else {
			$data['banner_images'] = array();
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/landing_page_form', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/landing_page')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'extension/module/landing_page')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 2) || (utf8_strlen($this->request->post['name']) > 128)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (empty($this->request->post['code']) && !empty($this->request->post['name'])) {
			$this->request->post['code'] = str_replace('-', '_', $this->model_extension_module_landing_page->slugify($this->request->post['name']));
		}

		if ((utf8_strlen($this->request->post['code']) < 2) || (utf8_strlen($this->request->post['code']) > 64)) {
			$this->error['code'] = $this->language->get('error_code');
		} elseif (!preg_match('/^[a-z0-9_]+$/', $this->request->post['code'])) {
			$this->error['code'] = $this->language->get('error_code_format');
		} elseif (!isset($this->request->get['landing_page_id'])) {
			$existing = $this->model_extension_module_landing_page->getLandingPageByCode($this->request->post['code']);

			if ($existing) {
				$this->error['code'] = $this->language->get('error_code_unique');
			}
		}

		if (isset($this->request->post['landing_section'])) {
			foreach ($this->request->post['landing_section'] as $language_id => $rows) {
				foreach ($rows as $row_index => $row) {
					$has_title = utf8_strlen(trim($row['title'])) > 0;
					$has_desc = utf8_strlen(trim($row['description'])) > 0;
					$has_image = utf8_strlen(trim($row['image'])) > 0;

					if (!$has_title && !$has_desc && !$has_image) {
						continue;
					}

					if (!$has_desc && !$has_image) {
						$this->error['section'][$language_id][$row_index] = $this->language->get('error_section_content');
					}
				}
			}
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'extension/module/landing_page')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
