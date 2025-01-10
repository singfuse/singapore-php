<?php

namespace Vinkas\Singapore\Api;

use Vinkas\Singapore\Api\Connectors\CollectionConnector;
use Vinkas\Singapore\Api\Connectors\DatasetConnector;
use Vinkas\Singapore\Api\Connectors\RealtimeConnector;
use Vinkas\Singapore\Api\Connectors\GoogleTrendsConnector;
use Vinkas\Singapore\Api\Resources\AirQuality;
use Vinkas\Singapore\Api\Resources\Collection;
use Vinkas\Singapore\Api\Resources\Dataset;
use Vinkas\Singapore\Api\Resources\Weather;
use Vinkas\Singapore\Api\Resources\GoogleSearch;

class Connector
{
  public function __construct()
	{
	}

	public function airQuality(): AirQuality
	{
		return new AirQuality(new RealtimeConnector());
	}

	public function weather(): Weather
	{
		return new Weather(new RealtimeConnector());
	}

  public function collection(?string $id = null): Collection
  {
    return new Collection(new CollectionConnector(), $id);
  }

  public function dataset(?string $id = null): Dataset
  {
    return new Dataset(new DatasetConnector(), $id);
  }

	public function googleSearch(): GoogleSearch
	{
		return new GoogleSearch(new GoogleTrendsConnector());
	}
}
