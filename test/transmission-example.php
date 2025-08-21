<?php

require __DIR__ . '/vendor/autoload.php';

$transmission_client = new Numinc\Logzi\Transmission_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcode végpont
$transmission_save = $transmission_client->save(array(
    "data" => array(
        "company_id" => 1, // kiállító cég azonosító (mindig 1)
        "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
        "date_perform" =>  "2023-10-08", // teljesítés kelt
        "comment_bottom" =>  "", // belső megjegyzés
        "jobnumber_id" =>  "", // munkaszám azonosító
        "departmentnumber_id" =>  "", // részlegszám azonosító
        "project_id" =>  "", // projekt azonosító

        "item" => array(
            0 => array(
                "product_id" => 2, // termék vagy szolgáltatás azonosító
                "quantity" => 1, // mennyiség

                'src_store_id' => 1, // forrás telephely
                'src_store_locality_id' => 1, // forrás helykód
                'src_pallet_id' => 1, // forrás raklap
                
                'dst_store_id' => 2, // cél telephely
                'dst_store_locality_id' => 2, // cél helykód
                'dst_pallet_id' => 2, // cél raklap
            ),
        ),
    )
));

print_r($transmission_save);

// hardcode lezárás
$transmission_close = $transmission_client->close(array(
    "data" => array(
        "receipt_id" => 0, // bizonylat azonosító ( fenti példát követve $transmission_save->data->id )
    )
));

print_r($transmission_close);