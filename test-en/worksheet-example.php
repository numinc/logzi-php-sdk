<?php

require __DIR__ . '/vendor/autoload.php';

$worksheet_client = new Numinc\Logzi\Worksheet_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcoded endpoint
$worksheet_save = $worksheet_client->save(array(
    "data" => array(
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
        "company_address_id" => 1, // issuer company shipping address
        "date_perform" =>  "2023-10-08", // performance date
        "partner_id" => 0, // customer company ID
        "partner_user_id" => 0, // customer company contact ID
        "partner_shipping_id" => 0, // customer company shipping address ID
        "currency_id" => 1, // currency ID
        "currency_exchange" => 0.00, // currency exchange rate, if different from the base currency
        "comment_top" =>  "", // customer comment
        "comment_bottom" =>  "", // internal comment
        "jobnumber_id" =>  "", // job number ID
        "departmentnumber_id" =>  "", // department number ID
        "project_id" =>  "", // project ID
        'worksheet_type_id' => 1, // 1 = Ad hoc, 2 = Warranty, 3 = Contractual, 4 = Other (extendable under System Settings / Worksheet types)

        "item" => array(
            0 => array(
                "product_id" => 2, // product or service ID
                "store_id" => 1, // store ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // item tax rate
                "comment_top" => "", // item comment
                "price" => 150.00 // item price
            ),
        ),

        "status_change_item" => array(
            0 => array(
                "date_perform" =>  "2023-10-08", // performance date
                "status_desc" => "", // comment
                "signature_name" => "", // signer name
                "signature_img" => "", // signature
            ),
        ),
    )
));

print_r($worksheet_save);

// hardcoded close
$worksheet_close = $worksheet_client->close(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID (following the example above, $worksheet_save->data->id)
    )
));

print_r($worksheet_close);
