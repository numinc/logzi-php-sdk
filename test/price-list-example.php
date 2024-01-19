<?php

require __DIR__ . '/vendor/autoload.php';

$price_list_client = new Numinc\Logzi\Price_list_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// product_category_id -ra szűrve visszaadja a termékek árait
$price_list_list = $price_list_client->get_list(array(
    "list_condition" => array(
        "product_category_id" => 2
    )
));
print_r($price_list_list);

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
            "id": "2084", // termék azonosító
            "product_id": "2084", // termék azonosító
            "type_id": "1", // termék típus azonosító
            "type_name": "Termék", // termék típus név
            "partnumber": "111112", // termék cikkszám
            "quantity_min": null, // minimális mennyiség
            "quantity_max": null, // maximális mennyiség
            "quantity_opt": "5", // optimális mennyiség
            "product_group_id": "2077", // termék csoport azonosító
            "category_id": "2", // termék kategória azonosító
            "category_name": "Építési anyag", // termék kategória név
            "product_item_id": "2080", // termék kiszerelés azonosító
            "product_unit_id": "1", // kiszerelés mennyiségi egység azonosító
            "product_unit_value": "1.00", // kiszerelés mennyiségi érték
            "product_unit_name": "Építési anyag 1.00 darab", // kiszerelés megnevezés
            "warranty_month": "0", // garancia hónap
            "shipping_id": null, // szállítási azonosító
            "price_list_id": "2081", // ár lista azonosító
            "company_id": "1", // cég azonosító
            "price_date_create": "2023-04-18 13:35:17", // ár lista létrehozása
            "price": "500.00", // eladási ár
            "currency_id": "1", // eladási deviza
            "currency_sign": "Ft", // eladási deviza jel
            "tax_id": "4", // eladási adókulcs azonosító
            "tax_name": "27%",  // eladási adókulcs megnevezés
            "incoming_price": "100.00", // beszerzési ár
            "incoming_currency_id": "1", // beszerzési deviza azonosító
            "incoming_currency_sign": "Ft", // beszerzési deviza jel
            "incoming_tax_id": "4", // beszerzési adókulcs azonosító
            "incoming_tax_name": "27%", // beszerzési adókulcs megnevezés
            "last_incoming_date_create": "2024-01-05 10:34:32", // utolsó beszerzés détuma
            "last_incoming_price": null, // utolsó beszerzési ár
            "last_incoming_currency_id": null, // utolsó beszerzési deviza azonosító
            "last_incoming_currency_sign": null, // utolsó beszerzési deviza jel
            "last_incoming_tax_id": null, // utolsó beszerzési adókulcs azonosító
            "last_incoming_tax_name": null, // utolsó beszerzési adókulcs megnevezés
            "last_outgoing_date_create": "2024-01-05 10:34:32", // utolsó eladás dátuma
            "last_outgoing_price": null, // utolsó eladás ár
            "last_outgoing_currency_id": null, // utolsó eladás deviza azonosító
            "last_outgoing_currency_sign": null, // utolsó eladás deviza jel
            "last_outgoing_tax_id": null, // utolsó eladás adókulcs azonosító
            "last_outgoing_tax_name": null, // utolsó eladás adókulcs megnevezés
            "price_margin_percent": "400.000000", // eladási és beszerzési ár különbsége százalékban (haszonkulcs)
            "quantity_acc": null, // foglalt készet
            "quantity_phy": null // fizikai készlet
        },
        {
            ...
        }
    ],
    "params": {
        "list_count": 10,
        "list_offset": 0,
        "list_all": 3
    }
}
*/

// 2-es product_id-val visszaadja a termék árait
$price_list_get = $price_list_client->get(array(
    "product_id" => 2,
    "company_id" => 2,
));
print_r($price_list_get);

