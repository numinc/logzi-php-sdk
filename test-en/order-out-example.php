<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_client = new Numinc\Logzi\Order_out_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcoded endpoint
$order_save = $order_out_client->save(array(
    "data" => array(
        "id" => 0, // order ID (0 - new order, otherwise the existing order is modified)
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
        "company_billing_id" => 1, // issuer company billing address
        "company_shipping_id" => 1, // issuer company shipping address
        "date_perform" =>  "2023-10-08", // performance date
        "partner_id" => 0, // supplier company ID
        "partner_user_id" => 0, // supplier company contact ID
        "partner_billing_id" => 0, // supplier company billing address ID
        "partner_shipping_id" => 0, // supplier company shipping address ID
        "currency_id" => 1, // currency ID
        "currency_exchange" => 0.00, // currency exchange rate, if different from the base currency
        "direct_shipping" => 0, // dropshipping yes/no
        "comment_top" =>  "", // supplier comment
        "comment_bottom" =>  "", // internal comment
        "jobnumber_id" =>  "", // job number ID
        "departmentnumber_id" =>  "", // department number ID
        "identify_customer" =>  "", // external identifier

        "item" => array(
            0 => array(
                "id" => 0, // item ID (0 - new item)
                "product_id" => 2, // product or service ID
                "store_id" => 1, // store ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // item tax rate
                "comment_top" => "", // item comment
                "price" => 150.00, // item price
                "price_sale" => 150.00, // item list price
                "price_discount" => 0.00, // item discount amount
                "remove" => 0, // remove the item from the order yes/no
            ),
        ),
    )
));

print_r($order_save);

// hardcoded close
$order_close = $order_out_client->close(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID (following the example above, $order_save->data->id)
    )
));

print_r($order_close);

// get order by ID or identifier
$order = $order_out_client->get(array(
    "id" => 0, // receipt ID
    "identify" => "", // receipt identifier
));

print_r($order);

// order list
$order_list = $order_out_client->get_list(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_list);

// order item list
$order_item_list = $order_out_client->get_item_list(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_item_list);

// pending, confirmed and pre-order lists
$order_list_pending = $order_out_client->get_list_pending(array(
	"list_offset" => 0,
	"list_condition" => array(),
));

$order_list_confirm = $order_out_client->get_list_confirm(array(
	"list_offset" => 0,
	"list_condition" => array(),
));

$order_list_pre = $order_out_client->get_list_pre(array(
	"list_offset" => 0,
	"list_condition" => array(),
));

print_r($order_list_pending);
print_r($order_list_confirm);
print_r($order_list_pre);

// pre-order and confirmation
$order_pre = $order_out_client->get_pre(array(
    "id" => 0, // pre-order ID
));

$order_confirm = $order_out_client->get_confirm(array(
    "id" => 0, // confirmation ID
));

print_r($order_pre);
print_r($order_confirm);

// save pre-order item
$order_save_pre = $order_out_client->save_pre(array(
    "data" => array(
        "id" => 0, // pre-order item ID
        "partner_order_id" => 0, // supplier company ID
        "quantity" => 1, // quantity
        "incoming_price" => 100.00, // purchase price
        "incoming_currency_id" => 1, // purchase currency ID
    )
));

print_r($order_save_pre);

// save new pre-order item
$order_save_pre_new = $order_out_client->save_pre_new(array(
    "data" => array(
        "item_id" => 0, // order item ID
        "partner_order_id" => 0, // supplier company ID
        "quantity" => 1, // quantity
        "incoming_price" => 100.00, // purchase price
        "incoming_currency_id" => 1, // purchase currency ID
    )
));

print_r($order_save_pre_new);

// delete pre-order item
$order_delete_pre = $order_out_client->delete_pre(array(
    "data" => array(
        "item_id" => 0, // order item ID
    )
));

print_r($order_delete_pre);

// save supplier confirmation
$order_save_confirm = $order_out_client->save_confirm(array(
    "data" => array(
        "id" => 0, // confirmation item ID
        "date_confirm" => "2023-10-08", // confirmation date
        "quantity_completed" => 1, // confirmed quantity
    )
));

print_r($order_save_confirm);

// send the order to the supplier
$order_send_cloud = $order_out_client->send_order_cloud(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID
        "sender_core_id" => 0, // sender core ID
    )
));

print_r($order_send_cloud);

// send confirmation email
$order_email_confirm = $order_out_client->email_confirm(array(
    "data" => array(
        "id" => 0, // receipt ID
        "email_type" => "", // email type
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID
    )
));

print_r($order_email_confirm);

// mark the order as successful
$order_success = $order_out_client->success(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID
        "note_content" => "", // note
    )
));

print_r($order_success);

// mark an order item as successful
$order_success_item = $order_out_client->success_item(array(
    "data" => array(
        "id" => 0, // order item ID
    )
));

print_r($order_success_item);

// storage open
$order_storage_open = $order_out_client->storage_open(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID
        "note_content" => "", // note
    )
));

print_r($order_storage_open);

// download
$order_download = $order_out_client->download(array(
    "file_type" => "pdf-string", // file type (pdf, pdf-string, stream)
    "receipt_id" => 0, // receipt ID
    "language" => "", // language code
    "language_id" => 0, // language ID
    "template_id" => 0, // template ID
));

print_r($order_download);

// delete
$order_delete = $order_out_client->delete(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID
    )
));

print_r($order_delete);
