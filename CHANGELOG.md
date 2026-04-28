# Changelog

All notable changes to `Shicontstand` will be documented in this file.

## [1.1.0] - 2026-04-28

### Compatibility Update
- Laravel: ^12.0 | ^13.0 (was ^9.39)
- PHP: >=8.3 (was ^8.0)

### Changes
- Upgrade orchestra/testbench to ^10.0|^11.0
- Upgrade pest to ^3.0
- Remove phpstan dependencies (not needed for package distribution)
- Simplify composer.json

### Added
- PHPUnit configuration file
- More comprehensive tests

---

## [1.0.0] - 2022-11-11

### Initial Release
- ISO 6346 container codes management
- Models: TypeGroup, SizeType, LengthCode, SizeCode, TypeCode
- Controllers and API resources
- Facade
- Migrations and seeders