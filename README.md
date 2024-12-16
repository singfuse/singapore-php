# singapore-php

[![Tests](https://github.com/vinkashq/singapore-php/actions/workflows/tests.yml/badge.svg)](https://github.com/vinkashq/singapore-php/actions/workflows/tests.yml) [![Packagist Version](https://img.shields.io/packagist/v/vinkas/singapore?logo=packagist&logoColor=000000&label=version&labelColor=d9e0f3&color=f28d1a)](https://packagist.org/packages/vinkas/singapore)

PHP SDK for Singapore's open data API https://data.gov.sg/datasets?formats=API

## Installation

The package [`vinkas/singapore`](https://packagist.org/packages/vinkas/singapore) can be installed using composer via Packagist.

```
composer require vinkas/singapore
```

## Usage

You can simply call the API endpoints by using the `Connector` class.

```php
use Vinkas\Singapore\Api\Connector;

$connector = new Connector();
$response = $connector->weather()->rainfall();
$data = $response->object()->data;

$stations = $data->stations;
$readings = $data->readings;
```

Also, you can get all the details of Singapore regions, areas, subzones, and postal districts from the classes below.
Some of these lists are created from the MIT Node package https://github.com/horensen/sg-areas

```php
use Vinkas\Singapore\Data\Regions;
use Vinkas\Singapore\Data\Areas;
use Vinkas\Singapore\Data\Subzones;

Regions::all();
Areas::all();
Subzones::all();
```
