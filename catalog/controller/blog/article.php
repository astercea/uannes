<?php
class ControllerBlogArticle extends Controller {
	public function index() {
		if (!$this->config->get('module_blog_status')) {
			$this->response->redirect($this->url->link('error/not_found'));
			return;
		}

		$this->load->language('blog/blog');
		$this->load->model('blog/blog');
		$this->load->model('tool/image');

		$blog_id = isset($this->request->get['blog_id']) ? (int)$this->request->get['blog_id'] : 0;

		$post = $this->model_blog_blog->getPost($blog_id);

		if (!$post) {
			$this->response->redirect($this->url->link('error/not_found'));
			return;
		}

		$this->document->setTitle($post['meta_title']);
		$this->document->setDescription($post['meta_description']);
		$this->document->setKeywords($post['meta_keyword']);

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_blog'),
			'href' => $this->url->link('blog/blog')
		);

		if ($post['blog_category_id']) {
			$data['breadcrumbs'][] = array(
				'text' => $post['category_name'],
				'href' => $this->url->link('blog/category', 'blog_category_id=' . $post['blog_category_id'])
			);
		}

		$data['breadcrumbs'][] = array(
			'text' => $post['title'],
			'href' => $this->url->link('blog/article', 'blog_id=' . $blog_id)
		);

		$data['heading_title'] = $post['title'];
		$data['date_published'] = date('d.m.Y', strtotime($post['date_published']));
		$data['category_name'] = $post['category_name'];
		$data['category_href'] = $this->url->link('blog/category', 'blog_category_id=' . $post['blog_category_id']);
		$data['description'] = html_entity_decode($post['description'], ENT_QUOTES, 'UTF-8');

		if ($post['image']) {
			$data['image'] = $this->model_tool_image->resize($post['image'], 1320, 660);
		} else {
			$data['image'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('blog/article', $data));
	}
}
