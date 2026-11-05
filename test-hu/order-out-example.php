<?php

require __DIR__ . '/vendor/autoload.php';

$order_out_client = new Numinc\Logzi\Order_out_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcode végpont
$order_save = $order_out_client->save(array(
    "data" => array(
        "id" => 0, // rendelés azonosító (0 - új rendelés, egyébként a meglévő rendelés módosul)
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
        "company_billing_id" => 1, // kiállító cég számlázási címe
        "company_shipping_id" => 1, // kiállító cég szállítási címe
        "date_perform" =>  "2023-10-08", // teljesítés kelt
        "partner_id" => 0, // szállító cég azonosítója
        "partner_user_id" => 0, // szállító cég kapcsolattartó azonosítója
        "partner_billing_id" => 0, // szállító cég számlázási címének azonosítója
        "partner_shipping_id" => 0, // szállító cég szállítási címének azonosítója
        "currency_id" => 1, // pénznem azonosítója
        "currency_exchange" => 0.00, // pénznem árfolyama, amennyiben eltér az alap devizától
        "direct_shipping" => 0, // dropshipping igen/nem
        "comment_top" =>  "", // szállítói megjegyzés
        "comment_bottom" =>  "", // belső megjegyzés
        "jobnumber_id" =>  "", // munkaszám azonosító
        "departmentnumber_id" =>  "", // részlegszám azonosító
        "identify_customer" =>  "", // külső azonosító

        "item" => array(
            0 => array(
                "id" => 0, // tétel azonosító (0 - új tétel)
                "product_id" => 2, // termék vagy szolgáltatás azonosító
                "store_id" => 1, // telephely azonosító
                "quantity" => 1, // mennyiség
                "tax_id" => 1, // tétel áfakulcs
                "comment_top" => "", // tétel megjegyzés
                "price" => 150.00, // tétel ára
                "price_sale" => 150.00, // tétel listaára
                "price_discount" => 0.00, // tétel kedvezmény összege
                "remove" => 0, // tétel eltávolítása a rendelésből igen/nem
            ),
        ),
    )
));

print_r($order_save);

// hardcode lezárás
$order_close = $order_out_client->close(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító ( fenti példát követve $order_save->data->id )
    )
));

print_r($order_close);

// rendelés lekérése azonosító vagy bizonylatszám alapján
$order = $order_out_client->get(array(
    "id" => 0, // bizonylat azonosító
    "identify" => "", // bizonylatszám
));

print_r($order);

// rendelés lista
$order_list = $order_out_client->get_list(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_list);

// rendelés tétel lista
$order_item_list = $order_out_client->get_item_list(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));

print_r($order_item_list);

// függő, visszaigazolt és előrendelés listák
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

// előrendelés és visszaigazolás
$order_pre = $order_out_client->get_pre(array(
    "id" => 0, // előrendelés azonosító
));

$order_confirm = $order_out_client->get_confirm(array(
    "id" => 0, // visszaigazolás azonosító
));

print_r($order_pre);
print_r($order_confirm);

// előrendelés tétel mentése
$order_save_pre = $order_out_client->save_pre(array(
    "data" => array(
        "id" => 0, // előrendelés tétel azonosító
        "partner_order_id" => 0, // szállító cég azonosítója
        "quantity" => 1, // mennyiség
        "incoming_price" => 100.00, // beszerzési ár
        "incoming_currency_id" => 1, // beszerzési pénznem azonosítója
    )
));

print_r($order_save_pre);

// új előrendelés tétel mentése
$order_save_pre_new = $order_out_client->save_pre_new(array(
    "data" => array(
        "item_id" => 0, // rendelés tétel azonosító
        "partner_order_id" => 0, // szállító cég azonosítója
        "quantity" => 1, // mennyiség
        "incoming_price" => 100.00, // beszerzési ár
        "incoming_currency_id" => 1, // beszerzési pénznem azonosítója
    )
));

print_r($order_save_pre_new);

// előrendelés tétel törlése
$order_delete_pre = $order_out_client->delete_pre(array(
    "data" => array(
        "item_id" => 0, // rendelés tétel azonosító
    )
));

print_r($order_delete_pre);

// szállítói visszaigazolás mentése
$order_save_confirm = $order_out_client->save_confirm(array(
    "data" => array(
        "id" => 0, // visszaigazolás tétel azonosító
        "date_confirm" => "2023-10-08", // visszaigazolás kelte
        "quantity_completed" => 1, // visszaigazolt mennyiség
    )
));

print_r($order_save_confirm);

// rendelés elküldése a szállítónak
$order_send_cloud = $order_out_client->send_order_cloud(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító
        "sender_core_id" => 0, // küldő core azonosító
    )
));

print_r($order_send_cloud);

// visszaigazoló email küldése
$order_email_confirm = $order_out_client->email_confirm(array(
    "data" => array(
        "id" => 0, // bizonylat azonosító
        "email_type" => "", // email típusa
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító
    )
));

print_r($order_email_confirm);

// rendelés teljesítettre állítása
$order_success = $order_out_client->success(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító
        "note_content" => "", // megjegyzés
    )
));

print_r($order_success);

// rendelés tétel teljesítettre állítása
$order_success_item = $order_out_client->success_item(array(
    "data" => array(
        "id" => 0, // rendelés tétel azonosító
    )
));

print_r($order_success_item);

// raktár megnyitás
$order_storage_open = $order_out_client->storage_open(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító
        "note_content" => "", // megjegyzés
    )
));

print_r($order_storage_open);

// letöltés
$order_download = $order_out_client->download(array(
    "file_type" => "pdf-string", // fájl típusa (pdf, pdf-string, stream)
    "receipt_id" => 0, // bizonylat azonosító
    "language" => "", // nyelv kód
    "language_id" => 0, // nyelv azonosító
    "template_id" => 0, // sablon azonosító
));

print_r($order_download);

// törlés
$order_delete = $order_out_client->delete(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító
    )
));

print_r($order_delete);
