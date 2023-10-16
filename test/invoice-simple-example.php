<?php

require __DIR__ . '/vendor/autoload.php';

$invoice_client = new Numinc\Logzi\Invoice_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// invoice bulk save
// a save_bulk végpont kétféle adat sémát is elfogad, egy hardcode-hoz hasonlót és egy egyszerűsítettet
$invoice_save_bulk = $invoice_client->save_bulk(array(
    "data" => array(
        "params" => array(
            "close" => 1, // automatikus számla lezárás, nem szükséges meghívni külön a close végpontot
        ),
        "data" => array(
            1 => array(
                "receipt_type_id" => 8, // bizonylat típusa (8 - számla, 13 - előleg számla, 33 - proformaszámla)
                "receipt_type_cr_prefix" =>  "SZL", // számlatömb azonosítója (ha nincs megadva alapértelmezett tömbhöz fűzi)
                "paymod_webname" =>  "Bármi", // fizetési mód webes elnevezése (ha nincs megadva alapértelmezett fizetési móddal kerül rögzítésre)
                "company_id" => 1, // számla kiállító cég azonosító (mindig 1)
                "company_user_id" => 1, // számla kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
                "company_billing_id" => 1, // számla kiállító cég számlázási címe
                "company_shipping_id" => 1, // számla kiállító cég szállítási címe
                "date_perform" =>  "2023-10-08", // teljesítés kelt
                "date_validity" =>  "2023-10-08", // esedékesség kelt
                "date_payoff" =>  "2023-10-08", // elszámolási idő kelt
                "partner" => array(
                    "company_name" =>  "Minta cég 231007", // számla befogadó cég neve
                    "taxcode" =>  "12345678-1-11", // számla befogadó cég adószáma
                ),
                "partner_user" => array(
                    "name" =>  "Kapcsolat tartó", // számla befogadó kapcsolattartó neve
                    "email" =>  "tarto@logzi.com", // számla befogadó kapcsolattartó email címe
                    "telephone" =>  "+36 20 246 3590", // számla befogadó kapcsolattartó telefonszáma
                ),
                "partner_billing" => array(
                    "address" =>  "Kapcsolat utca 11", // számla befogadó cég számlázási címe
                    "zip" =>  "2500", // számla befogadó cég számlázási címének irányítószáma
                    "city" =>  "Esztergom" // számla befogadó cég számlázási címének városa
                ),
                "partner_shipping" => array(
                    "address" =>  "Kapcsolat utca 12", // számla befogadó cég szállítási címe
                    "zip" =>  "2500", // számla befogadó cég szállítási címének irányítószáma
                    "city" =>  "Esztergom" // számla befogadó cég szállítási címének városa
                ),
                "currency" =>  "HUF", // számla pénznem ISO3 kódja
                "currency_exchange" => 0.00, // számla pénznem árfolyama, amennyiben eltér az alap devizától
                "comment_top" =>  "", // számla ügyfél megjegyzés
                "comment_bottom" =>  "", // számla belső megjegyzés

                "item"  =>  array(
                    0 => array(
                        "product" => array(
                            "partnumber" =>  "egyedicikkszam-01", // termék vagy szolgáltatás cikkszáma
                            "name" =>  "Egyedi terméknév", // termék vagy szolgáltatás neve
                            "description" =>  "Egyedi termék leírás", // termék vagy szolgáltatás leírása
                            "price" =>  0.00,  // termék vagy szolgáltatás lista ára (Árlistába bekerül mint alap eladási ár)
                        ),
                        "store_id" => 1, // telephely azonosító
                        "quantity" => 1, // mennyiség
                        "tax_id" => 1, // tétel áfakulcs
                        "comment_top" => "", // tétel megjegyzés
                        "price" => 150.00 // tétel ára
                    )
                ),
            )
        ),
    )
));

print_r($invoice_save_bulk);
