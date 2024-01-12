<?php

require __DIR__ . '/vendor/autoload.php';

$price_list_client = new Numinc\Logzi\Price_list_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// product_category_id -ra szűrve visszaadja a termékek árait
$price_list_list = $price_list_client->get_list(array(
    "list_condition" => array(
        "product_category_id" => 2
    )
));

print_r($price_list_list);

// 2-es product_id-val visszaadja a termék árait
$price_list_get = $price_list_client->get(array(
    "product_id" => 2,
    "company_id" => 2,
));

print_r($price_list_get);
