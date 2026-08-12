<?php
class ControllerBlogBlog extends Controller {
	public function index() {
		if (!$this->config->get('module_blog_status')) {
			$this->response->redirect($this->url->link('error/not_found'));
			return;
		}

		$this->load->language('blog/blog');
		$this->load->model('blog/blog');
		$this->load->model('tool/image');

		$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
		$order = isset($this->request->get['order']) ? $this->request->get['order'] : 'DESC';
		$limit = (int)$this->config->get('module_blog_limit');

		if ($limit < 1) {
			$limit = 9;
		}

		$this->document->setTitle($this->language->get('text_blog'));

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_blog'),
			'href' => $this->url->link('blog/blog')
		);

		$data['heading_title'] = $this->language->get('text_blog');
		$data['hero_image'] = 'image/catalog/footerlogo2.png';

		$data['categories'] = array();
		$data['categories'][] = array(
			'id'     => 0,
			'name'   => $this->language->get('text_all'),
			'href'   => $this->url->link('blog/blog'),
			'active' => true
		);

		foreach ($this->model_blog_blog->getCategories() as $category) {
			$data['categories'][] = array(
				'id'     => $category['blog_category_id'],
				'name'   => $category['name'],
				'href'   => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id']),
				'active' => false
			);
		}

		$data['selected_category'] = 0;
		$data['selected_order'] = $order;
		$data['filter_action'] = $this->url->link('blog/blog');
		$data['blog_url'] = $this->url->link('blog/blog');

		$filter_data = array(
			'sort'  => 'b.date_published',
			'order' => $order,
			'start' => ($page - 1) * $limit,
			'limit' => $limit
		);

		$post_total = $this->model_blog_blog->getTotalPosts();
		$results = $this->model_blog_blog->getPosts($filter_data);

		$data['articles'] = $this->buildArticles($results);

		$pagination = new Pagination();
		$pagination->total = $post_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('blog/blog', 'order=' . $order . '&page={page}');

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($post_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($post_total - $limit)) ? $post_total : ((($page - 1) * $limit) + $limit), $post_total, ceil($post_total / $limit));

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('blog/blog', $data));
	}

	protected function buildArticles($results) {
		$width = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width') ?: 400;
		$height = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height') ?: 400;

		$articles = array();

		foreach ($results as $result) {
			if ($result['image']) {
				$thumb = $this->model_tool_image->resize($result['image'], $width, $height);
			} else {
				$thumb = $this->model_tool_image->resize('placeholder.png', $width, $height);
			}

			$articles[] = array(
				'blog_id'      => $result['blog_id'],
				'title'        => $result['title'],
				'excerpt'      => $result['excerpt'],
				'category'     => $result['category_name'],
				'date'         => date('d.m.Y', strtotime($result['date_published'])),
				'thumb'        => $thumb,
				'href'         => $this->url->link('blog/article', 'blog_id=' . $result['blog_id'])
			);
		}

		return $articles;
	}
}
