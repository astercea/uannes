<?php
class ModelExtensionModuleLandingPage extends Model {
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "landing_page` (
			`landing_page_id` int(11) NOT NULL AUTO_INCREMENT,
			`code` varchar(64) NOT NULL,
			`name` varchar(128) NOT NULL,
			`information_id` int(11) NOT NULL DEFAULT '0',
			`hero_banner_id` int(11) NOT NULL DEFAULT '0',
			`hero_banner_image_id` int(11) NOT NULL DEFAULT '0',
			`status` tinyint(1) NOT NULL DEFAULT '1',
			`display_mode` varchar(16) NOT NULL DEFAULT 'content',
			`sort_order` int(11) NOT NULL DEFAULT '0',
			`date_added` datetime NOT NULL,
			`date_modified` datetime NOT NULL,
			PRIMARY KEY (`landing_page_id`),
			UNIQUE KEY `code` (`code`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "landing_section` (
			`section_id` int(11) NOT NULL AUTO_INCREMENT,
			`landing_page_id` int(11) NOT NULL,
			`sort_order` int(11) NOT NULL DEFAULT '0',
			`status` tinyint(1) NOT NULL DEFAULT '1',
			PRIMARY KEY (`section_id`),
			KEY `landing_page_id` (`landing_page_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "landing_section_description` (
			`section_id` int(11) NOT NULL,
			`language_id` int(11) NOT NULL,
			`title` varchar(255) NOT NULL DEFAULT '',
			`description` text NOT NULL,
			`image` varchar(255) NOT NULL DEFAULT '',
			`button_text` varchar(128) NOT NULL DEFAULT '',
			`link` varchar(255) NOT NULL DEFAULT '',
			PRIMARY KEY (`section_id`, `language_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->ensureSchema();

		$this->load->model('user/user_group');
		$this->model_user_user_group->addPermission(1, 'access', 'extension/module/landing_page');
		$this->model_user_user_group->addPermission(1, 'modify', 'extension/module/landing_page');

		$seeds = array(
			array('brand_story', 'Marka Hikayesi', 0, 7, 0, 1),
			array('scarf', 'Eşarp', 0, 0, 0, 2),
			array('clothing', 'Giyim', 0, 0, 0, 3),
		);

		foreach ($seeds as $seed) {
			$check = $this->db->query("SELECT landing_page_id FROM " . DB_PREFIX . "landing_page WHERE code = '" . $this->db->escape($seed[0]) . "'");

			if (!$check->num_rows) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "landing_page SET code = '" . $this->db->escape($seed[0]) . "', name = '" . $this->db->escape($seed[1]) . "', information_id = '" . (int)$seed[2] . "', hero_banner_id = '" . (int)$seed[3] . "', hero_banner_image_id = '" . (int)$seed[4] . "', status = '1', display_mode = 'content', sort_order = '" . (int)$seed[5] . "', date_added = NOW(), date_modified = NOW()");
			}
		}
	}

	public function ensureSchema() {
		$columns = array();
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "landing_page`");

		foreach ($query->rows as $row) {
			$columns[$row['Field']] = true;
		}

		if (empty($columns['display_mode'])) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "landing_page` ADD COLUMN `display_mode` varchar(16) NOT NULL DEFAULT 'content' AFTER `status`");
		}

		if (empty($columns['parent_landing_page_id'])) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "landing_page` ADD COLUMN `parent_landing_page_id` int(11) NOT NULL DEFAULT '0' AFTER `information_id`");
		}

