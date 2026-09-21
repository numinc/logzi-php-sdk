<?php

require __DIR__ . '/vendor/autoload.php';

$order_in_client = new Numinc\Logzi\Order_in_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// order bulk save
// the save_bulk endpoint accepts two data schemas: one similar to the hardcoded format and a simplified one
$order_in_save_bulk = $order_in_client->save_bulk(array(
    "data" => array(
        "params" => array(
            "close" => 1, // automatic closing, no need to call the close endpoint separately
        ),
        "data" => array(
            1 => array(
                "receipt_type_id" => 5, // receipt type (5 - customer order)
                "paymod_webname" =>  "Bármi", // web name of the payment method (if not specified, recorded with the default payment method)
                "company_id" => 1, // issuer company ID (always 1)
                "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
                "company_billing_id" => 1, // issuer company billing address
                "company_shipping_id" => 1, // issuer company shipping address
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
                "partner_billing" => array(
                    "address" =>  "Kapcsolat utca 11", // customer company billing address
                    "zip" =>  "2500", // customer company billing address zip code
                    "city" =>  "Esztergom" // customer company billing address city
                ),
                "partner_shipping" => array(
                    "address" =>  "Kapcsolat utca 12", // customer company shipping address
                    "zip" =>  "2500", // customer company shipping address zip code
                    "city" =>  "Esztergom" // customer company shipping address city
                ),
                "currency" =>  "HUF", // currency ISO3 code
                "currency_exchange" => 0.00, // currency exchange rate, if different from the base currency
                "comment_top" =>  "", // customer comment
                "comment_bottom" =>  "", // internal comment
    
                "paymod_id" => 1, // payment method ID
                "shipping_id" => 1, // shipping method ID
                "direct_shipping" => 0, // dropshipping yes/no
                "shipping_partial_id" => 0, // partial shipping yes/no
                "identify_customer" => "", // external order identifier
    
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
                        "price" => 150.00, // item price
                        "price_sale" =>  150.00,  // product or service list price (added to the price list as the base sales price)
                        "price_discount" =>  0.00,  // product or service discount amount
                    )
                ),
            )
        ),
    )
));

print_r($order_in_save_bulk);
