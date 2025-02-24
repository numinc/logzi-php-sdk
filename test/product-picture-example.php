<?php

require __DIR__ . '/vendor/autoload.php';

$product_picture_client = new Numinc\Logzi\Product_picture_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));


$product_picture_item = $product_picture_client->get(array(
    // "id" => 0,
    // "product_id" => 0,
    // "product_group_id" => 0,
    "product_partnumber" => "PARTNUMBER",
));
print_r($product_picture_item);

/* 
{
   "language":"HU",
   "api_key":"direct",
   "result":{
      "code":1,
      "message":null
   },
   "data":{
      "id":"1",
      "remove":"0",
      "pic_source":"BASE64_ENCODED_STRING",
      "pic_name":"PARTNUMBER",
      "product_group_id":"1",
      "pic_sort":"0",
      "date_update":"2025-02-11 00:58:33"
   },
   "params":null
}
*/

$product_picture_list = $product_picture_client->get_list(array(
    "list_condition" => array(
        // "product_group_id" => 0,
        "product_partnumber" => "PARTNUMBER",
    ),
));
print_r($product_picture_list);

/* 
{
   "language":"HU",
   "api_key":"direct",
   "result":{
      "code":1,
      "message":null
   },
   "data":[{
      "id":"1",
      "remove":"0",
      "pic_source":"BASE64_ENCODED_STRING",
      "pic_name":"PARTNUMBER",
      "product_group_id":"1",
      "pic_sort":"0",
      "date_update":"2025-02-11 00:58:33"
    }],
   "params":null
}
*/