<?php
class ModelExtensionModuleLandingPage extends Model {
	public function getPageByInformationId($information_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "landing_page WHERE information_id = '" . (int)$information_id . "' AND status = '1' LIMIT 1");

		return $query->num_rows ? $query->row : array();
	}

	public function getHero($landing) {
		if (empty($landing['hero_banner_image_id'])) {
			return array();
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_image WHERE banner_image_id = '" . (int)$landing['hero_banner_image_id'] . "' LIMIT 1");

		if (!$query->num_rows) {
			return array();
		}

		$row = $query->row;

		$lang_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_image WHERE banner_id = '" . (int)$row['banner_id'] . "' AND sort_order = '" . (int)$row['sort_order'] . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");

		if ($lang_query->num_rows) {
			$row = $lang_query->row;
		}

		if (!is_file(DIR_IMAGE . $row['image'])) {
			return array();
		}

		return array(
			'title'       => $row['title'],
			'description' => isset($row['description']) ? $row['description'] : '',
			'button_text' => isset($row['button_text']) ? $row['button_text'] : '',
			'link'        => html_entity_decode($row['link'], ENT_QUOTES, 'UTF-8'),
			'image'       => 'image/' . $row['image']
		);
	}

	public function getSections($landing_page_id) {
		$sections = array();

		$query = $this->db->query("SELECT ls.section_id, ls.sort_order, lsd.title, lsd.description, lsd.image, lsd.button_text, lsd.link FROM " . DB_PREFIX . "landing_section ls LEFT JOIN " . DB_PREFIX . "landing_section_description lsd ON (ls.section_id = lsd.section_id AND lsd.language_id = '" . (int)$this->config->get('config_language_id') . "') WHERE ls.landing_page_id = '" . (int)$landing_page_id . "' AND ls.status = '1' ORDER BY ls.sort_order ASC, ls.section_id ASC");

		foreach ($query->rows as $row) {
			$link = isset($row['link']) ? html_entity_decode($row['link'], ENT_QUOTES, 'UTF-8') : '';
			$button_text = isset($row['button_text']) ? $row['button_text'] : '';

			if (!is_file(DIR_IMAGE . $row['image']) && utf8_strlen(trim($row['description'])) < 1 && utf8_strlen(trim($row['title'])) < 1 && utf8_strlen(trim($link)) < 1) {
				continue;
			}

			$image = '';

			if (is_file(DIR_IMAGE . $row['image'])) {
				$image = 'image/' . $row['image'];
			}

			$sections[] = array(
				'title'       => $row['title'],
				'description' => $row['description'],
				'image'       => $image,
				'button_text' => $button_text,
				'link'        => $link
			);
		}

		return $sections;
	}

	public function getChildTopics($parent_landing_page_id) {
		$topics = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "landing_page WHERE parent_landing_page_id = '" . (int)$parent_landing_page_id . "' AND status = '1' ORDER BY sort_order ASC, name ASC");

		foreach ($query->rows as $row) {
			if ((int)$row['information_id'] < 1) {
				continue;
			}

			$image = '';

			if (!empty($row['image']) && is_file(DIR_IMAGE . $row['image'])) {
				$image = 'image/' . $row['image'];
			}

			$topics[] = array(
				'title'       => $row['name'],
				'description' => '',
				'image'       => $image,
				'button_text' => '',
				'link'        => $this->url->link('information/information', 'information_id=' . (int)$row['information_id'])
			);
		}

		return $topics;
	}

	public function getBrandStoryInformationUrl() {
		$query = $this->db->query("SELECT information_id FROM " . DB_PREFIX . "landing_page WHERE code = 'brand_story' AND status = '1' LIMIT 1");

		if ($query->num_rows && (int)$query->row['information_id'] > 0) {
			return $this->url->link('information/information', 'information_id=' . (int)$query->row['information_id']);
		}

		return $this->url->link('information/information', 'information_id=4');
	}
}
