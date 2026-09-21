<?php

require __DIR__ . '/vendor/autoload.php';

$product_barcode_client = new Numinc\Logzi\Product_barcode_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// teljes termék lista lekérdezése
$product_barcode_list = $product_barcode_client->get_list();
print_r($product_barcode_list);

// egy termék lekérdezése
$product_barcode_get = $product_barcode_client->get(array(
    "id" => "1",
));
print_r($product_barcode_get);

// termékhez azonosító (barcode) csatolás
$product_barcode_save = $product_barcode_client->save(array(
    "data" => array(
		"partnumber" => "PARTNUMBER01",
		"barcode" => "EANCODE009",
	),
));

print_r($product_save);

// termékhez azonosító (barcode) csatolás
$product_barcode_save = $product_barcode_client->save(array(
    "data" => array(
		"product_id" => 1,
		"barcode" => "EANCODE010",
        "partner_id" => 2
	),
));

print_r($product_save);