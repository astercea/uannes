<?php
/**
 * Restore PRIMARY KEY / AUTO_INCREMENT from OpenCart 3.0.4.1 install schema.
 */
$schemaFile = '/home/dijicreanet/.cursor/projects/home-dijicreanet-public-html-development-uannes-dijicrea-net/agent-tools/33e13201-ae96-4198-a4ec-d3a98b3e878a.txt';
require dirname(__DIR__, 3) . '/admin/config.php';

if (!is_file($schemaFile)) {
	fwrite(STDERR, "Schema file missing: $schemaFile\n");
	exit(1);
}

$sql = file_get_contents($schemaFile);
$m = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, (int)DB_PORT);
$m->set_charset('utf8');

if (!preg_match_all('/CREATE TABLE `([^`]+)`\s*\((.*?)\)\s*ENGINE/s', $sql, $tables, PREG_SET_ORDER)) {
	fwrite(STDERR, "Could not parse CREATE TABLE statements.\n");
	exit(1);
}

$fixed = 0;
$skipped = 0;
$errors = 0;

foreach ($tables as $tableMatch) {
	$table = $tableMatch[1];
	$body = $tableMatch[2];

	$live = $m->query("SHOW TABLES LIKE '" . $m->real_escape_string($table) . "'");
	if (!$live || !$live->num_rows) {
		$skipped++;
		continue;
	}

	$pk = $m->query("SHOW KEYS FROM `$table` WHERE Key_name = 'PRIMARY'");
	if ($pk && $pk->num_rows > 0) {
		$skipped++;
		continue;
	}

	if (!preg_match('/PRIMARY KEY \(([^)]+)\)/', $body, $pkMatch)) {
		$skipped++;
		continue;
	}

	$pkCols = $pkMatch[1];
	$autoCol = null;
	if (preg_match('/`(\w+)`\s+int\(\d+\)\s+NOT NULL\s+AUTO_INCREMENT/i', $body, $ai)) {
		$autoCol = $ai[1];
	}

	$alter = "ALTER TABLE `$table` ADD PRIMARY KEY ($pkCols)";
	if ($autoCol) {
		$alter .= ", MODIFY `$autoCol` int(11) NOT NULL AUTO_INCREMENT";
	}

	if ($m->query($alter)) {
		echo "OK: $table\n";
		$fixed++;
	} else {
		echo "ERR: $table - " . $m->error . "\n";
		echo "     SQL: $alter\n";
		$errors++;
	}
}

echo "\nFixed: $fixed, Skipped: $skipped, Errors: $errors\n";
