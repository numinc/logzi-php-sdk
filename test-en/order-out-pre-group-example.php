<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_pre_group_client = new Numinc\Logzi\Order_out_pre_group_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_pre = $order_out_pre_group_client->get_pre(array(
    "id" => 0, // pre-order group ID
));

print_r($order_pre);

$order_pre_list = $order_out_pre_group_client->get_list_pre(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_pre_list);

// hardcoded endpoint
$order_save_pre = $order_out_pre_group_client->save_pre(array(
    "data" => array(
        "product_id" => 0, // product ID
        "partner_order_id" => 0, // supplier company ID
        "quantity" => 1, // quantity
        "incoming_price" => 100.00, // purchase price
        "incoming_currency_id" => 1, // purchase currency ID
    )
));

print_r($order_save_pre);
