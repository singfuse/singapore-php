<?php

namespace Vinkas\Singapore\Api\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Vinkas\Singapore\Api\Requests\Weather\AirTemperature;
use Vinkas\Singapore\Api\Requests\Weather\FourDayForecast;
use Vinkas\Singapore\Api\Requests\Weather\Rainfall;
use Vinkas\Singapore\Api\Requests\Weather\RelativeHumidity;
use Vinkas\Singapore\Api\Requests\Weather\TwentyFourHourForecast;
use Vinkas\Singapore\Api\Requests\Weather\TwoHourForecast;
use Vinkas\Singapore\Api\Requests\Weather\UVIndex;
use Vinkas\Singapore\Api\Requests\Weather\WindDirection;
use Vinkas\Singapore\Api\Requests\Weather\WindSpeed;

class Weather extends BaseResource
{
	/**
	 * @param string $date SGT date (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS). Example: 2024-07-16 or 2024-07-16T23:59:00
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function twentyFourHourForecast(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new TwentyFourHourForecast($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function fourDayForecast(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new FourDayForecast($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function twoHourForecast(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new TwoHourForecast($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function windSpeed(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new WindSpeed($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function windDirection(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new WindDirection($date, $paginationToken));
	}

	/**
	 * @param string $date Format: YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS (SGT). Example: 2024-07-16 or 2024-07-16T23:59:00
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function rainfall(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new Rainfall($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function relativeHumidity(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new RelativeHumidity($date, $paginationToken));
	}

	/**
	 * @param string $date Format: YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS (SGT). Example: 2024-07-16 or 2024-07-16T23:59:00
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function airTemperature(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new AirTemperature($date, $paginationToken));
	}

	/**
	 * @param string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function uvIndex(?string $date = null, ?string $paginationToken = null): Response
	{
		return $this->connector->send(new UVIndex($date, $paginationToken));
	}
}
