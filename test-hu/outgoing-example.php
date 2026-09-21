<?php

require __DIR__ . '/vendor/autoload.php';

$outgoing_client = new Numinc\Logzi\outgoing_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcode végpont
$outgoing_save = $outgoing_client->save(array(
    "data" => array(
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
        "company_address_id" => 1, // kiállító cég szállítási címe
        "date_perform" =>  "2023-10-08", // teljesítés kelt
        "partner_id" => 0, // vevő cég azonosítója
        "partner_user_id" => 0, // vevő cég kapcsolattartó azonosítója
        "partner_shipping_id" => 0, // vevő cég szállítási címének azonosítója
        "currency_id" => 1, // pénznem azonosítója
        "currency_exchange" => 0.00, // pénznem árfolyama, amennyiben eltér az alap devizától
        "comment_top" =>  "", // ügyfél megjegyzés
        "comment_bottom" =>  "", // belső megjegyzés
        "jobnumber_id" =>  "", // munkaszám azonosító
        "departmentnumber_id" =>  "", // részlegszám azonosító
        "project_id" =>  "", // projekt azonosító

        "item" => array(
            0 => array(
                "product_id" => 2, // termék vagy szolgáltatás azonosító
                "store_id" => 1, // telephely azonosító
                "quantity" => 1, // mennyiség
                "tax_id" => 1, // tétel áfakulcs
                "comment_top" => "", // tétel megjegyzés
                "price" => 150.00 // tétel ára
            ),
        ),
    )
));

print_r($outgoing_save);

// hardcode lezárás
$outgoing_close = $outgoing_client->close(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító ( fenti példát követve $outgoing_save->data->id )
    )
));

print_r($outgoing_close);