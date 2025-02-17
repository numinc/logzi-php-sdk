<?php

require __DIR__ . '/vendor/autoload.php';

$product_category_cr_client = new Numinc\Logzi\Product_category_cr_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// teljes termék kategória lista lekérdezése
$product_category_cr_list = $product_category_cr_client->get_list(array(
));

print_r($product_category_cr_list);

// termék kategória rögzítés
$product_category_cr_save = $product_category_cr_client->save(array(
    "data" => array(
		// "id" => "", // for update
        "product_group_id" => 1, // termék csoport azonosító
        "product_id" => 1, // termék azonosító
        "product_category_id" => 1, // kategória azonosító
	),
));

print_r($product_category_cr_save);
