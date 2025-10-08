<?php

require __DIR__ . '/vendor/autoload.php';

$collect_client = new Numinc\Logzi\Collect_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcode végpont
$collect_save = $collect_client->save(array(
    "data" => array(
        "receipt_type_id" => 32, // 32 = Áruátvétel | 34 = Árukiadás | 44 = Áttárolás
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
        "company_address_id" => 1, // kiállító cég szállítási címe
        'order_out_identify' => '', // kimenő megrendelés azonosító (szállítói)
        'order_in_identify' => '', // bejövő megrendelés azonosító (vevői)
        'invoice_in_identify' => '', // bejövő számla azonosító 
        'delivery_note_in_identify' => '', // bejövő szállítólevél azonosító
        "comment_top" =>  "", // ügyfél megjegyzés
        "comment_bottom" =>  "", // belső megjegyzés
        "jobnumber_id" =>  "", // munkaszám azonosító
        "departmentnumber_id" =>  "", // részlegszám azonosító
        "project_id" =>  "", // projekt azonosító
        "pallet_based" =>  0, // paletta alapú mozgatás

        "item" => array(
            0 => array(
                "partnumber" => "CERUZA01", // termék cikkszám
                "store_id" => 1, // telephely azonosító
                "store_locality_id" => 1, // helykód azonosító
                "pallet_id" => 1, // paletta azonosító
                "quantity" => 1, // mennyiség
                "tax_id" => 1, // tétel áfakulcs
                "checked" => 0, // ellenőrizve
                "comment_top" => "", // tétel megjegyzés
                "price" => 150.00 // tétel ára
            ),
        ),
    )
));

print_r($collect_save);

// hardcode lezárás
$collect_close = $collect_client->close(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító ( fenti példát követve $collect_save->data->id )
    )
));

print_r($collect_close);