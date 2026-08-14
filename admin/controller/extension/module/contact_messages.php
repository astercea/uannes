<?php
class ControllerExtensionModuleContactMessages extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/contact_messages');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();
	}

	public function view() {
		$this->load->language('extension/module/contact_messages');

		$this->document->setTitle($this->language->get('heading_title'));

		if (isset($this->request->get['contact_message_id'])) {
			$contact_message_id = (int)$this->request->get['contact_message_id'];
		} else {
			$contact_message_id = 0;
		}

		// Ensure table exists
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "contact_message` (
		  `contact_message_id` int(11) NOT NULL AUTO_INCREMENT,
		  `name` varchar(128) NOT NULL,
		  `email` varchar(128) NOT NULL,
		  `enquiry` text NOT NULL,
		  `ip` varchar(40) NOT NULL,
		  `status` tinyint(1) NOT NULL DEFAULT '0',
		  `date_added` datetime NOT NULL,
		  PRIMARY KEY (`contact_message_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

		// Mark as read
		$this->db->query("UPDATE `" . DB_PREFIX . "contact_message` SET status = '1' WHERE contact_message_id = '" . (int)$contact_message_id . "'");

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "contact_message` WHERE contact_message_id = '" . (int)$contact_message_id . "'");

		if ($query->num_rows) {
			$data['message'] = array(
				'contact_message_id' => $query->row['contact_message_id'],
				'name'               => $query->row['name'],
				'email'              => $query->row['email'],
				'enquiry'            => nl2br(htmlspecialchars($query->row['enquiry'], ENT_QUOTES, 'UTF-8')),
				'ip'                 => $query->row['ip'],
				'status'             => $query->row['status'],
				'date_added'         => date($this->language->get('datetime_format'), strtotime($query->row['date_added']))
			);
		} else {
			$this->response->redirect($this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_view'),
			'href' => $this->url->link('extension/module/contact_messages/view', 'user_token=' . $this->session->data['user_token'] . '&contact_message_id=' . $contact_message_id, true)
		);

		$data['back'] = $this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('extension/module/contact_messages/deleteSingle', 'user_token=' . $this->session->data['user_token'] . '&contact_message_id=' . $contact_message_id, true);

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/contact_messages_info', $data));
	}

	public function delete() {
		$this->load->language('extension/module/contact_messages');

		if (isset($this->request->post['selected']) && $this->validate()) {
			foreach ($this->request->post['selected'] as $contact_message_id) {
				$this->db->query("DELETE FROM `" . DB_PREFIX . "contact_message` WHERE contact_message_id = '" . (int)$contact_message_id . "'");
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getList();
	}

	public function deleteSingle() {
		$this->load->language('extension/module/contact_messages');

		if (isset($this->request->get['contact_message_id']) && $this->validate()) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "contact_message` WHERE contact_message_id = '" . (int)$this->request->get['contact_message_id'] . "'");

			$this->session->data['success'] = $this->language->get('text_success');
		}

		$this->response->redirect($this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true));
	}

	public function markRead() {
		$this->load->language('extension/module/contact_messages');

		if (isset($this->request->post['selected']) && $this->validate()) {
			foreach ($this->request->post['selected'] as $contact_message_id) {
				$this->db->query("UPDATE `" . DB_PREFIX . "contact_message` SET status = '1' WHERE contact_message_id = '" . (int)$contact_message_id . "'");
			}

			$this->session->data['success'] = $this->language->get('text_success');
		}

		$this->response->redirect($this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true));
	}

	protected function getList() {
		// Ensure table exists
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "contact_message` (
		  `contact_message_id` int(11) NOT NULL AUTO_INCREMENT,
		  `name` varchar(128) NOT NULL,
		  `email` varchar(128) NOT NULL,
		  `enquiry` text NOT NULL,
		  `ip` varchar(40) NOT NULL,
		  `status` tinyint(1) NOT NULL DEFAULT '0',
		  `date_added` datetime NOT NULL,
		  PRIMARY KEY (`contact_message_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$limit = 20;

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['delete'] = $this->url->link('extension/module/contact_messages/delete', 'user_token=' . $this->session->data['user_token'], true);
		$data['mark_read'] = $this->url->link('extension/module/contact_messages/markRead', 'user_token=' . $this->session->data['user_token'], true);

		$total_query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "contact_message`");
		$message_total = (int)$total_query->row['total'];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "contact_message` ORDER BY date_added DESC LIMIT " . (int)(($page - 1) * $limit) . "," . (int)$limit);

		$data['messages'] = array();

		foreach ($query->rows as $result) {
			$preview = utf8_substr(strip_tags(html_entity_decode($result['enquiry'], ENT_QUOTES, 'UTF-8')), 0, 120);
			if (utf8_strlen($result['enquiry']) > 120) {
				$preview .= '...';
			}

			$data['messages'][] = array(
				'contact_message_id' => $result['contact_message_id'],
				'name'               => $result['name'],
				'email'              => $result['email'],
				'enquiry'            => $preview,
				'status'             => $result['status'],
				'date_added'         => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
				'view'               => $this->url->link('extension/module/contact_messages/view', 'user_token=' . $this->session->data['user_token'] . '&contact_message_id=' . $result['contact_message_id'], true)
			);
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$pagination = new Pagination();
		$pagination->total = $message_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('extension/module/contact_messages', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($message_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($message_total - $limit)) ? $message_total : ((($page - 1) * $limit) + $limit), $message_total, ceil($message_total / $limit));

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/contact_messages_list', $data));
	}

	public function getJson() {
		$json = array();

		if (isset($this->request->get['contact_message_id'])) {
			$contact_message_id = (int)$this->request->get['contact_message_id'];

			// Mark as read
			$this->db->query("UPDATE `" . DB_PREFIX . "contact_message` SET status = '1' WHERE contact_message_id = '" . (int)$contact_message_id . "'");

			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "contact_message` WHERE contact_message_id = '" . (int)$contact_message_id . "'");

			if ($query->num_rows) {
				$this->load->language('extension/module/contact_messages');
				$json = array(
					'success'            => true,
					'contact_message_id' => $query->row['contact_message_id'],
					'name'               => $query->row['name'],
					'email'              => $query->row['email'],
					'enquiry'            => nl2br(htmlspecialchars($query->row['enquiry'], ENT_QUOTES, 'UTF-8')),
					'ip'                 => $query->row['ip'],
					'date_added'         => date($this->language->get('datetime_format'), strtotime($query->row['date_added'])),
					'delete_url'         => str_replace('&amp;', '&', $this->url->link('extension/module/contact_messages/deleteSingle', 'user_token=' . $this->session->data['user_token'] . '&contact_message_id=' . $contact_message_id, true))
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/contact_messages') && !$this->user->hasPermission('access', 'customer/customer')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
