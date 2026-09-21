<?php

require __DIR__ . '/vendor/autoload.php';

$collect_client = new Numinc\Logzi\Collect_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcoded endpoint
$collect_save = $collect_client->save(array(
    "data" => array(
        "receipt_type_id" => 32, // 32 = Goods receipt | 34 = Goods issue | 44 = Relocation
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
        "company_address_id" => 1, // issuer company shipping address
        'order_out_identify' => '', // outgoing order identifier (supplier)
        'order_in_identify' => '', // incoming order identifier (customer)
        'invoice_in_identify' => '', // incoming invoice identifier
        'delivery_note_in_identify' => '', // incoming delivery note identifier
        "comment_top" =>  "", // customer comment
        "comment_bottom" =>  "", // internal comment
        "jobnumber_id" =>  "", // job number ID
        "departmentnumber_id" =>  "", // department number ID
        "project_id" =>  "", // project ID
        "pallet_based" =>  0, // pallet-based movement

        "item" => array(
            0 => array(
                "partnumber" => "CERUZA01", // product part number
                "store_id" => 1, // store ID
                "store_locality_id" => 1, // location code ID
                "pallet_id" => 1, // pallet ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // item tax rate
                "checked" => 0, // checked
                "comment_top" => "", // item comment
                "price" => 150.00 // item price
            ),
        ),
    )
));

print_r($collect_save);

// hardcoded close
$collect_close = $collect_client->close(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID (following the example above, $collect_save->data->id)
    )
));

print_r($collect_close);
