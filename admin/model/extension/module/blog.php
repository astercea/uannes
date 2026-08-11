<?php
class ModelExtensionModuleBlog extends Model {
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog_category` (
			`blog_category_id` int(11) NOT NULL AUTO_INCREMENT,
			`image` varchar(255) NOT NULL DEFAULT '',
			`parent_id` int(11) NOT NULL DEFAULT '0',
			`sort_order` int(3) NOT NULL DEFAULT '0',
			`status` tinyint(1) NOT NULL DEFAULT '1',
			`date_added` datetime NOT NULL,
			`date_modified` datetime NOT NULL,
			PRIMARY KEY (`blog_category_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog_category_description` (
			`blog_category_id` int(11) NOT NULL,
			`language_id` int(11) NOT NULL,
			`name` varchar(255) NOT NULL,
			`description` text NOT NULL,
			`meta_title` varchar(255) NOT NULL,
			`meta_description` varchar(255) NOT NULL,
			`meta_keyword` varchar(255) NOT NULL,
			PRIMARY KEY (`blog_category_id`, `language_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog` (
			`blog_id` int(11) NOT NULL AUTO_INCREMENT,
			`blog_category_id` int(11) NOT NULL,
			`image` varchar(255) NOT NULL DEFAULT '',
			`sort_order` int(3) NOT NULL DEFAULT '0',
			`status` tinyint(1) NOT NULL DEFAULT '1',
			`date_published` datetime NOT NULL,
			`date_added` datetime NOT NULL,
			`date_modified` datetime NOT NULL,
			PRIMARY KEY (`blog_id`),
			KEY `blog_category_id` (`blog_category_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog_description` (
			`blog_id` int(11) NOT NULL,
			`language_id` int(11) NOT NULL,
			`title` varchar(255) NOT NULL,
			`excerpt` text NOT NULL,
			`description` mediumtext NOT NULL,
			`meta_title` varchar(255) NOT NULL,
			`meta_description` varchar(255) NOT NULL,
			`meta_keyword` varchar(255) NOT NULL,
			PRIMARY KEY (`blog_id`, `language_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->load->model('user/user_group');

		foreach ($this->model_user_user_group->getUserGroups() as $user_group) {
			$permission = json_decode($user_group['permission'], true);

			if (!is_array($permission)) {
				continue;
			}

			$grant = !empty($permission['access']) && in_array('extension/module/faq', $permission['access'], true);

			if ($grant || (int)$user_group['user_group_id'] === 1) {
				$this->model_user_user_group->addPermission($user_group['user_group_id'], 'access', 'extension/module/blog');
				$this->model_user_user_group->addPermission($user_group['user_group_id'], 'modify', 'extension/module/blog');
			}
		}

