# Changelog

All notable changes to `Shicontstand` will be documented in this file.

## [1.2.0] - 2026-04-28

### New Features
- **Repository Pattern**: Add EloquentRepository base class
- **Contracts**: Add RepositoryInterface and TypeGroupInterface
- **TypeGroupRepository**: Concrete implementation for TypeGroup

### Changes
- Improve ServiceProvider (Laravel 12/13 best practices)
- Add donation section to README
- Add comprehensive documentation

### Tests
- Add 6 functional tests for repositories and models

---

## [1.1.0] - 2026-04-28

### Compatibility Update
- Laravel: ^12.0 | ^13.0 (was ^9.39)
- PHP: >=8.3 (was ^8.0)

### New Features
- **Repository Pattern**: Add EloquentRepository base class
- **Contracts**: Add RepositoryInterface and TypeGroupInterface
- **TypeGroupRepository**: Concrete implementation for TypeGroup

### Changes
- Upgrade orchestra/testbench to ^10.0|^11.0
- Upgrade pest to ^3.0
- Simplify composer.json
- Improve ServiceProvider for Laravel 12/13

### Tests
- Add 6 functional tests for repositories

---

## [1.0.0] - 2022-11-11

### Initial Release
- ISO 6346 container codes management
- Models: TypeGroup, SizeType, LengthCode, SizeCode, TypeCode
- Controllers and API resources
- Facade
- Migrations and seeders