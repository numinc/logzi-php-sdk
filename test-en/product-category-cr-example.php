<?php

require __DIR__ . '/vendor/autoload.php';

$product_category_cr_client = new Numinc\Logzi\Product_category_cr_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// query full product category list
$product_category_cr_list = $product_category_cr_client->get_list(array(
));

print_r($product_category_cr_list);

// save product category
$product_category_cr_save = $product_category_cr_client->save(array(
    "data" => array(
		// "id" => "", // for update
        "product_group_id" => 1, // product group ID
        "product_id" => 1, // product ID
        "product_category_id" => 1, // category ID
	),
));

print_r($product_category_cr_save);
