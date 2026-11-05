<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_pre_client = new Numinc\Logzi\Order_out_pre_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_pre = $order_out_pre_client->get_pre(array(
    "id" => 0, // pre-order ID
));

print_r($order_pre);

$order_pre_list = $order_out_pre_client->get_list_pre(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_pre_list);

$order_pre_list_light = $order_out_pre_client->get_list_pre_light(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_pre_list_light);

// hardcoded endpoint
$order_save_pre = $order_out_pre_client->save_pre(array(
    "data" => array(
        "id" => 0, // pre-order item ID
        "partner_order_id" => 0, // supplier company ID
        "quantity" => 1, // quantity
        "incoming_price" => 100.00, // purchase price
        "incoming_currency_id" => 1, // purchase currency ID
    )
));

print_r($order_save_pre);

$order_save_pre_new = $order_out_pre_client->save_pre_new(array(
    "data" => array(
        "item_id" => 0, // order item ID
        "partner_order_id" => 0, // supplier company ID
        "quantity" => 1, // quantity
        "incoming_price" => 100.00, // purchase price
        "incoming_currency_id" => 1, // purchase currency ID
    )
));

print_r($order_save_pre_new);

$order_delete_pre = $order_out_pre_client->delete_pre(array(
    "data" => array(
        "item_id" => 0, // order item ID
    )
));

print_r($order_delete_pre);
