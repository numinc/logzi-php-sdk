<?php

require __DIR__ . '/vendor/autoload.php';

$stock_pile_client = new Numinc\Logzi\Stock_pile_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// query full stock list
$stock_pile_list = $stock_pile_client->get_list(array(
    "list_condition" => array(
        "product_category_id" => 2
    )
));
print_r($stock_pile_list);

/*
{
    "language": "HU",
    "api_key": "direct",
    "result": {
        "code": 1,
        "message": null
    },
    "data": [
        {
            "partnumber": "LISZT01", // product part number
            "product_unit_name": "Nagyi kedvence liszt 1.00 darab", // product packaging name
            "store_name": "A raktár", // site/warehouse name
            "id": "34", // stock ID
            "product_id": "2068", // product ID
            "store_id": "1", // site/warehouse ID
            "quantity_phy": "53", // physical stock
            "quantity_acc": "0", // reserved stock
            "date_update": "2022-12-13 17:40:35", // last modified
            "company_id": "1", // company ID
            "quantity_ord": "0", // incoming stock
            "quantity_av": "0", // available stock
            "quantity_min": null, // minimum quantity
            "weight_netto": "0.0000", // net weight
            "weight_brutto": "0.0000", // gross weight
            "company_name": "Demo Kft.", // company name
            "num_rows": "13" // being phased out
        },
        {
            ...
        }
    ],
    "params": {
        "list_count": 10,
        "list_offset": 0,
        "list_all": 13
    }
}
*/

// query stock for a single product
$stock_pile_get = $stock_pile_client->get(array(
    "partnumber" => "CERUZA01",
));
print_r($stock_pile_get);

/*
{
    "language": "HU",
    "api_key": "direct",
    "result": {
        "code": 1,
        "message": null
    },
    "data": {
        "partnumber": "TOLLTARTO01", // product part number
        "product_unit_name": "Tolltartó 1.00 darab", // product packaging name
        "store_name": "A raktár", // site/warehouse name
        "id": "1", // stock ID
        "product_id": "6", // product ID
        "store_id": "1", // site/warehouse ID
        "quantity_phy": "-5", // physical stock
        "quantity_acc": "0", // reserved stock
        "date_update": "2023-12-29 11:50:59", // last modified
        "company_id": "1", // company ID
        "quantity_ord": null, // incoming stock
        "quantity_av": "-5", // available stock
        "quantity_min": "4", // minimum quantity
        "weight_netto": "125.0000", // net weight
        "weight_brutto": "150.0000", // gross weight
        "company_name": "Demo Kft." // company name
    },
    "params": null
}
*/
