<?php

namespace Vinkas\Singapore\Api\Connectors;

use Saloon\Http\Connector as SaloonConnector;

/**
 * Real-time API weather services
 *
 * Real-time API documentation of weather services
 */
class GoogleTrendsConnector extends SaloonConnector
{
  public function __construct()
  {
  }

  public function resolveBaseUrl(): string
	{
		return "https://trends.google.com/trending";
	}
}
