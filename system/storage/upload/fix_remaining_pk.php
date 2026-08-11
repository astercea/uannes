<?php
require dirname(__DIR__, 3) . '/admin/config.php';

$m = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, (int)DB_PORT);

$alters = [
	"ALTER TABLE `" . DB_PREFIX . "user` ADD PRIMARY KEY (`user_id`), MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "user_group` ADD PRIMARY KEY (`user_group_id`), MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "setting` ADD PRIMARY KEY (`setting_id`), MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "session` ADD PRIMARY KEY (`session_id`)",
	"ALTER TABLE `" . DB_PREFIX . "seo_url` ADD PRIMARY KEY (`seo_url_id`), MODIFY `seo_url_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "stock_status` ADD PRIMARY KEY (`stock_status_id`), MODIFY `stock_status_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "store` ADD PRIMARY KEY (`store_id`), MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "tax_class` ADD PRIMARY KEY (`tax_class_id`), MODIFY `tax_class_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "tax_rate` ADD PRIMARY KEY (`tax_rate_id`), MODIFY `tax_rate_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "tax_rate_to_customer_group` ADD PRIMARY KEY (`tax_rate_id`, `customer_group_id`)",
	"ALTER TABLE `" . DB_PREFIX . "tax_rule` ADD PRIMARY KEY (`tax_rule_id`), MODIFY `tax_rule_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "theme` ADD PRIMARY KEY (`theme_id`), MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "translation` ADD PRIMARY KEY (`translation_id`), MODIFY `translation_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "upload` ADD PRIMARY KEY (`upload_id`), MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "voucher` ADD PRIMARY KEY (`voucher_id`), MODIFY `voucher_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "voucher_history` ADD PRIMARY KEY (`voucher_history_id`), MODIFY `voucher_history_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "voucher_theme` ADD PRIMARY KEY (`voucher_theme_id`), MODIFY `voucher_theme_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "voucher_theme_description` ADD PRIMARY KEY (`voucher_theme_id`, `language_id`)",
	"ALTER TABLE `" . DB_PREFIX . "weight_class` ADD PRIMARY KEY (`weight_class_id`), MODIFY `weight_class_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "weight_class_description` ADD PRIMARY KEY (`weight_class_id`, `language_id`)",
];

foreach ($alters as $sql) {
	if ($m->query($sql)) {
		echo "OK\n";
	} else {
		echo "ERR: " . $m->error . "\nSQL: $sql\n";
	}
}

// Custom extension tables (best-effort)
$custom = [
	"ALTER TABLE `" . DB_PREFIX . "newsletter` ADD PRIMARY KEY (`newsletter_id`), MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT",
	"ALTER TABLE `" . DB_PREFIX . "newsletter_subscriber` ADD PRIMARY KEY (`newsletter_subscriber_id`), MODIFY `newsletter_subscriber_id` int(11) NOT NULL AUTO_INCREMENT",
];

foreach ($custom as $sql) {
	if ($m->query($sql)) {
		echo "OK custom\n";
	} else {
		echo "SKIP custom: " . $m->error . "\n";
	}
}

$r = $m->query("SELECT COUNT(*) c FROM information_schema.TABLES t WHERE t.TABLE_SCHEMA=DATABASE() AND t.TABLE_TYPE='BASE TABLE' AND NOT EXISTS (SELECT 1 FROM information_schema.TABLE_CONSTRAINTS c WHERE c.TABLE_SCHEMA=t.TABLE_SCHEMA AND c.TABLE_NAME=t.TABLE_NAME AND c.CONSTRAINT_TYPE='PRIMARY KEY')");
echo 'Remaining without PK: ' . $r->fetch_assoc()['c'] . PHP_EOL;
