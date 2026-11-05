<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_running_client = new Numinc\Logzi\Order_out_running_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_running = $order_out_running_client->get_running(array(
    "id" => 0, // futó rendelés azonosító
));

print_r($order_running);

$order_running_list = $order_out_running_client->get_list_running(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_running_list);

// hardcode végpont
$order_save_running = $order_out_running_client->save_running(array(
    "data" => array(
        "product_id" => 0, // termék azonosító
        "partner_order_id" => 0, // szállító cég azonosítója
        "quantity" => 1, // mennyiség
        "incoming_price" => 100.00, // beszerzési ár
        "incoming_currency_id" => 1, // beszerzési pénznem azonosítója
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
    )
));

print_r($order_save_running);
