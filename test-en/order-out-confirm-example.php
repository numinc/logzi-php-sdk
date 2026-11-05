<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_confirm_client = new Numinc\Logzi\Order_out_confirm_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_confirm = $order_out_confirm_client->get_confirm(array(
    "id" => 0, // confirmation ID
));

print_r($order_confirm);

$order_confirm_list = $order_out_confirm_client->get_list_confirm(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_confirm_list);

$order_confirm_list_full_order = $order_out_confirm_client->get_list_confirm_full_order(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_confirm_list_full_order);

// hardcoded endpoint
$order_save_confirm = $order_out_confirm_client->save_confirm(array(
    "data" => array(
        "id" => 0, // confirmation item ID
        "date_confirm" => "2023-10-08", // confirmation date
        "quantity_completed" => 1, // confirmed quantity
    )
));

print_r($order_save_confirm);

// send confirmation email
$order_email_confirm = $order_out_confirm_client->email_confirm(array(
    "data" => array(
        "id" => 0, // receipt ID
        "email_type" => "", // email type
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
    )
));

print_r($order_email_confirm);
