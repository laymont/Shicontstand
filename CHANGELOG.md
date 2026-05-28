# Changelog

All notable changes to `Shicontstand` will be documented in this file.

## [1.2.1] - 2026-05-28

### Security
- Updated Laravel 13 dependencies for Symfony security patches
- Updated vulnerable Symfony packages:
  - symfony/polyfill-intl-idn (v1.37.0 -> v1.38.1) - CVE-2026-46644
  - symfony/routing (v7.4.8 -> v7.4.13) - CVE-2026-48784, CVE-2026-45065
  - symfony/yaml (v7.4.8 -> v7.4.13) - CVE-2026-45304, CVE-2026-45305, CVE-2026-45133
- Updated orchestra/testbench-core (v11.3.1 -> v11.3.3)

### Changes
- Updated composer.lock with 37 dependency updates
- Composer audit: No vulnerabilities found

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
