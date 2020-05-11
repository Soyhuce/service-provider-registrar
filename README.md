# Service provider registrar

![Release](https://img.shields.io/badge/Release-0.3.0-blue.svg)

## Objectives

This package allows to load other service providers based on current environment

## Installation

You can install the package via composer:
 
 `composer require soyhuce/service-provider-registrar`

Make a ServiceProvider which extend `Soyhuce\ServiceProviderRegistrar\ServiceProvider` :

```php
namespace App\Providers;

use Soyhuce\ServiceProviderRegistrar\ServiceProvider;

class RegistrationServiceProvider extends ServiceProvider
{
    
}
```

Don't forget to add this ServiceProvider to your `config/app.php` file! 

For each environment you wish, you have to define which service provider you want to use:

```php
class RegistrationServiceProvider extends ServiceProvider
{
    public $local = [
        \Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class
    ];
}
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
