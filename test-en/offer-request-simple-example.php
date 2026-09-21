<?php

require __DIR__ . '/vendor/autoload.php';

$offer_request_client = new Numinc\Logzi\Offer_request_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// order bulk save
// the save_bulk endpoint accepts two data schemas: one similar to the hardcoded format and a simplified one
$offer_request_save_bulk = $offer_request_client->save_bulk(array(
    "data" => array(
        "params" => array(
            "close" => 1, // automatic closing, no need to call the close endpoint separately
        ),
        "data" => array(
            1 => array(
                "receipt_type_id" => 12, // receipt type (12 - incoming customer offer, 21 - supplier offer request)
                "company_id" => 1, // issuer company ID (always 1)
                "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
                "company_address_id" => 1, // issuer company billing address
                "date_perform" =>  "2023-12-08", // performance date
                "partner" => array(
                    "company_name" =>  "Minta cég 231007", // customer company name
                    "taxcode" =>  "12345678-1-11", // customer company tax number
                ),
                "partner_user" => array(
                    "name" =>  "Kapcsolat tartó", // customer company contact name
                    "email" =>  "tarto@logzi.com", // customer company contact email address
                    "telephone" =>  "+36 20 246 3590", // customer company contact phone number
                ),
                "currency" =>  "HUF", // currency ISO3 code
                "currency_exchange" => 0.00, // currency exchange rate, if different from the base currency
                "comment_top" =>  "", // customer comment
                "comment_bottom" =>  "", // internal comment
                "identify_customer" => "", // customer's external receipt identifier
                "subject" => "", // subject
    
                "item"  =>  array(
                    0 => array(
                        "product" => array(
                            "partnumber" =>  "egyedicikkszam-01", // product or service part number
                            "name" =>  "Egyedi terméknév", // product or service name
                            "description" =>  "Egyedi termék leírás", // product or service description
                            "price" =>  0.00,  // product or service discounted price
                        ),
                        "store_id" => 1, // store ID
                        "quantity" => 1, // quantity
                        "tax_id" => 1, // item tax rate
                        "comment_top" => "", // item comment
                    )
                ),
            )
        ),
    )
));

print_r($offer_request_save_bulk);
