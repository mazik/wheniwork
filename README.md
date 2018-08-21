# Wheniwork API Wrapper Package for Laravel

## About
This is a simple Wheniwork API wrapper package for Laravel that made a life easier to work with the Wheniwork PHP API  in Laravel.

## Requirements
- PHP v7.1.3 or higher
- Laravel v5.6 or higher

## Installation
You can install this package via Composer using the following command:
```shell
composer require mazik/wheniwork
```

This package usage Laravel Package Auto-Discovery feature and will register automatically on Laravel v5.5 or higher.

If you are not using Laravel v5.5, you'll need to register the `WheniworkServiceProvider::class` in the `config/app.php` within the `providers` array.
```php
'providers' => [
    /*
     * Package Service Providers...
     */
     
     Mazik\Wheniwork\WheniworkServiceProvider::class,
]
```

## Configuration
You can publish the configuration file by using the following command:
```shell
php artisan vendor:publish --provider="Mazik\Wheniwork\WheniworkServiceProvider" --tag="config"
```

## Documentation
- You can find all the available documentation directly on the [Wheniwork API Reference guide](http://dev.wheniwork.com).
- You can find the usage example on [Wheniwork official PHP API repository](https://github.com/dolfelt/wheniwork-api-php).

You can resolve the class instance using `make` method:
```php
app()->make(Wheniwork::class);
```

Alternatively, use dependency injection directly into the controller constructor:
```php
use Wheniwork;

public function __construct(Wheniwork $wheniwork)
{
    $this->wheniwork = $wheniwork;
}
```

## Credits
- [Md Mazedul Islam Khan](https://github.com/iamazik)

## Support Us
Mazik is a software development agency based in Dhaka, Bangladesh. We're currently focusing on open source contribution. So, any help would be appreciated.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.