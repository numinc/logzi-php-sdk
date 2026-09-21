<?php

require __DIR__ . '/vendor/autoload.php';

$product_category_client = new Numinc\Logzi\Product_category_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// query full product category list
$product_category_list = $product_category_client->get_list(array(
    "language_id" => 1
));

print_r($product_category_list);

// save product category
$product_category_save = $product_category_client->save(array(
    "data" => array(
		// "id" => "", // for update
		"name_key" => "egyedikulcs", // 32-character key reference
		"szjvtsz" => "", // SZJ/VTSZ number
		"parent_category_id" => "", // parent category ID
		"category_cash_register_show" => "1", // appears in cash register filter
		"category_product_list_show" => "1", // appears in general filter
		"category_web_url" => "", // webshop category URL
		"data" => array(
			1 => "Termék kategória megnevezés" // language_id => name in the given language
		),
	),
));

print_r($product_category_save);
