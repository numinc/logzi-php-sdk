<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_confirm_client = new Numinc\Logzi\Order_out_confirm_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_confirm = $order_out_confirm_client->get_confirm(array(
    "id" => 0, // visszaigazolás azonosító
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

// hardcode végpont
$order_save_confirm = $order_out_confirm_client->save_confirm(array(
    "data" => array(
        "id" => 0, // visszaigazolás tétel azonosító
        "date_confirm" => "2023-10-08", // visszaigazolás kelte
        "quantity_completed" => 1, // visszaigazolt mennyiség
    )
));

print_r($order_save_confirm);

// visszaigazoló email küldése
$order_email_confirm = $order_out_confirm_client->email_confirm(array(
    "data" => array(
        "id" => 0, // bizonylat azonosító
        "email_type" => "", // email típusa
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
    )
));

print_r($order_email_confirm);
