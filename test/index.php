<?php

require __DIR__ . '/vendor/autoload.php';

$booking_client = new Numinc\Logzi\Booking_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$booking_list = $booking_client->get_list(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));
print_r($booking_list);