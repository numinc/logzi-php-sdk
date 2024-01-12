<?php

require __DIR__ . '/vendor/autoload.php';

$product_category_client = new Numinc\Logzi\Product_category_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// teljes termékategória lista lekérdezése
$product_category_list = $product_category_client->get_list(array(
    "language_id" => 1
));

print_r($product_category_list);
