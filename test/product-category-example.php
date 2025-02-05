<?php

require __DIR__ . '/vendor/autoload.php';

$product_category_client = new Numinc\Logzi\Product_category_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// teljes termék kategória lista lekérdezése
$product_category_list = $product_category_client->get_list(array(
    "language_id" => 1
));

print_r($product_category_list);

// termék kategória rögzítés
$product_category_save = $product_category_client->save(array(
    "data" => array(
		// "id" => "", // for update
		"name_key" => "egyedikulcs", // 32 karakteres kulcs hivatkozás
		"szjvtsz" => "", // SZJ/VTSZ  szám
		"parent_category_id" => "", // Szülő kategória id
		"category_cash_register_show" => "1", // Pénztárgép szűrőben megjelenik
		"category_product_list_show" => "1", // Általános szűrőben megjelenik
		"category_web_url" => "", // webshop kategória URL
		"data" => array(
			1 => "Termék kategória megnevezés" // language_id => adott nyelv megnevezése
		),
	),
));

print_r($product_category_save);
