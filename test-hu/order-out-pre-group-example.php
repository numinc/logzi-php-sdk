<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_pre_group_client = new Numinc\Logzi\Order_out_pre_group_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$order_pre = $order_out_pre_group_client->get_pre(array(
    "id" => 0, // előrendelés csoport azonosító
));

print_r($order_pre);

$order_pre_list = $order_out_pre_group_client->get_list_pre(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_pre_list);

// hardcode végpont
$order_save_pre = $order_out_pre_group_client->save_pre(array(
    "data" => array(
        "product_id" => 0, // termék azonosító
        "partner_order_id" => 0, // szállító cég azonosítója
        "quantity" => 1, // mennyiség
        "incoming_price" => 100.00, // beszerzési ár
        "incoming_currency_id" => 1, // beszerzési pénznem azonosítója
    )
));

print_r($order_save_pre);
