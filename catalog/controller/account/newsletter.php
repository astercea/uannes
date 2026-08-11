<?php
class ControllerAccountNewsletter extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/newsletter', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/newsletter');
		$this->document->setTitle($this->language->get('heading_title'));

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$this->load->model('account/customer');
			$this->model_account_customer->editNewsletter($this->request->post['newsletter']);

			// === Bülten tablosuna da ekle/sil ===
			$this->load->model('extension/module/newsletter');
			$email = $this->customer->getEmail();

			if ($this->request->post['newsletter']) {
				// aktif abone yapmak (yoksa ekle)
				$exists = $this->model_extension_module_newsletter->getByEmail($email);
				if (!$exists) {
					$this->model_extension_module_newsletter->addSubscriber([
						'email' => $email,
						'firstname' => $this->customer->getFirstName(),
						'lastname' => $this->customer->getLastName(),
						'status' => 1,
						'token' => ''
					]);
				} else {
					$this->db->query("UPDATE `" . DB_PREFIX . "newsletter_subscriber` SET status = 1 WHERE email = '" . $this->db->escape($email) . "'");
				}
			} else {
				// hayır seçildiyse pasif yap
				$this->db->query("UPDATE `" . DB_PREFIX . "newsletter_subscriber` SET status = 0 WHERE email = '" . $this->db->escape($email) . "'");
			}
			// === Bülten tablosuna da ekle/sil ===

			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('account/newsletter', '', true));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_newsletter'),
			'href' => $this->url->link('account/newsletter', '', true)
		);

		$data['action'] = $this->url->link('account/newsletter', '', true);
		$data['newsletter'] = $this->customer->getNewsletter();
		$data['back'] = $this->url->link('common/home');
		$data['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';

		unset($this->session->data['success']);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/newsletter', $data));
	}
}
