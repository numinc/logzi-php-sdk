<?php

require __DIR__ . '/vendor/autoload.php';

$worksheet_client = new Numinc\Logzi\Worksheet_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcode végpont
$worksheet_save = $worksheet_client->save(array(
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
        'worksheet_type_id' => 1, // 1 = Eseti, 2 = Garanciális, 3 = Szerződéses, 4 = Egyéb (bővíthető Rendszerbeállítások / Munkalap típusok)

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

        "status_change_item" => array(
            0 => array(
                "date_perform" =>  "2023-10-08", // teljesítés kelt
                "status_desc" => "", // megjegyzés
                "signature_name" => "", // aláíró név
                "signature_img" => "", // aláírás
            ),
        ),
    )
));

print_r($worksheet_save);

// hardcode lezárás
$worksheet_close = $worksheet_client->close(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító ( fenti példát követve $worksheet_save->data->id )
    )
));

print_r($worksheet_close);