		if (empty($columns['image'])) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "landing_page` ADD COLUMN `image` varchar(255) NOT NULL DEFAULT '' AFTER `name`");
		}

		$section_columns = array();
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "landing_section_description`");

		foreach ($query->rows as $row) {
			$section_columns[$row['Field']] = true;
		}

		if (empty($section_columns['button_text'])) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "landing_section_description` ADD COLUMN `button_text` varchar(128) NOT NULL DEFAULT '' AFTER `image`");
		}

		if (empty($section_columns['link'])) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "landing_section_description` ADD COLUMN `link` varchar(255) NOT NULL DEFAULT '' AFTER `button_text`");
		}
	}

	public function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "landing_section_description`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "landing_section`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "landing_page`");
	}

	public function slugify($text) {
		$map = array(
			'ş' => 's', 'Ş' => 's', 'ı' => 'i', 'İ' => 'i', 'ğ' => 'g', 'Ğ' => 'g',
			'ü' => 'u', 'Ü' => 'u', 'ö' => 'o', 'Ö' => 'o', 'ç' => 'c', 'Ç' => 'c'
		);

		$text = strtr($text, $map);
		$text = utf8_strtolower($text);
		$text = preg_replace('/[^a-z0-9]+/', '-', $text);
		$text = trim($text, '-');

		if ($text === '') {
			$text = 'sayfa-' . time();
		}

		return $text;
	}

	public function createInformationPage($name, $keyword = '') {
		$this->db->query("INSERT INTO " . DB_PREFIX . "information SET bottom = '0', sort_order = '0', status = '1'");

		$information_id = (int)$this->db->getLastId();

		$this->load->model('localisation/language');

		foreach ($this->model_localisation_language->getLanguages() as $language) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "information_description SET information_id = '" . $information_id . "', language_id = '" . (int)$language['language_id'] . "', title = '" . $this->db->escape($name) . "', description = '', meta_title = '" . $this->db->escape($name) . "', meta_description = '', meta_keyword = ''");
		}

		$this->db->query("INSERT INTO " . DB_PREFIX . "information_to_store SET information_id = '" . $information_id . "', store_id = '0'");

		if ($keyword === '') {
			$keyword = $this->slugify($name);
		} else {
			$keyword = $this->slugify($keyword);
		}

		$base_keyword = $keyword;
		$i = 1;

		while ($this->db->query("SELECT seo_url_id FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($keyword) . "' AND store_id = '0'")->num_rows) {
			$keyword = $base_keyword . '-' . $i;
			$i++;
		}

		foreach ($this->model_localisation_language->getLanguages() as $language) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '0', language_id = '" . (int)$language['language_id'] . "', query = 'information_id=" . $information_id . "', keyword = '" . $this->db->escape($keyword) . "'");
		}

		return $information_id;
	}

	public function addLandingPage($data) {
		$parent_id = isset($data['parent_landing_page_id']) ? (int)$data['parent_landing_page_id'] : 0;
		$display_mode = ($parent_id > 0) ? 'content' : ((!empty($data['display_mode']) && $data['display_mode'] === 'hub') ? 'hub' : 'content');
		$information_id = isset($data['information_id']) ? (int)$data['information_id'] : 0;
		$image = isset($data['image']) ? $data['image'] : '';

		if ($parent_id > 0 && $information_id < 1) {
			$information_id = $this->createInformationPage($data['name'], isset($data['seo_keyword']) ? $data['seo_keyword'] : '');
		}

		$this->db->query("INSERT INTO " . DB_PREFIX . "landing_page SET code = '" . $this->db->escape($data['code']) . "', name = '" . $this->db->escape($data['name']) . "', image = '" . $this->db->escape($image) . "', information_id = '" . (int)$information_id . "', parent_landing_page_id = '" . (int)$parent_id . "', hero_banner_id = '" . (int)$data['hero_banner_id'] . "', hero_banner_image_id = '" . (int)$data['hero_banner_image_id'] . "', status = '" . (int)$data['status'] . "', display_mode = '" . $this->db->escape($display_mode) . "', sort_order = '" . (int)$data['sort_order'] . "', date_added = NOW(), date_modified = NOW()");

		$landing_page_id = $this->db->getLastId();

		$this->saveSections($landing_page_id, $data);

		return $landing_page_id;
	}

	public function editLandingPage($landing_page_id, $data) {
		$parent_id = isset($data['parent_landing_page_id']) ? (int)$data['parent_landing_page_id'] : 0;
		$display_mode = ($parent_id > 0) ? 'content' : ((!empty($data['display_mode']) && $data['display_mode'] === 'hub') ? 'hub' : 'content');
		$information_id = isset($data['information_id']) ? (int)$data['information_id'] : 0;
		$image = isset($data['image']) ? $data['image'] : '';

		if ($parent_id > 0 && $information_id < 1) {
			$information_id = $this->createInformationPage($data['name'], isset($data['seo_keyword']) ? $data['seo_keyword'] : '');
		}

		$this->db->query("UPDATE " . DB_PREFIX . "landing_page SET code = '" . $this->db->escape($data['code']) . "', name = '" . $this->db->escape($data['name']) . "', image = '" . $this->db->escape($image) . "', information_id = '" . (int)$information_id . "', parent_landing_page_id = '" . (int)$parent_id . "', hero_banner_id = '" . (int)$data['hero_banner_id'] . "', hero_banner_image_id = '" . (int)$data['hero_banner_image_id'] . "', status = '" . (int)$data['status'] . "', display_mode = '" . $this->db->escape($display_mode) . "', sort_order = '" . (int)$data['sort_order'] . "', date_modified = NOW() WHERE landing_page_id = '" . (int)$landing_page_id . "'");

		$this->saveSections($landing_page_id, $data);
	}

	public function getHubParents() {
		$query = $this->db->query("SELECT landing_page_id, name, code FROM " . DB_PREFIX . "landing_page WHERE display_mode = 'hub' AND status = '1' ORDER BY sort_order ASC, name ASC");

		return $query->rows;
	}

	public function getChildLandingPages($parent_landing_page_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "landing_page WHERE parent_landing_page_id = '" . (int)$parent_landing_page_id . "' AND status = '1' ORDER BY sort_order ASC, name ASC");

		return $query->rows;
	}

	protected function saveSections($landing_page_id, $data) {
		$section_ids = array();

		$query = $this->db->query("SELECT section_id FROM " . DB_PREFIX . "landing_section WHERE landing_page_id = '" . (int)$landing_page_id . "'");

		foreach ($query->rows as $row) {
			$section_ids[] = (int)$row['section_id'];
		}

		if ($section_ids) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "landing_section_description WHERE section_id IN (" . implode(',', $section_ids) . ")");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "landing_section WHERE landing_page_id = '" . (int)$landing_page_id . "'");

		if (!isset($data['landing_section']) || !is_array($data['landing_section'])) {
			return;
		}

		$row_indexes = array();

		foreach ($data['landing_section'] as $language_id => $rows) {
			foreach ($rows as $row_index => $row) {
				$row_indexes[(int)$row_index] = true;
			}
		}

		if (!$row_indexes) {
			return;
		}

		ksort($row_indexes, SORT_NUMERIC);

		$default_language_id = (int)$this->config->get('config_language_id');
		$rows_to_save = array();

		foreach (array_keys($row_indexes) as $row_index) {
			$has_content = false;

			foreach ($data['landing_section'] as $rows) {
				if (!isset($rows[$row_index])) {
					continue;
				}

				$row = $rows[$row_index];

				if (utf8_strlen(trim($row['title'])) > 0 || utf8_strlen(trim($row['description'])) > 0 || utf8_strlen(trim($row['image'])) > 0 || utf8_strlen(trim(isset($row['link']) ? $row['link'] : '')) > 0 || utf8_strlen(trim(isset($row['button_text']) ? $row['button_text'] : '')) > 0) {
					$has_content = true;
					break;
				}
			}

			if (!$has_content) {
				continue;
			}

			if (isset($data['landing_section'][$default_language_id][$row_index]['sort_order'])) {
				$sort_order = (int)$data['landing_section'][$default_language_id][$row_index]['sort_order'];
			} else {
				$first_lang = null;

				foreach (array_keys($data['landing_section']) as $lang_key) {
					$first_lang = (int)$lang_key;
					break;
				}

				if ($first_lang !== null && isset($data['landing_section'][$first_lang][$row_index]['sort_order'])) {
					$sort_order = (int)$data['landing_section'][$first_lang][$row_index]['sort_order'];
				} else {
					$sort_order = (int)$row_index;
				}
			}

			$rows_to_save[] = array(
				'index' => $row_index,
				'sort'  => $sort_order
			);
		}

		usort($rows_to_save, function ($a, $b) {
			if ($a['sort'] == $b['sort']) {
				return $a['index'] - $b['index'];
			}

			return ($a['sort'] < $b['sort']) ? -1 : 1;
		});

		foreach ($rows_to_save as $item) {
			$row_index = $item['index'];
			$sort_order = $item['sort'];

			$this->db->query("INSERT INTO " . DB_PREFIX . "landing_section SET landing_page_id = '" . (int)$landing_page_id . "', sort_order = '" . $sort_order . "', status = '1'");

			$section_id = $this->db->getLastId();

			foreach ($data['landing_section'] as $language_id => $rows) {
				if (!isset($rows[$row_index])) {
					continue;
				}

				$row = $rows[$row_index];

				$this->db->query("INSERT INTO " . DB_PREFIX . "landing_section_description SET section_id = '" . (int)$section_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape(isset($row['title']) ? $row['title'] : '') . "', description = '" . $this->db->escape(isset($row['description']) ? $row['description'] : '') . "', image = '" . $this->db->escape(isset($row['image']) ? $row['image'] : '') . "', button_text = '" . $this->db->escape(isset($row['button_text']) ? $row['button_text'] : '') . "', link = '" . $this->db->escape(isset($row['link']) ? $row['link'] : '') . "'");
			}
		}
	}

	public function deleteLandingPage($landing_page_id) {
		$query = $this->db->query("SELECT section_id FROM " . DB_PREFIX . "landing_section WHERE landing_page_id = '" . (int)$landing_page_id . "'");

		foreach ($query->rows as $row) {
			$this->db->query("DELETE FROM " . DB_PREFIX . "landing_section_description WHERE section_id = '" . (int)$row['section_id'] . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "landing_section WHERE landing_page_id = '" . (int)$landing_page_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "landing_page WHERE landing_page_id = '" . (int)$landing_page_id . "'");
	}

	public function getLandingPage($landing_page_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "landing_page WHERE landing_page_id = '" . (int)$landing_page_id . "'");

		return $query->row;
	}

	public function getLandingPageByCode($code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "landing_page WHERE code = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	public function getLandingPages($data = array()) {
		$sql = "SELECT lp.*, id.title AS information_title FROM " . DB_PREFIX . "landing_page lp LEFT JOIN " . DB_PREFIX . "information_description id ON (lp.information_id = id.information_id AND id.language_id = '" . (int)$this->config->get('config_language_id') . "')";

		$sort_data = array(
			'lp.name',
			'lp.code',
			'lp.sort_order',
			'lp.status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY lp.sort_order, lp.name";
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

	public function getTotalLandingPages() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "landing_page");

		return $query->row['total'];
	}

	public function getSectionRows($landing_page_id) {
		$section_data = array();

		$this->load->model('localisation/language');
		$language_ids = array();

		foreach ($this->model_localisation_language->getLanguages() as $language) {
			$language_ids[] = (int)$language['language_id'];
			$section_data[(int)$language['language_id']] = array();
		}

		$query = $this->db->query("SELECT ls.section_id, ls.sort_order, lsd.language_id, lsd.title, lsd.description, lsd.image, lsd.button_text, lsd.link FROM " . DB_PREFIX . "landing_section ls LEFT JOIN " . DB_PREFIX . "landing_section_description lsd ON (ls.section_id = lsd.section_id) WHERE ls.landing_page_id = '" . (int)$landing_page_id . "' ORDER BY ls.sort_order ASC, ls.section_id ASC");

		$row_map = array();

		foreach ($query->rows as $row) {
			if (!isset($row_map[$row['section_id']])) {
				$row_map[$row['section_id']] = array(
					'sort_order' => $row['sort_order'],
					'languages'  => array()
				);
			}

			if ($row['language_id'] !== null) {
				$row_map[$row['section_id']]['languages'][(int)$row['language_id']] = array(
					'title'       => $row['title'],
					'description' => $row['description'],
					'image'       => $row['image'],
					'button_text' => isset($row['button_text']) ? $row['button_text'] : '',
					'link'        => isset($row['link']) ? $row['link'] : ''
				);
			}
		}

		$section_index = 0;

		foreach ($row_map as $section) {
			foreach ($language_ids as $language_id) {
				if (isset($section['languages'][$language_id])) {
					$fields = $section['languages'][$language_id];
				} else {
					$fields = array(
						'title'       => '',
						'description' => '',
						'image'       => '',
						'button_text' => '',
						'link'        => ''
					);
				}

				$section_data[$language_id][$section_index] = array(
					'title'       => $fields['title'],
					'description' => $fields['description'],
					'image'       => $fields['image'],
					'button_text' => $fields['button_text'],
					'link'        => $fields['link'],
					'sort_order'  => $section['sort_order']
				);
			}

			$section_index++;
		}

		return $section_data;
	}

	public function getBanners() {
		$query = $this->db->query("SELECT banner_id, name FROM " . DB_PREFIX . "banner ORDER BY name ASC");

		return $query->rows;
	}

	public function getBannerImages($banner_id) {
		$query = $this->db->query("SELECT bi.banner_image_id, bi.title, bi.image, bi.sort_order FROM " . DB_PREFIX . "banner_image bi WHERE bi.banner_id = '" . (int)$banner_id . "' AND bi.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY bi.sort_order ASC");

		return $query->rows;
	}

	public function getInformations() {
		$query = $this->db->query("SELECT i.information_id, id.title FROM " . DB_PREFIX . "information i LEFT JOIN " . DB_PREFIX . "information_description id ON (i.information_id = id.information_id) WHERE id.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY id.title ASC");

		return $query->rows;
	}
}
