<?php
class ControllerExtensionModuleImaj extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/imaj');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('imaj', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

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

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
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

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/imaj', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/imaj', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/imaj', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/imaj', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['banner_id'])) {
			$data['banner_id'] = $this->request->post['banner_id'];
		} elseif (!empty($module_info)) {
			$data['banner_id'] = $module_info['banner_id'];
		} else {
			$data['banner_id'] = '';
		}

		$this->load->model('design/banner');

		$data['banners'] = $this->model_design_banner->getBanners();

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 480;
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 640;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/imaj', $data));
	}

	public function images() {
		$this->load->language('extension/module/imaj');
		$this->load->model('design/banner');
		$this->load->model('setting/module');
		$this->load->model('tool/image');
		$this->load->model('localisation/language');

		$banner_id = $this->getImajBannerId();

		if (!$banner_id) {
			$this->session->data['error'] = $this->language->get('error_banner');
			$this->response->redirect($this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateImages()) {
			$banner_info = $this->model_design_banner->getBanner($banner_id);

			$banner_image = array();

			if (isset($this->request->post['banner_image'])) {
				foreach ($this->request->post['banner_image'] as $language_id => $value) {
					foreach ($value as $row) {
						if (empty($row['image'])) {
							continue;
						}

						$banner_image[$language_id][] = array(
							'title'       => '',
							'description' => '',
							'button_text' => '',
							'link'        => '',
							'image'       => $row['image'],
							'sort_order'  => isset($row['sort_order']) ? (int)$row['sort_order'] : 0
						);
					}
				}
			}

			$this->model_design_banner->editBanner($banner_id, array(
				'name'         => !empty($banner_info['name']) ? $banner_info['name'] : 'İmaj Görselleri',
				'status'       => 1,
				'banner_image' => $banner_image
			));

			$this->session->data['success'] = $this->language->get('text_success_images');

			$this->response->redirect($this->url->link('extension/module/imaj/images', 'user_token=' . $this->session->data['user_token'], true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_form'] = $this->language->get('text_images');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['button_image_add'] = $this->language->get('button_image_add');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} elseif (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
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
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/imaj/images', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/imaj/images', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);

		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['banner_image'])) {
			$banner_images = $this->request->post['banner_image'];
		} else {
			$banner_images = $this->model_design_banner->getBannerImages($banner_id);
		}

		$data['banner_images'] = array();

		foreach ($banner_images as $language_id => $value) {
			foreach ($value as $banner_image) {
				if (is_file(DIR_IMAGE . $banner_image['image'])) {
					$image = $banner_image['image'];
					$thumb = $banner_image['image'];
				} else {
					$image = '';
					$thumb = 'no_image.png';
				}

				$data['banner_images'][$language_id][] = array(
					'image'      => $image,
					'thumb'      => $this->model_tool_image->resize($thumb, 100, 100),
					'sort_order' => $banner_image['sort_order']
				);
			}
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/imaj_images', $data));
	}

	protected function getImajBannerId() {
		$imaj_query = $this->db->query("SELECT m.setting FROM `" . DB_PREFIX . "layout_module` lm INNER JOIN `" . DB_PREFIX . "layout_route` lr ON (lm.layout_id = lr.layout_id AND lr.route = 'common/home' AND lr.store_id = '0') INNER JOIN `" . DB_PREFIX . "module` m ON (lm.code = CONCAT('imaj.', m.module_id)) WHERE lm.position = 'content_bottom' ORDER BY lm.sort_order ASC LIMIT 1");

		if ($imaj_query->num_rows) {
			$imaj_setting = json_decode($imaj_query->row['setting'], true);

			if (!empty($imaj_setting['banner_id'])) {
				return (int)$imaj_setting['banner_id'];
			}
		}

		$modules = $this->model_setting_module->getModulesByCode('imaj');

		if ($modules) {
			$setting = json_decode($modules[0]['setting'], true);

			if (!empty($setting['banner_id'])) {
				return (int)$setting['banner_id'];
			}
		}

		$banner_query = $this->db->query("SELECT banner_id FROM `" . DB_PREFIX . "banner` WHERE `name` = 'İmaj Görselleri' LIMIT 1");

		if ($banner_query->num_rows) {
			return (int)$banner_query->row['banner_id'];
		}

		return 0;
	}

	protected function validateImages() {
		if (!$this->user->hasPermission('modify', 'extension/module/imaj') && !$this->user->hasPermission('modify', 'design/banner')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function install() {
		$this->load->model('setting/module');
		$this->load->model('user/user_group');

		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/imaj');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/imaj');

		// Create dedicated banner if missing
		$banner_query = $this->db->query("SELECT banner_id FROM `" . DB_PREFIX . "banner` WHERE `name` = 'İmaj Görselleri' LIMIT 1");

		if ($banner_query->num_rows) {
			$banner_id = (int)$banner_query->row['banner_id'];
		} else {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "banner` SET `name` = 'İmaj Görselleri', `status` = '1'");
			$banner_id = (int)$this->db->getLastId();
		}

		$modules = $this->model_setting_module->getModulesByCode('imaj');

		if ($modules) {
			$module_id = (int)$modules[0]['module_id'];
		} else {
			$setting = array(
				'name'      => 'İmaj Görselleri',
				'banner_id' => $banner_id,
				'width'     => 1320,
				'height'    => 743,
				'status'    => 1
			);

			$this->model_setting_module->addModule('imaj', $setting);

			$modules = $this->model_setting_module->getModulesByCode('imaj');
			$module_id = !empty($modules[0]['module_id']) ? (int)$modules[0]['module_id'] : 0;
		}

		if ($module_id) {
			$layout_query = $this->db->query("SELECT layout_id FROM `" . DB_PREFIX . "layout_route` WHERE `route` = 'common/home' AND `store_id` = '0' LIMIT 1");

			if ($layout_query->num_rows) {
				$layout_id = (int)$layout_query->row['layout_id'];
				$code = 'imaj.' . $module_id;

				$exists = $this->db->query("SELECT layout_module_id FROM `" . DB_PREFIX . "layout_module` WHERE `layout_id` = '" . $layout_id . "' AND `code` = '" . $this->db->escape($code) . "' LIMIT 1");

				if (!$exists->num_rows) {
					$sort_query = $this->db->query("SELECT MAX(sort_order) AS max_sort FROM `" . DB_PREFIX . "layout_module` WHERE `layout_id` = '" . $layout_id . "' AND `position` = 'content_bottom'");
					$sort_order = isset($sort_query->row['max_sort']) ? ((int)$sort_query->row['max_sort'] + 1) : 0;

					$this->db->query("INSERT INTO `" . DB_PREFIX . "layout_module` SET `layout_id` = '" . $layout_id . "', `code` = '" . $this->db->escape($code) . "', `position` = 'content_bottom', `sort_order` = '" . (int)$sort_order . "'");
				}
			}
		}
	}

	public function uninstall() {
		$this->load->model('setting/module');
		$this->model_setting_module->deleteModulesByCode('imaj');
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/imaj')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		return !$this->error;
	}
}
