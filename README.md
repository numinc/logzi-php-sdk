# billzon-php-sdk

billzon-php-sdk is a PHP library for [billzon ERP](https://www.billzon.com/).

## Usage

```php
require 'sdk/Base_api_model.php';
require 'sdk/Booking_model.php';

$booking_client = new Booking_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$booking_list = $booking_client->get_list(array(
	"list_offset" => 0,
	"list_condition" => array(
		// conditions
	),
));
print_r($booking_list);
```

Please find the API endpoints [here](https://www.billzon.com/help-center/dokumentacio).

## Contributing

For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## FAQ
[Terms and Conditions](https://www.billzon.com/dokumentum/aszf)

[Privacy Policies](https://www.numinc.com/dokumentum/adatvedelem)