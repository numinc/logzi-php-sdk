<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_running_client = new Numinc\Logzi\Order_out_running_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_running = $order_out_running_client->get_running(array(
    "id" => 0, // running order ID
));

print_r($order_running);

$order_running_list = $order_out_running_client->get_list_running(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_running_list);

// hardcoded endpoint
$order_save_running = $order_out_running_client->save_running(array(
    "data" => array(
        "product_id" => 0, // product ID
        "partner_order_id" => 0, // supplier company ID
        "quantity" => 1, // quantity
        "incoming_price" => 100.00, // purchase price
        "incoming_currency_id" => 1, // purchase currency ID
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
    )
));

print_r($order_save_running);
