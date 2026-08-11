<?php
$sqlFile = __DIR__ . '/fix_oc_zone_tables.sql';
require dirname(__DIR__, 3) . '/config.php';

$m = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, (int)DB_PORT);
if ($m->connect_error) {
	fwrite(STDERR, $m->connect_error . PHP_EOL);
	exit(1);
}
$m->set_charset('utf8');

$m->query('CREATE TABLE IF NOT EXISTS `' . DB_PREFIX . 'zone_to_geo_zone` (
  `zone_to_geo_zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL DEFAULT \'0\',
  `geo_zone_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`zone_to_geo_zone_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci');

$m->query('TRUNCATE TABLE `' . DB_PREFIX . 'zone`');
$m->query('TRUNCATE TABLE `' . DB_PREFIX . 'zone_to_geo_zone`');

$zoneStmt = $m->prepare('INSERT INTO `' . DB_PREFIX . 'zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES (?,?,?,?,?)');
$z2gStmt = $m->prepare('INSERT INTO `' . DB_PREFIX . 'zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES (?,?,?,?,?,?)');

$mode = '';
$zoneCount = 0;
$z2gCount = 0;
$failed = 0;

foreach (file($sqlFile) as $line) {
	$line = trim($line);
	if ($line === '') {
		continue;
	}
	if (stripos($line, 'INSERT INTO `oc_zone`') === 0) {
		$mode = 'zone';
		continue;
	}
	if (stripos($line, 'INSERT INTO `oc_zone_to_geo_zone`') === 0) {
		$mode = 'z2g';
		continue;
	}
	if ($line[0] !== '(') {
		continue;
	}

	if ($mode === 'zone' && preg_match('/^\((\d+),\s*(\d+),\s*\'((?:\'\'|[^\'])*)\',\s*\'([^\']*)\',\s*(\d+)\),?$/', $line, $mm)) {
		$name = str_replace("''", "'", $mm[3]);
		$id = (int)$mm[1];
		$countryId = (int)$mm[2];
		$code = $mm[4];
		$status = (int)$mm[5];
		$zoneStmt->bind_param('iissi', $id, $countryId, $name, $code, $status);
		$zoneStmt->execute();
		$zoneCount++;
		continue;
	}

	if ($mode === 'z2g' && preg_match('/^\((\d+),\s*(\d+),\s*(\d+),\s*(\d+),\s*\'([^\']*)\',\s*\'([^\']*)\'\),?$/', $line, $mm)) {
		$id = (int)$mm[1];
		$countryId = (int)$mm[2];
		$zoneId = (int)$mm[3];
		$geoZoneId = (int)$mm[4];
		$dateAdded = $mm[5];
		$dateModified = $mm[6];
		$z2gStmt->bind_param('iiiiss', $id, $countryId, $zoneId, $geoZoneId, $dateAdded, $dateModified);
		$z2gStmt->execute();
		$z2gCount++;
		continue;
	}

	if ($mode) {
		fwrite(STDERR, "FAILED: $line\n");
		$failed++;
	}
}

echo "zone rows: $zoneCount\n";
echo "zone_to_geo_zone rows: $z2gCount\n";
echo "failed lines: $failed\n";
