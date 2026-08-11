<?php
require dirname(__DIR__, 3) . '/admin/config.php';

$m = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, (int)DB_PORT);
$m->set_charset('utf8');
$prefix = DB_PREFIX;
$table = $prefix . 'session';

$r = $m->query("SHOW KEYS FROM `$table` WHERE Key_name = 'PRIMARY'");
if ($r && $r->num_rows) {
	echo "PRIMARY KEY already exists on $table\n";
	exit(0);
}

// Remove duplicate session_id rows (keep newest expire).
$m->query("CREATE TEMPORARY TABLE `tmp_session_keep` AS SELECT `session_id`, MAX(`expire`) AS `expire` FROM `$table` GROUP BY `session_id`");
$m->query("DELETE s FROM `$table` s LEFT JOIN `tmp_session_keep` k ON s.`session_id` = k.`session_id` AND s.`expire` = k.`expire` WHERE k.`session_id` IS NULL");

if ($m->query("ALTER TABLE `$table` ADD PRIMARY KEY (`session_id`)")) {
	echo "OK: PRIMARY KEY added to $table\n";
} else {
	echo "ERR: " . $m->error . "\n";
	exit(1);
}

$r = $m->query("SELECT COUNT(*) c FROM `$table`");
echo 'Rows: ' . $r->fetch_assoc()['c'] . PHP_EOL;
