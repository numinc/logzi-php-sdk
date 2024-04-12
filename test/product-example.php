<?php

require __DIR__ . '/vendor/autoload.php';

$product_client = new Numinc\Logzi\Product_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// teljes termék lista lekérdezése
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
            "id": "2", // egyedi azonosító
            "type_id": "1", // termék típus azonosító (1 = termék, 2 = szolgáltatás, 3 = gyártásos)
            "chk": "abf381d312924e73a5468b4688c603ff",  // checksum
            "partnumber": "CERUZA01", // cikkszám
            "price_trigger": null, // kivezetes alatt
            "price_trigger_value": null, // kivezetes alatt
            "quantity_min": "5", // minimum mennyiség
            "quantity_opt": "10", // optimális mennyiség
            "quantity_max": "15", // maximális mennyiség
            "weight_netto": "5.0000", // nettó súly
            "weight_brutto": "7.0000", // bruttó súly
            "warranty_month": "0", // garancia hónap
            "remove": "0", // törölve
            "shipping_id": "3", // szállítási azonosító
            "date_create": "2020-11-23 13:26:39", // beilleszve dátum
            "date_update": "2024-01-11 14:00:02", // utoljára módosítva dátum
            "product_group_id": "2", // termék csoport azonosító
            "company_user_id": "1", // utolsó módosító munkatárs azonosító
            "company_user_name": "system", // utolsó módosító munkatárs név
            "company_user_telephone": "", // utolsó módosító munkatárs telefonszám
            "partner_id": null, // gyártó azonosító
            "partner_company_name": null, // gyártó cég név
            "partner_taxcode": null, // gyártó adószám
            "unnumber_id": null, // un szám azonosító
            "unnumber_name": null, // un szám megnevezés
            "category_id": "5", // kategória
            "name": "Ceruza", // termék megnevezés
            "vtsz": "sdfsdf", // vtsz szám
            "description": "", // rövid leírás
            "meta_title": "", // meta cím
            "meta_keyword": "", // meta kulcs
            "meta_description": "", // meta leírás
            "type_name": "Termék", // termék típus megnevezés
            "category_name": "Irodai kellék", // kategória megnevezés
            "product_item_id": "1", // kiszerelés azonosító
            "product_unit_id": "1", // kiszerelés mennyiségi egység azonosító
            "product_unit_value": "1.00", // kiszerelés érték
            "product_unit_name_sub": "1.00 darab", // kiszerelés rövid megnevezés
            "product_unit_name": "Ceruza 1.00 darab", // kiszerelés hosszú megnevezés
            "num_rows": "175" // kivezetés alatt
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

// egy termék lekérdezése
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
        "id": "2", // azonosító
        "product_id": "2", // azonosító
        "product_group_id": "2", // termék csoport azonosító
        "product_item_id": "1", // termék kiszerelés azonosító
        "product_manufact_id": null, // gyártásos termék esetén azonosító
        "date_create": "2024-01-11 14:00:02", // létrehozás dátuma
        "company_id": "1", // létrehozva cég azonosító
        "company_name": null, // létrehozva cég név
        "company_user_id": "1", // létrehozva munkatárs azonosító
        "company_user_name": null, // létrehozva munkatárs név
        "type_id": "1", // termék típus azonosító
        "type_name": "Termék", // termék típus megnevezés
        "partner_id": null, // gyártó azonosító
        "partner_company_name": null, // gyártó cégnév
        "unnumber_id": null, // un szám azonosító
        "unnumber_name": null, // un szám megnevezés
        "category_id": "5", // kategória azonosító
        "category_name": "Irodai kellék", // kategória név
        "name": "Ceruza", // termék név
        "vtsz": "sdfsdf", // vtsz
        "description": "", // rövid leírás
        "meta_title": "", // meta cím
        "meta_keyword": "", // meta kulcsszavak
        "meta_description": "", // meta leírás
        "shipping_id": "3", // szállítás azonosító
        "shipping_name": null, // szállítás megnevezés
        "partnumber": "CERUZA01", // cikkszám
        "quantity_min": "5", // minimális mennyiség
        "quantity_opt": "10", // optimális mennyiség
        "quantity_max": "15", // maximális mennyiség
        "weight_netto": "5.0000", // nettó súly
        "weight_brutto": "7.0000", // bruttó súly
        "warranty_month": "0", // garancia hónap 
        "product_unit_id": "1", // termék kiszerelés azonosító
        "product_unit_name_short": "db", // termék kiszerelés mennyiségi egység
        "product_unit_name": "Ceruza 1.00 darab", // termék kiszerelés megnevezés
        "product_unit_value": "1.00", // termék kiszerelés érték
        "product_unit_name_sub": "1.00 darab", // termék kiszerelés rövid megnevezés
        "serialnumber_required": "0", // egyedszám köteles (0 = nem, 1 = szériaszám, 2 = lot, 3 = lot + lejárati dátum)
        "product_url": "", // termék url (szabadon állítható)
        "stockable": "1", // készletet kezel
        "synchronizable": "1", // szinkronban szerepel
        "default_store_id": "10", // alapértelmezett telephely
        "default_store_locality_id": "12", // alapértelmezett helykód
        "price": "500.00", // eladási ár
        "currency_id": "1", // eladási deviza
        "tax_id": null, // eladási adókulcs
        "incoming_price": "500.00", // beszerzési ár
        "incoming_currency_id": "1", // beszerzési deviza
        "incoming_tax_id": "4" // beszerzési adókulcs
    },
    "params": null
}
*/

// termék rögzítés
$product_save = $product_client->save(array(
    "data" => array(
		"type_id" => "1",
		"name" => "PRODUCT NAME TEST 01",
		"vtsz" => "",
		"item" => array(
			array(
				"unit_id" => 1,
				"partnumber" => "PRODUCTPNTEST01",
				"remove" => 0,
				"unit_value" => 1,
				"price" => 1234,
				"currency_id" => 1,
			),
		),
	),
));

print_r($product_save);
