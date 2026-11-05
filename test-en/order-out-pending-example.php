<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_pending_client = new Numinc\Logzi\Order_out_pending_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_pending_list = $order_out_pending_client->get_list_pending(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_pending_list);

// mark the order as successful
$order_success = $order_out_pending_client->success(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
        "note_content" => "", // note
    )
));

print_r($order_success);

// mark an order item as successful
$order_success_item = $order_out_pending_client->success_item(array(
    "data" => array(
        "id" => 0, // order item ID
    )
));

print_r($order_success_item);

// delete an order item
$order_delete_item = $order_out_pending_client->delete_item(array(
    "data" => array(
        "id" => 0, // order item ID
    )
));

print_r($order_delete_item);
