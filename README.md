## Installation

```bash
composer require rish-0593/testing
```

Manually add the service provider in your config/app.php file:

```php
'providers' => [
    // ...
    Rish0593\Testing\TestingServiceProvider::class,
]
```

Run the migration:

```bash
php artisan migrate
```

To publish the config, run the vendor publish command:

```bash
php artisan vendor:publish --provider="Rish0593\Testing\TestingServiceProvider" --tag=config
```

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
