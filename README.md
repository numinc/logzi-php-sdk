# logzi-php-sdk

logzi-php-sdk is a PHP library for [logzi ERP](https://www.logzi.com/).


## Install

```php
composer require numinc/logzi-php-sdk:dev-master
```

## Usage

```php
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
```

Please find the API endpoints [here](https://www.logzi.com/help-center/dokumentacio).

## Contributing

For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## FAQ
[Terms and Conditions](https://www.logzi.com/dokumentum/aszf)

[Privacy Policies](https://www.numinc.com/dokumentum/adatvedelem)