/*
{
    "language":"HU",
    "api_key":"direct",
    "result":{
        "code":1,
        "message":null
    },
    "data":{
        "id":"2", // termék azonosító
        "product_id":"2", // termék azonosító
        "type_id":"1", // termék típus azonosító
        "type_name":"Termék", // termék típus név
        "partnumber":"CERUZA01", // termék cikkszám
        "quantity_min":"5", // minimális mennyiség
        "quantity_max":"15", // maximális mennyiség
        "quantity_opt":"10", // optimális mennyiség
        "product_group_id":"2", // termék csoport azonosító
        "category_id":"5", // termék kategória azonosító
        "category_name":"Irodai kellék", // termék kategória név
        "product_item_id":"1", // termék kiszerelés azonosító
        "product_unit_id":"1", // kiszerelés mennyiségi egység azonosító
        "product_unit_value":"1.00", // kiszerelés mennyiségi érték
        "product_unit_name":"Ceruza 1.00 darab", // kiszerelés megnevezés
        "company_id":"1", // cég azonosító
        "price_date_create":"2020-11-23 13:26:39", // ár lista létrehozása
        "price":"500.00", // eladási ár
        "currency_id":"1", // eladási deviza
        "currency_sign":"Ft", // eladási deviza jel
        "tax_id":null, // eladási adókulcs azonosító
        "tax_name":null, // eladási adókulcs megnevezés
        "tax_percent":null, // eladási adókulcs százalék
        "incoming_price":"500.00", // beszerzési ár
        "incoming_currency_id":"1", // beszerzési deviza azonosító
        "incoming_currency_sign":"Ft", // beszerzési deviza jel
        "incoming_tax_id":"4", // beszerzési adókulcs azonosító
        "incoming_tax_name":"27%", // beszerzési adókulcs megnevezés
        "incoming_tax_percent":"1.27", // beszerzési adókulcs százalék
        "last_incoming_date_create":"2024-01-18 11:04:16", // utolsó beszerzés détuma
        "last_incoming_price":"500.00", // utolsó beszerzési ár
        "last_incoming_currency_id":"1", // utolsó beszerzési deviza azonosító
        "last_incoming_currency_sign":"Ft", // utolsó beszerzési deviza jel
        "last_incoming_tax_id":"4", // utolsó beszerzési adókulcs azonosító
        "last_incoming_tax_name":"27%", // utolsó beszerzési adókulcs megnevezés
        "last_incoming_tax_percent":"1.27", // utolsó beszerzési adókulcs százalék
        "last_outgoing_date_create":"2024-01-18 11:04:16", // utolsó eladás dátuma
        "last_outgoing_price":"500.00", // utolsó eladás ár
        "last_outgoing_currency_id":"1", // utolsó eladás deviza azonosító
        "last_outgoing_currency_sign":"Ft", // utolsó eladás deviza jel
        "last_outgoing_tax_id":null, // utolsó eladás adókulcs azonosító
        "last_outgoing_tax_name":null, // utolsó eladás adókulcs megnevezés
        "last_outgoing_tax_percent":null, // utolsó eladás adókulcs százalék
        "quantity_acc":"978", // foglalt készet
        "quantity_av":"20107", // szabad készet
        "quantity_ord":"10", // beérkező készlet
        "quantity_phy":"21085", // fizikai készlet
        "price_list_exchange":[ // kalkulált/számolt árlista egyéb devizákban
            {
                "cr_name_short":"HUF",
                "cr_sign":"Ft",
                "outgoing_price":"500.00",
                "incoming_price":"500.00",
                "outgoing_exchange_rate":"0.00",
                "incoming_exchange_rate":"0.00"
            },
            {
                ...
            }
        ],
        "product_feed_list":[ // integrált kapcsolód termék feed
            ...
        ],
        "contract_list":[ // megállapodások a termékre vonatkozóan
            {
                "contract_id":"1", // megállapodás azonosító
                "quantity":"1", // sávos darabszám
                "price":"10.00", // sávos ár
                "currency_sign":"Ft", // deviza jel
                "comment_top":"", // megjegyzés
                "partner_company_name":"Minta Kft.", // megállapodás cégnév
                "identify":"SZERZ000001\/2021" // megállapodás azonosító
            },
            {
                ...
            }
        ]
    },
    "params":null
}
*/
