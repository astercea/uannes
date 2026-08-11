<?php
class ControllerProductStockNotification extends Controller {
	public function add() {
		$this->response->addHeader('Content-Type: application/json');
		$json = array();

		if ($this->request->server['REQUEST_METHOD'] !== 'POST') {
			$json['error'] = 'Geçersiz istek.';
		} else {
			$product_id = isset($this->request->post['product_id']) ? (int)$this->request->post['product_id'] : 0;
			$email = isset($this->request->post['email']) ? trim($this->request->post['email']) : '';

			if (!$product_id || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$json['error'] = 'Lütfen geçerli bir e-posta adresi girin.';
			} else {
				$this->load->model('catalog/product');
				if (!$this->model_catalog_product->getProduct($product_id)) {
					$json['error'] = 'Ürün bulunamadı.';
				} else {
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_stock_notification SET product_id = '" . $product_id . "', email = '" . $this->db->escape($email) . "', created_at = NOW(), notified_at = NULL ON DUPLICATE KEY UPDATE created_at = NOW(), notified_at = NULL");
					$json['success'] = 'Talebiniz kaydedildi.';
				}
			}
		}

		$this->response->setOutput(json_encode($json));
	}
}
