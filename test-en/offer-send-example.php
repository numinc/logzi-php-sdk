<?php

require __DIR__ . '/vendor/autoload.php';

$offer_send_client = new Numinc\Logzi\Offer_send_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// hardcoded endpoint
$offer_send_save = $offer_send_client->save(array(
    "data" => array(
        "receipt_type_id" => 4, // 4 = Customer offer sending, 20 = Supplier offer sending
        "paymod_id" => 1, // payment method ID
        "shipping_id" => 1, // shipping method ID
        "company_id" => 1, // issuer company ID (always 1)
        "company_user_id" => 1, // issuer company user ID
        "company_address_id" => 1, // issuer company site (store_id)
        "date_perform" => "2026-10-08", // performance date
        "partner_id" => 1, // customer company ID
        "partner_user_id" => 1, // customer contact ID
        "partner_billing_id" => 1, // customer billing address ID
        "partner_shipping_id" => 1, // customer shipping address ID
        "currency_id" => 1, // currency ID
        "currency_exchange" => 0.00, // exchange rate (0 = base currency)
        "subject" => "", // offer subject
        "comment_top" => "", // customer comment
        "comment_bottom" => "", // internal comment
        "orderable_customer" => 1, // whether the customer can place an order online (1 = yes)
        "jobnumber_id" => "", // job number ID
        "departmentnumber_id" => "", // department number ID
        "identify_customer" => "", // customer's external ID
        "project_id" => "", // project ID

        "item" => array(
            0 => array(
                "product_id" => 2, // product/service ID
                "store_id" => 1, // store ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // tax rate ID
                "comment_top" => "", // item comment
                "price" => 150.00, // net price
                "price_sale" => 0.00, // sale price (0 = not on sale)
                "price_discount" => 0.00, // discount amount
            ),

            // shipping cost item
            1 => array(
                "product_id" => -2, // SHP10 shipping product (always -2)
                "store_id" => 1, // store ID
                "quantity" => 1, // quantity
                "tax_id" => 1, // tax rate ID
                "comment_top" => "GLS home delivery", // comment
                "price" => 150.00, // shipping fee
                "price_sale" => 0.00,
                "price_discount" => 0.00,
            ),
        ),
    )
));

print_r($offer_send_save);

// hardcoded close
$order_close = $offer_send_client->close(array(
    "data" => array(
        "receipt_id" => 0, // receipt ID (following the example above, $offer_send_save->data->id)
    )
));

print_r($order_close);
