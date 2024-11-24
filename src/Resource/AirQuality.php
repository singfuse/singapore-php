<?php

namespace Vinkas\Singapore\Api\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Vinkas\Singapore\Api\Requests\AirQuality\PM25;
use Vinkas\Singapore\Api\Requests\AirQuality\PSI;

class AirQuality extends BaseResource
{
	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function psi(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new PSI($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function pm25(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new PM25($date, $paginationToken));
	}
}
