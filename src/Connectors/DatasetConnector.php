<?php

namespace Vinkas\Singapore\Api\Connectors;

use Saloon\Http\Connector;
use Vinkas\Singapore\Api\Requests\Collections\Metadata;

class DatasetConnector extends Connector
{
	public function __construct()
	{
	}

	public function resolveBaseUrl(): string
	{
		return "https://api-open.data.gov.sg/v1/public/api";
	}

	public function metadata(string $collectionId)
	{
		return $this->send(new Metadata($collectionId));
	}
}
