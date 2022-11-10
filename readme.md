# Shicontstand

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. 
Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
composer require laymont/shicontstand
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="shicontstand-config"
```

This is the contents of the published config file:

>***you can alter tables name before run migrations., in tables section of next array***

```php
<?php
return [
    /**
     * The equipment category identifier consists of one of the following capital letters of the Latin alphabet
     */
    'equipment_category_identifier' => [
        ['u' => 'for all freight containers'],
        ['J' => 'for detachable freight container-related equipment'],
        ['Z' => 'for trailers and chassis'],
    ],

    /**
     * An equivalent numerical value is assigned to each letter of the alphabet,
     * beginning with 10 for the letter A (11 and multiples thereof are omitted)
     */
    'calculation_step_one' => [
        ['character' => 'A', 'value' => 10],
        ['character' => 'B', 'value' => 12],
        ['character' => 'C', 'value' => 13],
        ['character' => 'D', 'value' => 14],
        ['character' => 'E', 'value' => 15],
        ['character' => 'F', 'value' => 16],
        ['character' => 'G', 'value' => 17],
        ['character' => 'H', 'value' => 18],
        ['character' => 'I', 'value' => 19],
        ['character' => 'J', 'value' => 20],
        ['character' => 'K', 'value' => 21],
        ['character' => 'L', 'value' => 23],
        ['character' => 'M', 'value' => 24],
        ['character' => 'N', 'value' => 25],
        ['character' => 'O', 'value' => 26],
        ['character' => 'P', 'value' => 27],
        ['character' => 'Q', 'value' => 28],
        ['character' => 'R', 'value' => 29],
        ['character' => 'S', 'value' => 30],
        ['character' => 'T', 'value' => 31],
        ['character' => 'U', 'value' => 32],
        ['character' => 'V', 'value' => 34],
        ['character' => 'W', 'value' => 35],
        ['character' => 'X', 'value' => 36],
        ['character' => 'Y', 'value' => 37],
        ['character' => 'Z', 'value' => 38],
    ],

    /**
     * Each of the numbers calculated in step 1 is multiplied by 2position, where position is the exponent to base 2.
     * Position starts at 0, from left to right.
     * The following table shows the multiplication factors
     */
    'calculation_step_two' => [1, 2, 4, 8, 16, 32, 64, 128, 256, 512],

    /**
     * table names
     */
    'tables' => [
        'type_groups' => 'scs_type_groups',
        'size_types' => 'scs_size_types',
        'length_codes' => 'scs_length_codes',
        'size_codes' => 'scs_size_codes',
        'type_codes' => 'scs_type_codes',
    ],

    /**
     * Container Model name
     */
    'model' => [
        'name' => 'containers',
        'property' => 'number',
    ],

    /**
     * Route Configuration
     */
    'prefix' => 'scs',
    'middleware' => ['web'],
];
?>
```

You can publish and run the migrations with:
``` bash
php artisan vendor:publis --tag="shicontstand-migrations"
```

Publish Seeders after migrations done
``` bash
php artisan vendor:publis --tag="shicontstand-seeders"
```

Run seeders
``` bash
php artisan db:seed --class=ShicontstandSeeder
```

It is recommended to update the routes
```
php artisan route:cache
``` 

## Usage


```php
$shicontstand = new Laymont\Shicontstand();
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author@email.com instead of using the issue tracker.

## Credits

- [Laymont Arratia][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/laymont/shicontstand.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/laymont/shicontstand.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/laymont/shicontstand/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/laymont/shicontstand
[link-downloads]: https://packagist.org/packages/laymont/shicontstand
[link-travis]: https://travis-ci.org/laymont/shicontstand
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/laymont
[link-contributors]: ../../contributors
