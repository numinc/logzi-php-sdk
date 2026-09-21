<?php

require __DIR__ . '/vendor/autoload.php';

$product_client = new Numinc\Logzi\Product_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// query full product list
$product_list = $product_client->get_list();
print_r($product_list);

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
            "id": "2", // unique ID
            "type_id": "1", // product type ID (1 = product, 2 = service, 3 = manufactured)
            "chk": "abf381d312924e73a5468b4688c603ff",  // checksum
            "partnumber": "CERUZA01", // part number
            "price_trigger": null, // being phased out
            "price_trigger_value": null, // being phased out
            "quantity_min": "5", // minimum quantity
            "quantity_opt": "10", // optimal quantity
            "quantity_max": "15", // maximum quantity
            "weight_netto": "5.0000", // net weight
            "weight_brutto": "7.0000", // gross weight
            "warranty_month": "0", // warranty months
            "remove": "0", // deleted
            "shipping_id": "3", // shipping ID
            "date_create": "2020-11-23 13:26:39", // creation date
            "date_update": "2024-01-11 14:00:02", // last modified date
            "product_group_id": "2", // product group ID
            "company_user_id": "1", // last modifying employee ID
            "company_user_name": "system", // last modifying employee name
            "company_user_telephone": "", // last modifying employee phone number
            "partner_id": null, // manufacturer ID
            "partner_company_name": null, // manufacturer company name
            "partner_taxcode": null, // manufacturer tax number
            "unnumber_id": null, // UN number ID
            "unnumber_name": null, // UN number name
            "category_id": "5", // category
            "name": "Ceruza", // product name
            "vtsz": "sdfsdf", // VTSZ number
            "description": "", // short description
            "meta_title": "", // meta title
            "meta_keyword": "", // meta keyword
            "meta_description": "", // meta description
            "type_name": "Termék", // product type name
            "category_name": "Irodai kellék", // category name
            "product_item_id": "1", // packaging ID
            "product_unit_id": "1", // packaging quantity unit ID
            "product_unit_value": "1.00", // packaging value
            "product_unit_name_sub": "1.00 darab", // packaging short name
            "product_unit_name": "Ceruza 1.00 darab", // packaging long name
            "num_rows": "175" // being phased out
        },
        {
            // ...
        },
    ],
    "params": {
        "list_count": 10,
        "list_offset": 0,
        "list_all": 175
    }
}
*/

// query a single product
$product_get = $product_client->get(array(
    "partnumber" => "CERUZA01",
));
print_r($product_get);

/*
{
    "language": "HU",
    "api_key": "direct",
    "result": {
        "code": 1,
        "message": null
    },
    "data": {
        "id": "2", // ID
        "product_id": "2", // ID
        "product_group_id": "2", // product group ID
        "product_item_id": "1", // product packaging ID
        "product_manufact_id": null, // ID for manufactured products
        "date_create": "2024-01-11 14:00:02", // creation date
        "company_id": "1", // created by company ID
        "company_name": null, // created by company name
        "company_user_id": "1", // created by employee ID
        "company_user_name": null, // created by employee name
        "type_id": "1", // product type ID
        "type_name": "Termék", // product type name
        "partner_id": null, // manufacturer ID
        "partner_company_name": null, // manufacturer company name
        "unnumber_id": null, // UN number ID
        "unnumber_name": null, // UN number name
        "category_id": "5", // category ID
        "category_name": "Irodai kellék", // category name
        "name": "Ceruza", // product name
        "vtsz": "sdfsdf", // VTSZ number
        "description": "", // short description
        "meta_title": "", // meta title
        "meta_keyword": "", // meta keywords
        "meta_description": "", // meta description
        "shipping_id": "3", // shipping ID
        "shipping_name": null, // shipping name
        "partnumber": "CERUZA01", // part number
        "quantity_min": "5", // minimum quantity
        "quantity_opt": "10", // optimal quantity
        "quantity_max": "15", // maximum quantity
        "weight_netto": "5.0000", // net weight
        "weight_brutto": "7.0000", // gross weight
        "warranty_month": "0", // warranty months 
        "product_unit_id": "1", // product packaging ID
        "product_unit_name_short": "db", // product packaging quantity unit
        "product_unit_name": "Ceruza 1.00 darab", // product packaging name
        "product_unit_value": "1.00", // product packaging value
        "product_unit_name_sub": "1.00 darab", // product packaging short name
        "serialnumber_required": "0", // unit identifier required (0 = no, 1 = serial number, 2 = lot, 3 = lot + expiry date)
        "product_url": "", // product URL (freely settable)
        "stockable": "1", // manages stock
        "synchronizable": "1", // included in sync
        "default_store_id": "10", // default store
        "default_store_locality_id": "12", // default location code
        "price": "500.00", // sales price
        "currency_id": "1", // sales currency
        "tax_id": null, // sales tax rate
        "incoming_price": "500.00", // purchase price
        "incoming_currency_id": "1", // purchase currency
        "incoming_tax_id": "4" // purchase tax rate
    },
    "params": null
}
*/

