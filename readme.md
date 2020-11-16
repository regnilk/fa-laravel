# Fa-Laravel

Laravel component for FontAwesome integration with Blade

[![Name](https://badgen.net/packagist/name/regnilk/fa-laravel?color=blue)](https://packagist.org/packages/regnilk/fa-laravel)
[![Latest stable release](https://badgen.net/packagist/v/regnilk/fa-laravel?color=cyan)](https://packagist.org/packages/regnilk/fa-laravel)
[![Name](https://badgen.net/github/last-commit/regnilk/fa-laravel?color=green)](https://github.com/regnilk/fa-laravel)

[![Total Download](https://badgen.net/packagist/dt/regnilk/fa-laravel?color=green)](https://github.com/regnilk/fa-laravel)
[![GitHub Watchers](https://badgen.net/packagist/ghw/regnilk/fa-laravel?color=blue)](https://github.com/regnilk/fa-laravel)
[![GitHub Stars](https://badgen.net/packagist/ghs/regnilk/fa-laravel?color=yellow)](https://github.com/regnilk/fa-laravel)
[![GitHub Followers](https://badgen.net/packagist/ghf/regnilk/fa-laravel?color=cyan)](https://github.com/regnilk/fa-laravel)

[![License](https://badgen.net/packagist/license/regnilk/fa-laravel)]()
[![php](https://badgen.net/packagist/php/regnilk/fa-laravel?color=orange)]()
[![php](https://badgen.net/badge/Laravel/&gt;&equals;8.0?color=orange)]()


> **Note** : This package is to be used with Laravel version 8

* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Contact](#contact)
* [License](#license)
* [Copyright](#copyright)

## Installation

Install the package via Composer:

```sh
    $ composer require regnilk/fa-laravel
```
    
The package service provider will be registered automatically.

## Configuration

You need to publish the configuration file to set the icons you need

```php    
    php artisan vendor:publish --provider="Regnilk\FaLaravel\FaServiceProvider"
```
    
Then edit the array returned in app/config/fa.php this way :

```php
    return [
        "ok"    => "fas fa-check",
        "close" => "fas fa-times"
    ];
```

It will provide you a dictionary of icons shortcuts.

## Usage

To display an icon, just call it this way : 

```html
    <x-fa icon="ok" />
```
    
You can customize this component like any other : 

```html
    <x-fa icon="close" class="text-danger" style="font-weight: bold;" title="Click here to close" />
```

## Contact

Please use [GitHub](https://github.com/regnilk/fa-laravel) for making comments or suggestions or to report bugs.

## License

[Fa-Laravel](https://github.com/regnilk/fa-laravel) written by Regnilk and is released under the [MIT License](LICENSE).

## Copyright

Copyright &copy; 2020 Regnilk