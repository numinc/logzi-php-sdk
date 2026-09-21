<?php

require __DIR__ . '/vendor/autoload.php';

$price_list_client = new Numinc\Logzi\Price_list_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// filtered by product_category_id, returns the products' prices
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
            "id": "2084", // product ID
            "product_id": "2084", // product ID
            "type_id": "1", // product type ID
            "type_name": "Termék", // product type name
            "partnumber": "111112", // product part number
            "quantity_min": null, // minimum quantity
            "quantity_max": null, // maximum quantity
            "quantity_opt": "5", // optimal quantity
            "product_group_id": "2077", // product group ID
            "category_id": "2", // product category ID
            "category_name": "Építési anyag", // product category name
            "product_item_id": "2080", // product packaging ID
            "product_unit_id": "1", // packaging quantity unit ID
            "product_unit_value": "1.00", // packaging quantity value
            "product_unit_name": "Építési anyag 1.00 darab", // packaging name
            "warranty_month": "0", // warranty months
            "shipping_id": null, // shipping ID
            "price_list_id": "2081", // price list ID
            "company_id": "1", // company ID
            "price_date_create": "2023-04-18 13:35:17", // price list creation date
            "price": "500.00", // sales price
            "currency_id": "1", // sales currency
            "currency_sign": "Ft", // sales currency sign
            "tax_id": "4", // sales tax rate ID
            "tax_name": "27%",  // sales tax rate name
            "incoming_price": "100.00", // purchase price
            "incoming_currency_id": "1", // purchase currency ID
            "incoming_currency_sign": "Ft", // purchase currency sign
            "incoming_tax_id": "4", // purchase tax rate ID
            "incoming_tax_name": "27%", // purchase tax rate name
            "last_incoming_date_create": "2024-01-05 10:34:32", // last purchase date
            "last_incoming_price": null, // last purchase price
            "last_incoming_currency_id": null, // last purchase currency ID
            "last_incoming_currency_sign": null, // last purchase currency sign
            "last_incoming_tax_id": null, // last purchase tax rate ID
            "last_incoming_tax_name": null, // last purchase tax rate name
            "last_outgoing_date_create": "2024-01-05 10:34:32", // last sale date
            "last_outgoing_price": null, // last sale price
            "last_outgoing_currency_id": null, // last sale currency ID
            "last_outgoing_currency_sign": null, // last sale currency sign
            "last_outgoing_tax_id": null, // last sale tax rate ID
            "last_outgoing_tax_name": null, // last sale tax rate name
            "price_margin_percent": "400.000000", // difference between sales and purchase price in percent (margin)
            "quantity_acc": null, // reserved stock
            "quantity_phy": null // physical stock
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

// returns the product's prices for product_id 2
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
        "id":"2", // product ID
        "product_id":"2", // product ID
        "type_id":"1", // product type ID
        "type_name":"Termék", // product type name
        "partnumber":"CERUZA01", // product part number
        "quantity_min":"5", // minimum quantity
        "quantity_max":"15", // maximum quantity
        "quantity_opt":"10", // optimal quantity
        "product_group_id":"2", // product group ID
        "category_id":"5", // product category ID
        "category_name":"Irodai kellék", // product category name
        "product_item_id":"1", // product packaging ID
        "product_unit_id":"1", // packaging quantity unit ID
        "product_unit_value":"1.00", // packaging quantity value
        "product_unit_name":"Ceruza 1.00 darab", // packaging name
        "company_id":"1", // company ID
        "price_date_create":"2020-11-23 13:26:39", // price list creation date
        "price":"500.00", // sales price
        "currency_id":"1", // sales currency
        "currency_sign":"Ft", // sales currency sign
        "tax_id":null, // sales tax rate ID
        "tax_name":null, // sales tax rate name
        "tax_percent":null, // sales tax rate percent
        "incoming_price":"500.00", // purchase price
        "incoming_currency_id":"1", // purchase currency ID
        "incoming_currency_sign":"Ft", // purchase currency sign
        "incoming_tax_id":"4", // purchase tax rate ID
        "incoming_tax_name":"27%", // purchase tax rate name
        "incoming_tax_percent":"1.27", // purchase tax rate percent
        "last_incoming_date_create":"2024-01-18 11:04:16", // last purchase date
        "last_incoming_price":"500.00", // last purchase price
        "last_incoming_currency_id":"1", // last purchase currency ID
        "last_incoming_currency_sign":"Ft", // last purchase currency sign
        "last_incoming_tax_id":"4", // last purchase tax rate ID
        "last_incoming_tax_name":"27%", // last purchase tax rate name
        "last_incoming_tax_percent":"1.27", // last purchase tax rate percent
        "last_outgoing_date_create":"2024-01-18 11:04:16", // last sale date
        "last_outgoing_price":"500.00", // last sale price
        "last_outgoing_currency_id":"1", // last sale currency ID
        "last_outgoing_currency_sign":"Ft", // last sale currency sign
        "last_outgoing_tax_id":null, // last sale tax rate ID
        "last_outgoing_tax_name":null, // last sale tax rate name
        "last_outgoing_tax_percent":null, // last sale tax rate percent
        "quantity_acc":"978", // reserved stock
        "quantity_av":"20107", // available stock
        "quantity_ord":"10", // incoming stock
        "quantity_phy":"21085", // physical stock
        "price_list_exchange":[ // calculated price list in other currencies
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
        "product_feed_list":[ // integrated connected product feed
            ...
        ],
        "contract_list":[ // agreements related to the product
            {
                "contract_id":"1", // agreement ID
                "quantity":"1", // tiered quantity
                "price":"10.00", // tiered price
                "currency_sign":"Ft", // currency sign
                "comment_top":"", // comment
                "partner_company_name":"Minta Kft.", // agreement company name
                "identify":"SZERZ000001\/2021" // agreement identifier
            },
            {
                ...
            }
        ]
    },
    "params":null
}
*/
