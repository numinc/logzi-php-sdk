<?php

require __DIR__ . '/vendor/autoload.php';

$stock_pile_client = new Numinc\Logzi\Stock_pile_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// teljes készlet lista lekérdezése
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
            "partnumber": "LISZT01", // termék cikkszám
            "product_unit_name": "Nagyi kedvence liszt 1.00 darab", // termék kiszerelés megnevezés
            "store_name": "A raktár", // telephely/raktár név
            "id": "34", // készlet azonosító
            "product_id": "2068", // termék azonosító
            "store_id": "1", // telephely/raktár azonosító
            "quantity_phy": "53", // fizikai készlet
            "quantity_acc": "0", // foglalt készlet
            "date_update": "2022-12-13 17:40:35", // utolsó módosítás
            "company_id": "1", // cég azonosító
            "quantity_ord": "0", // beérkező készlet
            "quantity_av": "0", // szabad készlet
            "quantity_min": null, // minimum mennyiség
            "weight_netto": "0.0000", // nettó súly
            "weight_brutto": "0.0000", // bruttó súly
            "company_name": "Demo Kft.", // cég megnevezés
            "num_rows": "13" // kivezetés alatt
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

// egy termék készlet lekérdezése
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
        "partnumber": "TOLLTARTO01", // termék cikkszám
        "product_unit_name": "Tolltartó 1.00 darab", // termék kiszerelés megnevezés
        "store_name": "A raktár", // telephely/raktár név
        "id": "1", // készlet azonosító
        "product_id": "6", // termék azonosító
        "store_id": "1", // telephely/raktár azonosító
        "quantity_phy": "-5", // fizikai készlet
        "quantity_acc": "0", // foglalt készlet
        "date_update": "2023-12-29 11:50:59", // utolsó módosítás
        "company_id": "1", // cég azonosító
        "quantity_ord": null, // beérkező készlet
        "quantity_av": "-5", // szabad készlet
        "quantity_min": "4", // minimum mennyiség
        "weight_netto": "125.0000", // nettó súly
        "weight_brutto": "150.0000", // bruttó súly
        "company_name": "Demo Kft." // cég megnevezés
    },
    "params": null
}
*/
