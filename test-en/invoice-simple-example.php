<?php

require __DIR__ . '/vendor/autoload.php';

$invoice_client = new Numinc\Logzi\Invoice_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// invoice bulk save
// the save_bulk endpoint accepts two data schemas: one similar to the hardcoded format and a simplified one
$invoice_save_bulk = $invoice_client->save_bulk(array(
    "data" => array(
        "data" => array(
            1 => array(
                "params" => array(
                    "close" => 1, // automatic invoice closing, no need to call the close endpoint separately
                    "tickets" => array( // specify ticket instances; uniqueness must be guaranteed in the external system
                        array("code" => "QRXCCC01"),
                        array("code" => "QRXCCC02"),
                    ),
                ),
                
                "receipt_type_id" => 8, // receipt type (8 - invoice, 13 - advance invoice, 33 - proforma invoice)
                "receipt_type_cr_prefix" =>  "SZL", // invoice block ID (if not specified, appended to the default block)
                "paymod_webname" =>  "Bármi", // web name of the payment method (if not specified, recorded with the default payment method)
                "company_id" => 1, // invoice issuer company ID (always 1)
                "company_user_id" => 1, // invoice issuer company user ID (value 1 is created by the system user, used for automations)
                "company_billing_id" => 1, // invoice issuer company billing address
                "company_shipping_id" => 1, // invoice issuer company shipping address
                "date_perform" =>  "2023-10-08", // performance date
                "date_validity" =>  "2023-10-08", // due date
                "date_payoff" =>  "2023-10-08", // settlement date
                "partner" => array(
                    "company_name" =>  "Minta cég 231007", // invoice recipient company name
                    "taxcode" =>  "12345678-1-11", // invoice recipient company tax number
                ),
                "partner_user" => array(
                    "name" =>  "Kapcsolat tartó", // invoice recipient contact name
                    "email" =>  "tarto@logzi.com", // invoice recipient contact email address
                    "telephone" =>  "+36 20 246 3590", // invoice recipient contact phone number
                ),
                "partner_billing" => array(
                    "address" =>  "Kapcsolat utca 11", // invoice recipient company billing address
                    "zip" =>  "2500", // invoice recipient company billing address zip code
                    "city" =>  "Esztergom" // invoice recipient company billing address city
                ),
                "partner_shipping" => array(
                    "address" =>  "Kapcsolat utca 12", // invoice recipient company shipping address
                    "zip" =>  "2500", // invoice recipient company shipping address zip code
                    "city" =>  "Esztergom" // invoice recipient company shipping address city
                ),
                "currency" =>  "HUF", // invoice currency ISO3 code
                "currency_exchange" => 0.00, // invoice currency exchange rate, if different from the base currency
                "comment_top" =>  "", // invoice customer comment
                "comment_bottom" =>  "", // invoice internal comment

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

print_r($invoice_save_bulk);
