# Shicontstand

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laymont/shicontstand.svg?style=flat-square)](https://packagist.org/packages/laymont/shicontstand)
[![Total Downloads](https://img.shields.io/packagist/dt/laymont/shicontstand.svg?style=flat-square)](https://packagist.org/packages/laymont/shicontstand)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Package for ISO 6346 shipping container codes management. This package provides models, controllers, and resources for managing shipping container codes based on the ISO 6346 standard.

## Compatibility

- **Laravel**: ^12.0 | ^13.0
- **PHP**: >=8.3

## Installation

```bash
composer require laymont/shicontstand
```

## Usage

### Models

The package includes 5 models for container codes:

- `TypeGroup` - Container groups (Dry, Refrigerated, Open Top)
- `SizeType` - Container sizes (20', 40', 45')
- `LengthCode` - Length codes (L, M, E)
- `SizeCode` - Size codes (2, G, L)
- `TypeCode` - Type codes (G1, R1, etc.)

### Controllers / API Endpoints

The package automatically registers routes:

```
GET /scs/type_groups
GET /scs/type_groups/{code}
GET /scs/size_types
GET /scs/size_types/{code}
GET /scs/length_codes
GET /scs/length_codes/{code}
GET /scs/size_codes
GET /scs/size_codes/{code}
GET /scs/type_codes
GET /scs/type_codes/{code}
```

### Facade

```php
use Shicontstand;

// Get all type groups
Shicontstand::getTypeGroups();

// Get specific type group
Shicontstand::getTypeGroup('20GP');

// Get all size types
Shicontstand::getSizeTypes();

// Get specific size type
Shicontstand::getSizeType('22G1');
```

### In Controller

```php
public function __construct(
    protected \Laymont\Shicontstand\Shicontstand $shicontstand
) {}

public function index()
{
    return $this->shicontstand->getTypeGroups();
}
```

## Configuration

Publish config:

```bash
php artisan vendor:publish --tag="shicontstand-config"
```

Publish migrations:

```bash
php artisan vendor:publish --tag="shicontstand-migrations"
```

Run migrations:

```bash
php artisan migrate
```

Seed data:

```bash
php artisan db:seed --class=ShicontstandSeeder
```

## Container Model Trait

Use the trait in your container model:

```php
use Laymont\Shicontstand\Http\Concerns\ContainerValidation;

class Container extends Model
{
    use ContainerValidation;
}
```

This adds ISO 6346 validation attributes to your model.

## Testing

```bash
./vendor/bin/pest
```

## License

MIT License. See [license file](license.md) for more information.