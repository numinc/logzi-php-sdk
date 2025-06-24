<?php

require __DIR__ . '/vendor/autoload.php';

$offer_request_client = new Numinc\Logzi\Offer_request_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// order bulk save
// a save_bulk végpont kétféle adat sémát is elfogad, egy hardcode-hoz hasonlót és egy egyszerűsítettet
$offer_request_save_bulk = $offer_request_client->save_bulk(array(
    "data" => array(
        "params" => array(
            "close" => 1, // automatikus lezárás, nem szükséges meghívni külön a close végpontot
        ),
        "data" => array(
            1 => array(
                "receipt_type_id" => 12, // bizonylat típusa (12 - vevői beérkező ajánlat, 21 - szállítói ajánlat kérés)
                "company_id" => 1, // kiállító cég azonosító (mindig 1)
                "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
                "company_address_id" => 1, // kiállító cég számlázási címe
                "date_perform" =>  "2023-12-08", // teljesítés kelt
                "partner" => array(
                    "company_name" =>  "Minta cég 231007", // vevő cég neve
                    "taxcode" =>  "12345678-1-11", // vevő cég adószáma
                ),
                "partner_user" => array(
                    "name" =>  "Kapcsolat tartó", // vevő cég kapcsolattartó neve
                    "email" =>  "tarto@logzi.com", // vevő cég kapcsolattartó email címe
                    "telephone" =>  "+36 20 246 3590", // vevő cég kapcsolattartó telefonszáma
                ),
                "currency" =>  "HUF", // pénznem ISO3 kódja
                "currency_exchange" => 0.00, // pénznem árfolyama, amennyiben eltér az alap devizától
                "comment_top" =>  "", // ügyfél megjegyzés
                "comment_bottom" =>  "", // belső megjegyzés
                "identify_customer" => "", // ügyfél külső bizonylat azonosító
                "subject" => "", // tárgy
    
                "item"  =>  array(
                    0 => array(
                        "product" => array(
                            "partnumber" =>  "egyedicikkszam-01", // termék vagy szolgáltatás cikkszáma
                            "name" =>  "Egyedi terméknév", // termék vagy szolgáltatás neve
                            "description" =>  "Egyedi termék leírás", // termék vagy szolgáltatás leírása
                            "price" =>  0.00,  // termék vagy szolgáltatás kedvezményes ára
                        ),
                        "store_id" => 1, // telephely azonosító
                        "quantity" => 1, // mennyiség
                        "tax_id" => 1, // tétel áfakulcs
                        "comment_top" => "", // tétel megjegyzés
                    )
                ),
            )
        ),
    )
));

print_r($offer_request_save_bulk);
