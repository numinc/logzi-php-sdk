<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_pre_client = new Numinc\Logzi\Order_out_pre_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_pre = $order_out_pre_client->get_pre(array(
    "id" => 0, // előrendelés azonosító
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

// hardcode végpont
$order_save_pre = $order_out_pre_client->save_pre(array(
    "data" => array(
        "id" => 0, // előrendelés tétel azonosító
        "partner_order_id" => 0, // szállító cég azonosítója
        "quantity" => 1, // mennyiség
        "incoming_price" => 100.00, // beszerzési ár
        "incoming_currency_id" => 1, // beszerzési pénznem azonosítója
    )
));

print_r($order_save_pre);

$order_save_pre_new = $order_out_pre_client->save_pre_new(array(
    "data" => array(
        "item_id" => 0, // rendelés tétel azonosító
        "partner_order_id" => 0, // szállító cég azonosítója
        "quantity" => 1, // mennyiség
        "incoming_price" => 100.00, // beszerzési ár
        "incoming_currency_id" => 1, // beszerzési pénznem azonosítója
    )
));

print_r($order_save_pre_new);

$order_delete_pre = $order_out_pre_client->delete_pre(array(
    "data" => array(
        "item_id" => 0, // rendelés tétel azonosító
    )
));

print_r($order_delete_pre);
