<?php

require __DIR__ . '/vendor/autoload.php';

$order_in_client = new Numinc\Logzi\Order_in_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcoded endpoint
$order_save = $order_in_client->save(array(
    "data" => array(
        "paymod_id" => 1, // payment method ID
        "shipping_id" => 1, // shipping method ID
        "direct_shipping" => 0, // dropshipping yes/no
        "shipping_partial_id" => 0, // partial shipping yes/no
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
        "company_billing_id" => 1, // issuer company billing address
        "company_shipping_id" => 1, // issuer company shipping address
        "date_perform" =>  "2023-10-08", // performance date
        "partner_id" => 0, // customer company ID
        "partner_user_id" => 0, // customer company contact ID
        "partner_billing_id" => 0, // customer company billing address ID
        "partner_shipping_id" => 0, // customer company shipping address ID
        "currency_id" => 1, // currency ID
        "currency_exchange" => 0.00, // currency exchange rate, if different from the base currency
        "comment_top" =>  "", // customer comment
        "comment_bottom" =>  "", // internal comment
        "jobnumber_id" =>  "", // job number ID
        "departmentnumber_id" =>  "", // department number ID
        "identify_customer" =>  "", // external identifier
        "project_id" =>  "", // project ID

        "item" => array(
            0 => array(
                "product_id" => 2, // product or service ID
                "store_id" => 1, // store ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // item tax rate
                "comment_top" => "", // item comment
                "price" => 150.00 // item price
            ),

            // shipping cost
            1 => array(
                "product_id" => -2, // SHP10 is always found at ID -2; if this doesn't fit, shipping services can be freely added
                "store_id" => 1, // store ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // home delivery tax rate
                "comment_top" => "GLS home delivery", // home delivery comment
                "price" => 150.00 // home delivery price
            ),
        ),
    )
));

print_r($order_save);

// hardcoded close
$order_close = $order_in_client->close(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID (following the example above, $order_save->data->id)
    )
));

print_r($order_close);
