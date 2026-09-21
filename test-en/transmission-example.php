<?php

require __DIR__ . '/vendor/autoload.php';

$transmission_client = new Numinc\Logzi\Transmission_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcoded endpoint
$transmission_save = $transmission_client->save(array(
    "data" => array(
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID (value 1 is created by the system user, used for automations)
        "date_perform" =>  "2023-10-08", // performance date
        "comment_bottom" =>  "", // internal comment
        "jobnumber_id" =>  "", // job number ID
        "departmentnumber_id" =>  "", // department number ID
        "project_id" =>  "", // project ID

        "item" => array(
            0 => array(
                "product_id" => 2, // product or service ID
                "quantity" => 1, // quantity

                'src_store_id' => 1, // source store
                'src_store_locality_id' => 1, // source location code
                'src_pallet_id' => 1, // source pallet
                
                'dst_store_id' => 2, // destination store
                'dst_store_locality_id' => 2, // destination location code
                'dst_pallet_id' => 2, // destination pallet
            ),
        ),
    )
));

print_r($transmission_save);

// hardcoded close
$transmission_close = $transmission_client->close(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID (following the example above, $transmission_save->data->id)
    )
));

print_r($transmission_close);