// variable product
$product_save = $product_client->save(array(
    "data" => array(
        "type_id" => "1",
        "name" => "PRODUCT NAME TEST 01",
        "vtsz" => "",
        "item" => array(
            array(
                "product_unit_id" => 1,
                "partnumber" => "PRODUCTPNTEST01",
                "remove" => 0,
                "product_unit_value" => 1,
                "price" => 1234,
                "currency_id" => 1,
                "tax_id" => 1,
                "incoming_price" => 900,
                "incoming_currency_id" => 1,
                "incoming_tax_id" => 1,
                "quantity_min" => 1,
                "weight_netto" => 0.5,
                "description" => "Item leírás",
            ),
        ),
    ),
));

print_r($product_save);

// service
$product_save = $product_client->save(array(
    "data" => array(
        "type_id" => "2",
        "name" => "SZOLGÁLTATÁS TEST 01",
        "vtsz" => "",
        "partnumber" => "SERVICETEST01",
        "product_unit_id" => 1,
        "price" => 5000,
        "currency_id" => 1,
        "tax_id" => 1,
        "service_intermediate" => 0,
    ),
));

print_r($product_save);

// manufactured product
$product_save = $product_client->save(array(
    "data" => array(
        "type_id" => "3",
        "name" => "GYÁRTÁSOS TERMÉK TEST 01",
        "vtsz" => "",
        "partnumber" => "MANUFACTTEST01",
        "product_unit_id" => 1,
        "price" => 9990,
        "currency_id" => 1,
        "tax_id" => 1,
        // BOM items - component products and their quantities
        "manufact" => array(
            array(
                "product_id" => 123,      // ID of an already existing component product
                "product_quantity" => 2,
                "remove" => 0,
            ),
            array(
                "product_id" => 124,
                "product_quantity" => 1,
                "remove" => 0,
            ),
        ),
    ),
));

print_r($product_save);

// virtual product - ticket
$product_save = $product_client->save(array(
    "data" => array(
        "type_id" => "4",
        "name" => "BELÉPŐJEGY TEST 01",
        "vtsz" => "",
        "partnumber" => "TICKETTEST01",
        "product_unit_id" => 1,
        "price" => 3500,
        "currency_id" => 1,
        "tax_id" => 1,

        // ticket-specific fields at the product_group level (optional):
        "ticket_type_id" => 1,
        "ticket_visitor_group_id" => 1,
        "ticket_age_group_id" => 1,
    ),
));

print_r($product_save);

// recipe-based product
$product_save = $product_client->save(array(
    "data" => array(
        "type_id" => "5",
        "name" => "RECEPTÚRÁS TERMÉK TEST 01",
        "vtsz" => "",
        "partnumber" => "RECIPETEST01",
        "product_unit_id" => 1,
        "price" => 2490,
        "currency_id" => 1,
        "tax_id" => 1,
        "manufact" => array(
            array(
                "product_id" => 125,
                "product_quantity" => 0.5,
                "remove" => 0,
            ),
            array(
                "product_id" => 126,
                "product_quantity" => 1,
                "remove" => 0,
            ),
        ),
    ),
));

print_r($product_save);

// simple product
$product_save = $product_client->save(array(
    "data" => array(
        "type_id" => "6",
        "name" => "PRODUCT NAME TEST 01",
        "vtsz" => "",
        "partnumber" => "PRODUCTPNTEST02",
        "product_unit_id" => 1,
        "price" => 1234,
        "currency_id" => 1,
        "tax_id" => 1,
        "quantity_min" => 1,
        "weight_netto" => 0.8,
    ),
));

print_r($product_save);
