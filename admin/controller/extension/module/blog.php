<?php
class ControllerExtensionModuleBlog extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/blog');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		$this->load->model('extension/module/blog');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_blog', $this->request->post);

			if (isset($this->request->post['blog_list_seo_url'])) {
				$this->model_extension_module_blog->saveBlogListSeoUrls($this->request->post['blog_list_seo_url']);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$this->getSettings();
	}

	public function list() {
		$this->load->language('extension/module/blog');
		$this->document->setTitle($this->language->get('text_list_posts'));
		$this->load->model('extension/module/blog');
		$this->getPostList();
	}

	public function add() {
		$this->load->language('extension/module/blog');
		$this->document->setTitle($this->language->get('text_add_post'));
		$this->load->model('extension/module/blog');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePostForm()) {
			$this->model_extension_module_blog->addBlog($this->request->post);
			$this->session->data['success'] = $this->language->get('text_success_item');
			$this->response->redirect($this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getPostForm();
	}

	public function edit() {
		$this->load->language('extension/module/blog');
		$this->document->setTitle($this->language->get('text_edit_post'));
		$this->load->model('extension/module/blog');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePostForm()) {
			$this->model_extension_module_blog->editBlog($this->request->get['blog_id'], $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success_item');
			$this->response->redirect($this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getPostForm();
	}

	public function delete() {
		$this->load->language('extension/module/blog');
		$this->load->model('extension/module/blog');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $blog_id) {
				$this->model_extension_module_blog->deleteBlog($blog_id);
			}

			$this->session->data['success'] = $this->language->get('text_success_delete');
			$this->response->redirect($this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getPostList();
	}

	public function categoryList() {
		$this->load->language('extension/module/blog');
		$this->document->setTitle($this->language->get('text_list_categories'));
		$this->load->model('extension/module/blog');
		$this->getCategoryList();
	}

	public function categoryAdd() {
		$this->load->language('extension/module/blog');
		$this->document->setTitle($this->language->get('text_add_category'));
		$this->load->model('extension/module/blog');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateCategoryForm()) {
			$this->model_extension_module_blog->addBlogCategory($this->request->post);
			$this->session->data['success'] = $this->language->get('text_success_item');
			$this->response->redirect($this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getCategoryForm();
	}

	public function categoryEdit() {
		$this->load->language('extension/module/blog');
		$this->document->setTitle($this->language->get('text_edit_category'));
		$this->load->model('extension/module/blog');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateCategoryForm()) {
			$this->model_extension_module_blog->editBlogCategory($this->request->get['blog_category_id'], $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success_item');
			$this->response->redirect($this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getCategoryForm();
	}

	public function categoryDelete() {
		$this->load->language('extension/module/blog');
		$this->load->model('extension/module/blog');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $blog_category_id) {
				$this->model_extension_module_blog->deleteBlogCategory($blog_category_id);
			}

			$this->session->data['success'] = $this->language->get('text_success_delete');
			$this->response->redirect($this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getCategoryList();
	}

	public function install() {
		$this->load->model('extension/module/blog');
		$this->model_extension_module_blog->install();
	}

	public function uninstall() {
		$this->load->model('extension/module/blog');
		$this->model_extension_module_blog->uninstall();
	}

	protected function getSettings() {
		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['keyword'])) {
			$data['error_keyword'] = $this->error['keyword'];
		} else {
			$data['error_keyword'] = array();
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
			'href' => $this->url->link('extension/module/blog', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/blog', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['list'] = $this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true);

		$data['module_blog_status'] = $this->request->post['module_blog_status'] ?? $this->config->get('module_blog_status');
		$data['module_blog_limit'] = $this->request->post['module_blog_limit'] ?? ($this->config->get('module_blog_limit') ?: 9);

		$this->load->model('localisation/language');
		$this->load->model('setting/store');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['stores'] = array();
		$data['stores'][] = array('store_id' => 0, 'name' => $this->language->get('text_default'));

		foreach ($this->model_setting_store->getStores() as $store) {
			$data['stores'][] = $store;
		}

		if (isset($this->request->post['blog_list_seo_url'])) {
			$data['blog_list_seo_url'] = $this->request->post['blog_list_seo_url'];
		} else {
			$data['blog_list_seo_url'] = $this->model_extension_module_blog->getBlogListSeoUrls();
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog', $data));
	}

	protected function getPostList() {
		$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;

		$data['heading_title'] = $this->language->get('heading_title');

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_list_posts'),
			'href' => $this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['add'] = $this->url->link('extension/module/blog/add', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('extension/module/blog/delete', 'user_token=' . $this->session->data['user_token'], true);
		$data['settings'] = $this->url->link('extension/module/blog', 'user_token=' . $this->session->data['user_token'], true);

		$filter_data = array(
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$blog_total = $this->model_extension_module_blog->getTotalBlogs();
		$results = $this->model_extension_module_blog->getBlogs($filter_data);

		$data['blogs'] = array();

		foreach ($results as $result) {
			$data['blogs'][] = array(
				'blog_id'        => $result['blog_id'],
				'title'          => $result['title'],
				'category'       => $result['category'],
				'date_published' => date($this->language->get('date_format_short'), strtotime($result['date_published'])),
				'sort_order'     => $result['sort_order'],
				'status'         => $result['status'],
				'edit'           => $this->url->link('extension/module/blog/edit', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $result['blog_id'], true)
			);
		}

		$data['error_warning'] = $this->error['warning'] ?? '';
		$data['success'] = '';

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}

		$data['selected'] = isset($this->request->post['selected']) ? (array)$this->request->post['selected'] : array();

		$pagination = new Pagination();
		$pagination->total = $blog_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($blog_total - $this->config->get('config_limit_admin'))) ? $blog_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $blog_total, ceil($blog_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog_list', $data));
	}

	protected function getPostForm() {
		$data['text_form'] = !isset($this->request->get['blog_id']) ? $this->language->get('text_add_post') : $this->language->get('text_edit_post');

		$data['error_warning'] = $this->error['warning'] ?? '';
		$data['error_title'] = $this->error['title'] ?? array();
		$data['error_description'] = $this->error['description'] ?? array();
		$data['error_meta_title'] = $this->error['meta_title'] ?? array();
		$data['error_category'] = $this->error['blog_category_id'] ?? '';
		$data['error_keyword'] = $this->error['keyword'] ?? array();

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_list_posts'),
			'href' => $this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (!isset($this->request->get['blog_id'])) {
			$data['action'] = $this->url->link('extension/module/blog/add', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/blog/edit', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $this->request->get['blog_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/module/blog/list', 'user_token=' . $this->session->data['user_token'], true);

		$blog_info = array();

		if (isset($this->request->get['blog_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$blog_info = $this->model_extension_module_blog->getBlog($this->request->get['blog_id']);
		}

		$this->load->model('localisation/language');
		$this->load->model('tool/image');
		$this->load->model('setting/store');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['stores'] = array();
		$data['stores'][] = array('store_id' => 0, 'name' => $this->language->get('text_default'));

		foreach ($this->model_setting_store->getStores() as $store) {
			$data['stores'][] = $store;
		}

		$data['blog_categories'] = $this->model_extension_module_blog->getBlogCategoryOptions();

		if (isset($this->request->post['blog_description'])) {
			$data['blog_description'] = $this->request->post['blog_description'];
		} elseif (isset($this->request->get['blog_id'])) {
			$data['blog_description'] = $this->model_extension_module_blog->getBlogDescriptions($this->request->get['blog_id']);
		} else {
			$data['blog_description'] = array();
		}

		if (isset($this->request->post['blog_seo_url'])) {
			$data['blog_seo_url'] = $this->request->post['blog_seo_url'];
		} elseif (isset($this->request->get['blog_id'])) {
			$data['blog_seo_url'] = $this->model_extension_module_blog->getBlogSeoUrls($this->request->get['blog_id']);
		} else {
			$data['blog_seo_url'] = array();
		}

		if (isset($this->request->post['blog_category_id'])) {
			$data['blog_category_id'] = $this->request->post['blog_category_id'];
		} elseif (!empty($blog_info)) {
			$data['blog_category_id'] = $blog_info['blog_category_id'];
		} else {
			$data['blog_category_id'] = 0;
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($blog_info)) {
			$data['image'] = $blog_info['image'];
		} else {
			$data['image'] = '';
		}

		if ($data['image'] && is_file(DIR_IMAGE . $data['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($blog_info)) {
			$data['sort_order'] = $blog_info['sort_order'];
		} else {
			$data['sort_order'] = 0;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($blog_info)) {
			$data['status'] = $blog_info['status'];
		} else {
			$data['status'] = 1;
		}

		if (isset($this->request->post['date_published'])) {
			$data['date_published'] = $this->request->post['date_published'];
		} elseif (!empty($blog_info)) {
			$data['date_published'] = date('Y-m-d', strtotime($blog_info['date_published']));
		} else {
			$data['date_published'] = date('Y-m-d');
		}

		$this->load->model('localisation/language');
		$data['summernote'] = $this->model_localisation_language->getLanguages()[0]['code'] ?? 'en-gb';

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog_form', $data));
	}

	protected function getCategoryList() {
		$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_list_categories'),
			'href' => $this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['add'] = $this->url->link('extension/module/blog/categoryAdd', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('extension/module/blog/categoryDelete', 'user_token=' . $this->session->data['user_token'], true);

		$filter_data = array(
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$total = $this->model_extension_module_blog->getTotalBlogCategories();
		$results = $this->model_extension_module_blog->getBlogCategories($filter_data);

		$data['categories'] = array();

		foreach ($results as $result) {
			$data['categories'][] = array(
				'blog_category_id' => $result['blog_category_id'],
				'name'             => $result['name'],
				'sort_order'       => $result['sort_order'],
				'status'           => $result['status'],
				'edit'             => $this->url->link('extension/module/blog/categoryEdit', 'user_token=' . $this->session->data['user_token'] . '&blog_category_id=' . $result['blog_category_id'], true)
			);
		}

		$data['error_warning'] = $this->error['warning'] ?? '';
		$data['success'] = '';

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}

		$data['selected'] = isset($this->request->post['selected']) ? (array)$this->request->post['selected'] : array();

		$pagination = new Pagination();
		$pagination->total = $total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total - $this->config->get('config_limit_admin'))) ? $total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total, ceil($total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog_category_list', $data));
	}

	protected function getCategoryForm() {
		$data['text_form'] = !isset($this->request->get['blog_category_id']) ? $this->language->get('text_add_category') : $this->language->get('text_edit_category');

		$data['error_warning'] = $this->error['warning'] ?? '';
		$data['error_name'] = $this->error['name'] ?? array();
		$data['error_meta_title'] = $this->error['meta_title'] ?? array();
		$data['error_keyword'] = $this->error['keyword'] ?? array();

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_list_categories'),
			'href' => $this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (!isset($this->request->get['blog_category_id'])) {
			$data['action'] = $this->url->link('extension/module/blog/categoryAdd', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/blog/categoryEdit', 'user_token=' . $this->session->data['user_token'] . '&blog_category_id=' . $this->request->get['blog_category_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/module/blog/categoryList', 'user_token=' . $this->session->data['user_token'], true);

		$category_info = array();

		if (isset($this->request->get['blog_category_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$category_info = $this->model_extension_module_blog->getBlogCategory($this->request->get['blog_category_id']);
		}

		$this->load->model('localisation/language');
		$this->load->model('tool/image');
		$this->load->model('setting/store');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['stores'] = array();
		$data['stores'][] = array('store_id' => 0, 'name' => $this->language->get('text_default'));

		foreach ($this->model_setting_store->getStores() as $store) {
			$data['stores'][] = $store;
		}

		if (isset($this->request->post['blog_category_description'])) {
			$data['blog_category_description'] = $this->request->post['blog_category_description'];
		} elseif (isset($this->request->get['blog_category_id'])) {
			$data['blog_category_description'] = $this->model_extension_module_blog->getBlogCategoryDescriptions($this->request->get['blog_category_id']);
		} else {
			$data['blog_category_description'] = array();
		}

		if (isset($this->request->post['blog_category_seo_url'])) {
			$data['blog_category_seo_url'] = $this->request->post['blog_category_seo_url'];
		} elseif (isset($this->request->get['blog_category_id'])) {
			$data['blog_category_seo_url'] = $this->model_extension_module_blog->getBlogCategorySeoUrls($this->request->get['blog_category_id']);
		} else {
			$data['blog_category_seo_url'] = array();
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($category_info)) {
			$data['image'] = $category_info['image'];
		} else {
			$data['image'] = '';
		}

		if ($data['image'] && is_file(DIR_IMAGE . $data['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($category_info)) {
			$data['sort_order'] = $category_info['sort_order'];
		} else {
			$data['sort_order'] = 0;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($category_info)) {
			$data['status'] = $category_info['status'];
		} else {
			$data['status'] = 1;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog_category_form', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/blog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['blog_list_seo_url'])) {
			$this->validateSeoUrls($this->request->post['blog_list_seo_url'], 'blog/blog');
		}

		return !$this->error;
	}

	protected function validatePostForm() {
		if (!$this->user->hasPermission('modify', 'extension/module/blog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (empty($this->request->post['blog_category_id'])) {
			$this->error['blog_category_id'] = $this->language->get('error_category');
		}

		foreach ($this->request->post['blog_description'] as $language_id => $value) {
			if ((utf8_strlen($value['title']) < 1) || (utf8_strlen($value['title']) > 255)) {
				$this->error['title'][$language_id] = $this->language->get('error_title');
			}

			if (utf8_strlen($value['description']) < 3) {
				$this->error['description'][$language_id] = $this->language->get('error_description');
			}

			if ((utf8_strlen($value['meta_title']) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
				$this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
			}
		}

		if (isset($this->request->post['blog_seo_url'])) {
			$query = isset($this->request->get['blog_id']) ? 'blog_id=' . (int)$this->request->get['blog_id'] : '';
			$this->validateSeoUrls($this->request->post['blog_seo_url'], $query);
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateCategoryForm() {
		if (!$this->user->hasPermission('modify', 'extension/module/blog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['blog_category_description'] as $language_id => $value) {
			if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 255)) {
				$this->error['name'][$language_id] = $this->language->get('error_name');
			}

			if ((utf8_strlen($value['meta_title']) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
				$this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
			}
		}

		if (isset($this->request->post['blog_category_seo_url'])) {
			$query = isset($this->request->get['blog_category_id']) ? 'blog_category_id=' . (int)$this->request->get['blog_category_id'] : '';
			$this->validateSeoUrls($this->request->post['blog_category_seo_url'], $query);
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateSeoUrls($seo_urls, $current_query) {
		$this->load->model('design/seo_url');

		foreach ($seo_urls as $store_id => $language) {
			foreach ($language as $language_id => $keyword) {
				if (!empty($keyword)) {
					if (count(array_keys($language, $keyword)) > 1) {
						$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
					}

					$seo_urls_found = $this->model_design_seo_url->getSeoUrlsByKeyword($keyword);

					foreach ($seo_urls_found as $seo_url) {
						if (($seo_url['store_id'] == $store_id) && ($current_query === '' || $seo_url['query'] != $current_query)) {
							$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');
						}
					}
				}
			}
		}
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'extension/module/blog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
