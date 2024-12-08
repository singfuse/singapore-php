# singapore-api-php

[![Tests](https://github.com/vinkashq/singapore-api-php/actions/workflows/tests.yml/badge.svg)](https://github.com/vinkashq/singapore-api-php/actions/workflows/tests.yml) [![Packagist Version](https://img.shields.io/packagist/v/vinkas/singapore-api?logo=packagist&logoColor=000000&label=version&labelColor=d9e0f3&color=f28d1a)](https://packagist.org/packages/vinkas/singapore-api)

PHP SDK for Singapore's open data API https://data.gov.sg/datasets?formats=API

## Installation

The package [`vinkas/singapore-api`](https://packagist.org/packages/vinkas/singapore-api) can be installed using composer via Packagist.

```
composer require vinkas/singapore-api
```

## Usage

You can simply call the API endpoints by using the `Connector` class.

```php
use Vinkas\Singapore\Api\Connector;

$connector = new Connector();
$response = $connector->weather()->rainfall();
$data = $response->object()->data();

$stations = $data->stations();
$readings = $data->readings();
```
