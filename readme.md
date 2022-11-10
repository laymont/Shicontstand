# Shicontstand

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

The purpose of this package is to implement the ISO 6346 standard, which covers the coding, 
identification and marking of containers, used in intermodal freight transport.
The standard establishes a visual identification system for every container that includes a 
unique serial number (with check digit), the owner, a country code, a size, type 
and equipment category as well as any operational marks.

Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
composer require laymont/shicontstand
```

Publish the config file with:

```bash
php artisan vendor:publish --tag="shicontstand-config"
```

This is the contents of the published config file:

> 1. ***You can alter tables name before run migrations., in tables section of next array*** 
> 2. ***Define the name of the property in your model that stores the number of the container, also defines the property that stores the iso code of the container*** 

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

publish and run the migrations with:
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

It is recommended to update the routes cache
```
php artisan route:cache
``` 

## Usage
In your container model add the trait
```php
use Laymont\Shicontstand\Http\Traits\ScsAttributeTrait;

class Container extends Model
{
    use ScsAttributeTrait;
    ...
}
```
now when your model responds it will have a new attribute, called scs
```json
{
    "id": 21,
    "number": "TLLU8328970",
    "iso_type": null,
    "created_at": null,
    "updated_at": null,
    "scs": {
        "is_container": true,
        "owner": "TLL",
        "category": "U",
        "serial": "832897",
        "digit_validations": {
            "is_valid": true,
            "digit_validator": 0
        }
    }
}
```
1. is_container
2. owner
3. category
4. serial
5. digit_validations

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email laymont@gmail.com instead of using the issue tracker.

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
