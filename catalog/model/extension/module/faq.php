<?php
class ModelExtensionModuleFaq extends Model {
	public function getFaqs($language_id) {
		$query = $this->db->query("SELECT f.faq_id, f.sort_order, fd.question, fd.answer FROM " . DB_PREFIX . "faq f LEFT JOIN " . DB_PREFIX . "faq_description fd ON (f.faq_id = fd.faq_id) WHERE f.status = '1' AND fd.language_id = '" . (int)$language_id . "' ORDER BY f.sort_order ASC, fd.question ASC");

		return $query->rows;
	}
}
