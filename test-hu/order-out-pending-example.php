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

// rendelés teljesítettre állítása
$order_success = $order_out_pending_client->success(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
        "note_content" => "", // megjegyzés
    )
));

print_r($order_success);

// rendelés tétel teljesítettre állítása
$order_success_item = $order_out_pending_client->success_item(array(
    "data" => array(
        "id" => 0, // rendelés tétel azonosító
    )
));

print_r($order_success_item);

// rendelés tétel törlése
$order_delete_item = $order_out_pending_client->delete_item(array(
    "data" => array(
        "id" => 0, // rendelés tétel azonosító
    )
));

print_r($order_delete_item);
