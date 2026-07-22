<?php

require __DIR__ . '/vendor/autoload.php';

$offer_send_client = new Numinc\Logzi\Offer_send_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcode végpont
$offer_send_save = $offer_send_client->save(array(
    "data" => array(
        "paymod_id" => 1, // fizetési mód azonosítója
        "shipping_id" => 1, // szállítási mód azonosítója
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosítója
        "company_address_id" => 1, // kiállító cég telephelye (store_id)
        "date_perform" => "2026-10-08", // teljesítés dátuma
        "partner_id" => 1, // vevő cég azonosítója
        "partner_user_id" => 1, // vevő kapcsolattartó azonosítója
        "partner_billing_id" => 1, // vevő számlázási cím azonosítója
        "partner_shipping_id" => 1, // vevő szállítási cím azonosítója
        "currency_id" => 1, // pénznem azonosítója
        "currency_exchange" => 0.00, // árfolyam (0 = alap deviza)
        "subject" => "", // ajánlat tárgya
        "comment_top" => "", // ügyfél megjegyzés
        "comment_bottom" => "", // belső megjegyzés
        "orderable_customer" => 1, // ügyfél megrendelheti-e online (1=igen)
        "jobnumber_id" => "", // munkaszám azonosító
        "departmentnumber_id" => "", // részlegszám azonosító
        "identify_customer" => "", // ügyfél külső azonosítója
        "project_id" => "", // projekt azonosító

        "item" => array(
            0 => array(
                "product_id" => 2, // termék/szolgáltatás azonosítója
                "store_id" => 1, // telephely azonosítója
                "quantity" => 1, // mennyiség
                "tax_id" => 1, // áfakulcs azonosítója
                "comment_top" => "", // tétel megjegyzés
                "price" => 150.00, // nettó ár
                "price_sale" => 0.00, // akciós ár (0 = nem akciós)
                "price_discount" => 0.00, // kedvezmény összege
            ),

            // szállítási költség tétel
            1 => array(
                "product_id" => -2, // SHP10 szállítási termék (mindig -2)
                "store_id" => 1, // telephely azonosítója
                "quantity" => 1, // mennyiség
                "tax_id" => 1, // áfakulcs azonosítója
                "comment_top" => "GLS házhozszállítás", // megjegyzés
                "price" => 150.00, // szállítási díj
                "price_sale" => 0.00,
                "price_discount" => 0.00,
            ),
        ),
    )
));

print_r($offer_send_save);

// hardcode lezárás
$order_close = $offer_send_client->close(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító ( fenti példát követve $offer_send_save->data->id )
    )
));

print_r($order_close);