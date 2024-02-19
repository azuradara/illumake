# Illumake

A (mostly) typesafe Laravel container resolver.

## Usage

```php
// Provides autocomplete for the DatabaseManager

make(\Illuminate\Database\DatabaseManager::class)
    ->transaction(fn () => {});
```

## Limitations

- Does not work with non class-strings.
- Parameters second argument is not type hinted.

## Why

Laravel's `app()->make()` gives me the ick.
