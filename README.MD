# Fa-Laravel

Laravel component for FontAwesome integration with blade

> **NOTE** : This package is to be used with Laravel version 8

* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Contact](#contact)
* [License and Copyright](#License and Copyright)

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
    <x-fa icon="close" class="text-danger" style="font-weight: bold;" title="Ciclk here to close" />
```

## Contact

Please use [GitLab](https://gitlab.com/Regnilk/fa-laravel) for making comments or suggestions or to report bugs.

## License and Copyright

[Fa-Laravel](https://gitlab.com/Regnilk/fa-laravel) written by Regnilk and is released under the [MIT License](LICENSE.md).

Copyright &copy; 2020 Regnilk