<?php
require __DIR__ . '/config.php';
// Startup OpenCart framework manually to test the model
require_once(DIR_SYSTEM . 'startup.php');

$registry = new Registry();
$loader = new Loader($registry);
$registry->set('load', $loader);
$config = new Config();
$registry->set('config', $config);
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
$registry->set('db', $db);
$language = new Language('tr-tr');
$language->load('tr-tr');
$registry->set('language', $language);
$customer = new Cart\Customer($registry);
$registry->set('customer', $customer);
$session = new Session();
$registry->set('session', $session);

$loader->model('catalog/product');
$model = $registry->get('model_catalog_product');

$product_id = 56;
$quantity = 1;

// Find the option ID for size 'M' which has 1 stock
$q = $db->query("SELECT po.product_option_id, pov.product_option_value_id
    FROM " . DB_PREFIX . "product_option po
    JOIN " . DB_PREFIX . "product_option_value pov ON po.product_option_id=pov.product_option_id
    JOIN " . DB_PREFIX . "option_value_description ovd ON pov.option_value_id=ovd.option_value_id AND ovd.language_id=1
    WHERE po.product_id=$product_id AND ovd.name = 'M' LIMIT 1");

$option = array();
if ($q->num_rows) {
    $row = $q->row;
    $option[$row['product_option_id']] = $row['product_option_value_id'];
}

echo "Option array: " . print_r($option, true) . "\n";

$stock_error = $model->validateCartStock($product_id, $quantity, $option, 0);

if ($stock_error) {
    echo "STOCK ERROR RETURNED:\n";
    echo $stock_error . "\n";
} else {
    echo "NO ERROR, should be added.\n";
}
