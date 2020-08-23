# Laravel Geo Pakistan Database

This package focused on Provinces/States, Divisions, Districts and Tehsils/Talukas database with population according to 2017 census of Pakistan for Laravel.

## Conceptions

There are 4 main objects in this package.

- Provinces/States: 6 provinces/states.
- Divisions: 36 divisions
- Districts: 154 districts
- Tehsils: 535 tehsils/talukas.

### Attributes

Common attributes:

- `name`: Common name of region(english).
- `full_name`: Full name or official name(english).
- `code`: ISO-3166-1-alpha2/ISO-3166-2 code
- `local_name`: translation of Common name
- `local_full_name`: translation of full name
- `local_alias`: alias in different language
- `local_abbr`: Abbreviation

Country spec attributes:

- `emoji`: Emoji flag of country
- `capital`: Captial of this country
- `code_alpha3`: Code of ISO-3166-1-alpha3
- `currency_code`: ISO-4177 Currency Code, e.g. USD, CNY
- `currency_name`: ISO-4177 Currency Name,
- `local_currency_name`: ISO-4177 Currency name in locale

Example:

```php
use Aaqib\GeoPakistan\Province;
$china = Province::getByCode('PUN');
$china->name; // Punjab
$china->local_name; // 中国
$china->full_name; // People's Republic of China
$china->local_full_name; // 中华人民共和国
$china->emoji; // 🇨🇳
$china->callingcode; // 86
$china->code; // CN
$china->code_alpha3; // CHN
$china->has_division; // true
$china->currency_code; // CNY
$china->currency_name; // Yuan Renminbi
$china->local_currency_name; // 人民币
```

### Localization

Right now, only English(default and fallback) is supported. Locale settings is following Laravel project settings in `config/app.php`.

## Setup

- `composer require`

```php
composer require aaqib/geo-pakistan
```

- Add Service Provider into `config/app.php`

```php
'providers' => [
    // ...
    Aaqib\GeoPakistan\GeoPakistanServiceProvider::class,
]
```

- Publish and init

```php
php artisan vendor:publish --force --provider="Aaqib\GeoPakistan\GeoPakistanServiceProvider"
composer dump-autoload
php artisan geopakistan:init
```

## Usage

- get all Provinces

```php
use Aaqib\GeoPakistan\Pakistan;

Pakistan::Provinces()

```

- get all Divisions

```php
use Aaqib\GeoPakistan\Division;

Pakistan::Divisions()
```

- get divisions belong to a province

```php
use Aaqib\GeoPakistan\Models\Province;

$punjab = Province::getByCode('PUN');
$divisions = $punjab->divisions()->get();
// or use children method
$divisions = $punjab->children();
```

- get province or parent

```php
$rawalpindi = Division::getByCode('cn');
$punjab = $rawalpindi->parent();
```

- get cities via Country or Division.

## About

This package published under MIT license. If you have any question or suggestion, please feel free to submit a issue, or email me Aaqib Mehran <mehran.aaqib@gmail.com>.

Have a nice day.
