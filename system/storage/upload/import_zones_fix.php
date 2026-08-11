<?php
require dirname(__DIR__, 3) . '/config.php';

$m = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, (int)DB_PORT);
$m->set_charset('utf8');

$zones = [
	[1135, 74, "Côte d'or", '21', 1],
	[1136, 74, "Côtes d'Armor", '22', 1],
	[1556, 101, 'Fars', 'FAR', 1],
	[3092, 203, 'Västernorrland', 'Y', 1],
	[3883, 105, "L'Aquila", 'AQ', 1],
	[4238, 105, 'Monza Brianza', 'MB', 1],
];

$stmt = $m->prepare('INSERT INTO `' . DB_PREFIX . 'zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES (?,?,?,?,?) ON DUPLICATE KEY UPDATE `name` = VALUES(`name`), `code` = VALUES(`code`), `status` = VALUES(`status`)');

foreach ($zones as $z) {
	$stmt->bind_param('iissi', $z[0], $z[1], $z[2], $z[3], $z[4]);
	$stmt->execute();
}

$m->query("INSERT INTO `" . DB_PREFIX . "zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES (109, 222, 3972, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00') ON DUPLICATE KEY UPDATE `geo_zone_id` = VALUES(`geo_zone_id`)");

echo "done\n";
