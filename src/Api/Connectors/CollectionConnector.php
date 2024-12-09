<?php

namespace Vinkas\Singapore\Api\Connectors;

use Saloon\Http\Connector as SaloonConnector;
use Vinkas\Singapore\Api\Requests\Collections\Metadata;

class CollectionConnector extends SaloonConnector
{
	public function __construct()
	{
	}

	public function resolveBaseUrl(): string
	{
		return "https://api-production.data.gov.sg/v2/public/api";
	}

	public function metadata(string $collectionId)
	{
		return $this->send(new Metadata($collectionId));
	}
}
