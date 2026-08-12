<?php
class ModelBlogBlog extends Model {
	public function getCategories($language_id = 0) {
		if (!$language_id) {
			$language_id = (int)$this->config->get('config_language_id');
		}

		$query = $this->db->query("SELECT bc.blog_category_id, bcd.name, bcd.description FROM `" . DB_PREFIX . "blog_category` bc LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (bc.blog_category_id = bcd.blog_category_id) WHERE bc.status = '1' AND bcd.language_id = '" . (int)$language_id . "' ORDER BY bc.sort_order, bcd.name");

		return $query->rows;
	}

	public function getCategory($blog_category_id, $language_id = 0) {
		if (!$language_id) {
			$language_id = (int)$this->config->get('config_language_id');
		}

		$query = $this->db->query("SELECT bc.*, bcd.name, bcd.description, bcd.meta_title, bcd.meta_description, bcd.meta_keyword FROM `" . DB_PREFIX . "blog_category` bc LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (bc.blog_category_id = bcd.blog_category_id) WHERE bc.blog_category_id = '" . (int)$blog_category_id . "' AND bc.status = '1' AND bcd.language_id = '" . (int)$language_id . "'");

		return $query->row;
	}

	public function getPosts($data = array()) {
		$language_id = (int)$this->config->get('config_language_id');

		$sql = "SELECT b.*, bd.title, bd.excerpt, bd.description, bd.meta_title, bd.meta_description, bd.meta_keyword, bcd.name AS category_name FROM `" . DB_PREFIX . "blog` b LEFT JOIN `" . DB_PREFIX . "blog_description` bd ON (b.blog_id = bd.blog_id) LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (b.blog_category_id = bcd.blog_category_id AND bcd.language_id = '" . $language_id . "') WHERE b.status = '1' AND bd.language_id = '" . $language_id . "'";

		if (!empty($data['filter_blog_category_id'])) {
			$sql .= " AND b.blog_category_id = '" . (int)$data['filter_blog_category_id'] . "'";
		}

		$sort_data = array(
			'b.date_published',
			'b.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY b.date_published";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (!isset($data['sort'])) {
			$sql .= ", b.sort_order ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if (!isset($data['start']) || $data['start'] < 0) {
				$data['start'] = 0;
			}

			if (!isset($data['limit']) || $data['limit'] < 1) {
				$data['limit'] = 9;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalPosts($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "blog` b WHERE b.status = '1'";

		if (!empty($data['filter_blog_category_id'])) {
			$sql .= " AND b.blog_category_id = '" . (int)$data['filter_blog_category_id'] . "'";
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	public function getPost($blog_id) {
		$language_id = (int)$this->config->get('config_language_id');

		$query = $this->db->query("SELECT b.*, bd.title, bd.excerpt, bd.description, bd.meta_title, bd.meta_description, bd.meta_keyword, bcd.name AS category_name FROM `" . DB_PREFIX . "blog` b LEFT JOIN `" . DB_PREFIX . "blog_description` bd ON (b.blog_id = bd.blog_id) LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (b.blog_category_id = bcd.blog_category_id AND bcd.language_id = '" . $language_id . "') WHERE b.blog_id = '" . (int)$blog_id . "' AND b.status = '1' AND bd.language_id = '" . $language_id . "'");

		return $query->row;
	}
}
