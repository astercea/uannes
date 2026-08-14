<?php
require('config.php');
$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$res = $db->query("SELECT category_id, name FROM oc_category_description");
while($r = $res->fetch_assoc()) {
    echo $r['category_id'] . ' - ' . $r['name'] . "\n";
}
