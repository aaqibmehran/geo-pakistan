# Laravel Geo Pakistan Database

This package focused on Provinces/States, Divisions, Districts and Tehsils/Talukas database of Pakistan for Laravel.
Additionally, population, area and density, is also added according to census of 2017. Latitude and longitude of the region center is also added. 

## Conceptions

There are 4 main objects in this package.

- Provinces/States: 7
- Divisions: 36
- Districts: 154
- Tehsils/talukas: 536

### Localization

Right now, only English(default and fallback) is supported. We intend to add locale for urdu in the future updates.

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

$punjab = Province::getByAbbr('PUN');
$divisions = $punjab->divisions()->get();
// or use children method
$divisions = $punjab->children();
```

- get province or parent
```php
    $rawalpindi = Division::getByName('Rawalpindi');
    $punjab = $rawalpindi->parent();
```

- get parents of tehsil

```php
// get district by tehsil
$lahore_city = Tehsil::getByName('Lahore City');
$Lahore = $lahore_city->district();

// get division by tehsil
$lahore_city = Tehsil::getByName('Lahore City');
$lahore = $lahore_city->division();

// get province by tehsil
$lahore_city = Tehsil::getByName('Lahore City');
$Punjab = $lahore_city->province();
```

- get tehsils by province and division

```php
// get by province
$punjab = Province::getByAbbr('PUN');
$tehsils = $punjab->tehsils()->get();

// get by division
$rawalpindi = Division::getByName('Rawalpindi');
$tehsils = $rawalpindi->tehsils()->get();
```

## About

This package published under MIT license. If you have any question or suggestion, please feel free to submit an issue, or email me Aaqib Mehran <mehran.aaqib@gmail.com>.

Have a nice day.