		$this->ensureBlogListSeoUrl('blog');
	}

	public function uninstall() {
		$blogs = $this->db->query("SELECT blog_id FROM `" . DB_PREFIX . "blog`");

		foreach ($blogs->rows as $row) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog_id=" . (int)$row['blog_id'] . "'");
		}

		$categories = $this->db->query("SELECT blog_category_id FROM `" . DB_PREFIX . "blog_category`");

		foreach ($categories->rows as $row) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog_category_id=" . (int)$row['blog_category_id'] . "'");
		}

		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog/blog'");

		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog_description`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog_category_description`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog_category`");
	}

	public function saveBlogListSeoUrls($seo_urls) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog/blog'");

		if ($seo_urls) {
			foreach ($seo_urls as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (trim($keyword)) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blog/blog', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}
	}

	public function getBlogListSeoUrls() {
		$data = array();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog/blog'");

		foreach ($query->rows as $result) {
			$data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}

		return $data;
	}

	protected function ensureBlogListSeoUrl($keyword) {
		$query = $this->db->query("SELECT seo_url_id FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog/blog' AND store_id = '0' LIMIT 1");

		if (!$query->num_rows) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` SET store_id = '0', language_id = '" . (int)$this->config->get('config_language_id') . "', query = 'blog/blog', keyword = '" . $this->db->escape($keyword) . "'");
		}
	}

	// --- Categories ---

	public function addBlogCategory($data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "blog_category` SET image = '" . $this->db->escape($data['image']) . "', parent_id = '0', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_added = NOW(), date_modified = NOW()");

		$blog_category_id = $this->db->getLastId();

		foreach ($data['blog_category_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "blog_category_description` SET blog_category_id = '" . (int)$blog_category_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$this->saveEntitySeoUrls('blog_category_id', $blog_category_id, isset($data['blog_category_seo_url']) ? $data['blog_category_seo_url'] : array());

		return $blog_category_id;
	}

	public function editBlogCategory($blog_category_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "blog_category` SET image = '" . $this->db->escape($data['image']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_modified = NOW() WHERE blog_category_id = '" . (int)$blog_category_id . "'");

		$this->db->query("DELETE FROM `" . DB_PREFIX . "blog_category_description` WHERE blog_category_id = '" . (int)$blog_category_id . "'");

		foreach ($data['blog_category_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "blog_category_description` SET blog_category_id = '" . (int)$blog_category_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$this->saveEntitySeoUrls('blog_category_id', $blog_category_id, isset($data['blog_category_seo_url']) ? $data['blog_category_seo_url'] : array());
	}

	public function deleteBlogCategory($blog_category_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "blog_category` WHERE blog_category_id = '" . (int)$blog_category_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "blog_category_description` WHERE blog_category_id = '" . (int)$blog_category_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog_category_id=" . (int)$blog_category_id . "'");
	}

	public function getBlogCategory($blog_category_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_category` WHERE blog_category_id = '" . (int)$blog_category_id . "'");

		return $query->row;
	}

	public function getBlogCategoryDescriptions($blog_category_id) {
		$data = array();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_category_description` WHERE blog_category_id = '" . (int)$blog_category_id . "'");

		foreach ($query->rows as $result) {
			$data[$result['language_id']] = array(
				'name'             => $result['name'],
				'description'      => $result['description'],
				'meta_title'       => $result['meta_title'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword']
			);
		}

		return $data;
	}

	public function getBlogCategorySeoUrls($blog_category_id) {
		return $this->getEntitySeoUrls('blog_category_id', $blog_category_id);
	}

	public function getBlogCategories($data = array()) {
		$sql = "SELECT bc.*, bcd.name FROM `" . DB_PREFIX . "blog_category` bc LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (bc.blog_category_id = bcd.blog_category_id) WHERE bcd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		$sort_data = array(
			'bcd.name',
			'bc.sort_order',
			'bc.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY bc.sort_order, bcd.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalBlogCategories() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "blog_category`");

		return $query->row['total'];
	}

	public function getBlogCategoryOptions() {
		$query = $this->db->query("SELECT bc.blog_category_id, bcd.name FROM `" . DB_PREFIX . "blog_category` bc LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (bc.blog_category_id = bcd.blog_category_id) WHERE bcd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND bc.status = '1' ORDER BY bc.sort_order, bcd.name");

		return $query->rows;
	}

	// --- Posts ---

	public function addBlog($data) {
		$date_published = !empty($data['date_published']) ? $data['date_published'] : date('Y-m-d H:i:s');

		$this->db->query("INSERT INTO `" . DB_PREFIX . "blog` SET blog_category_id = '" . (int)$data['blog_category_id'] . "', image = '" . $this->db->escape($data['image']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_published = '" . $this->db->escape($date_published) . "', date_added = NOW(), date_modified = NOW()");

		$blog_id = $this->db->getLastId();

		foreach ($data['blog_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "blog_description` SET blog_id = '" . (int)$blog_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', excerpt = '" . $this->db->escape($value['excerpt']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$this->saveEntitySeoUrls('blog_id', $blog_id, isset($data['blog_seo_url']) ? $data['blog_seo_url'] : array());

		return $blog_id;
	}

	public function editBlog($blog_id, $data) {
		$date_published = !empty($data['date_published']) ? $data['date_published'] : date('Y-m-d H:i:s');

		$this->db->query("UPDATE `" . DB_PREFIX . "blog` SET blog_category_id = '" . (int)$data['blog_category_id'] . "', image = '" . $this->db->escape($data['image']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_published = '" . $this->db->escape($date_published) . "', date_modified = NOW() WHERE blog_id = '" . (int)$blog_id . "'");

		$this->db->query("DELETE FROM `" . DB_PREFIX . "blog_description` WHERE blog_id = '" . (int)$blog_id . "'");

		foreach ($data['blog_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "blog_description` SET blog_id = '" . (int)$blog_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', excerpt = '" . $this->db->escape($value['excerpt']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$this->saveEntitySeoUrls('blog_id', $blog_id, isset($data['blog_seo_url']) ? $data['blog_seo_url'] : array());
	}

	public function deleteBlog($blog_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "blog` WHERE blog_id = '" . (int)$blog_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "blog_description` WHERE blog_id = '" . (int)$blog_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blog_id=" . (int)$blog_id . "'");
	}

	public function getBlog($blog_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog` WHERE blog_id = '" . (int)$blog_id . "'");

		return $query->row;
	}

	public function getBlogDescriptions($blog_id) {
		$data = array();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "blog_description` WHERE blog_id = '" . (int)$blog_id . "'");

		foreach ($query->rows as $result) {
			$data[$result['language_id']] = array(
				'title'            => $result['title'],
				'excerpt'          => $result['excerpt'],
				'description'      => $result['description'],
				'meta_title'       => $result['meta_title'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword']
			);
		}

		return $data;
	}

	public function getBlogSeoUrls($blog_id) {
		return $this->getEntitySeoUrls('blog_id', $blog_id);
	}

	public function getBlogs($data = array()) {
		$sql = "SELECT b.*, bd.title, bcd.name AS category FROM `" . DB_PREFIX . "blog` b LEFT JOIN `" . DB_PREFIX . "blog_description` bd ON (b.blog_id = bd.blog_id) LEFT JOIN `" . DB_PREFIX . "blog_category_description` bcd ON (b.blog_category_id = bcd.blog_category_id AND bcd.language_id = '" . (int)$this->config->get('config_language_id') . "') WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_blog_category_id'])) {
			$sql .= " AND b.blog_category_id = '" . (int)$data['filter_blog_category_id'] . "'";
		}

		$sort_data = array(
			'bd.title',
			'b.sort_order',
			'b.date_published',
			'b.date_added'
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

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalBlogs($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "blog` b";

		if (!empty($data['filter_blog_category_id'])) {
			$sql .= " WHERE b.blog_category_id = '" . (int)$data['filter_blog_category_id'] . "'";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	protected function saveEntitySeoUrls($field, $id, $seo_urls) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = '" . $this->db->escape($field . '=' . (int)$id) . "'");

		if ($seo_urls) {
			foreach ($seo_urls as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (trim($keyword)) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = '" . $this->db->escape($field . '=' . (int)$id) . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}
	}

	protected function getEntitySeoUrls($field, $id) {
		$data = array();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE query = '" . $this->db->escape($field . '=' . (int)$id) . "'");

		foreach ($query->rows as $result) {
			$data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}

		return $data;
	}
}
