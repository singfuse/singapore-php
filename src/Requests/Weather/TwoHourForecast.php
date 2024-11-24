<?php

namespace Vinkas\Singapore\Api\Requests\Weather;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieve the latest two hour weather forecast
 *
 *
 * **[https://api-open.data.gov.sg/v2/real-time/api/two-hr-forecast](https://api-open.data.gov.sg/v2/real-time/api/two-hr-forecast)**
 *
 * <br/>
 *
 * -
 * Updated half-hourly from NEA
 * - Forecasts are given for multiple areas in Singapore
 *
 * <br/>
 *
 * - Filter
 * for specific date or date-time by providing `date` in query parameter.
 *   - use YYYY-MM-DD format to
 * retrieve all of the readings for that day
 *   - use YYYY-MM-DDTHH:mm:ss to retrieve the latest
 * readings at that moment in time
 *   - example: `?date=2024-07-16` or
 * `?date=2024-07-16T23:59:00`
 *
 * <br/>
 *
 * - Possible values for forecast include:
 *   - Fair
 *   - Fair (Day)
 *
 * - Fair (Night)
 *   - Fair and Warm
 *   - Partly Cloudy
 *   - Partly Cloudy (Day)
 *   - Partly Cloudy
 * (Night)
 *   - Cloudy
 *   - Hazy
 *   - Slightly Hazy
 *   - Windy
 *   - Mist
 *   - Fog
 *   - Light Rain
 *   - Moderate
 * Rain
 *   - Heavy Rain
 *   - Passing Showers
 *   - Light Showers
 *   - Showers
 *   - Heavy Showers
 *   - Thundery
 * Showers
 *   - Heavy Thundery Showers
 *   - Heavy Thundery Showers with Gusty Winds
 *
 * <br/>
 *
 * - Area
 * metadata
 *   - The `area_metadata` field in the response provides longitude/latitude information for
 * the areas. You can use that to place the forecasts on a map.
 */
class TwoHourForecast extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/two-hr-forecast";
	}


	/**
	 * @param null|string $date SGT date for which to retrieve data (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS)
	 * @param null|string $paginationToken Pagination token for retrieving subsequent data pages
	 */
	public function __construct(
		protected ?string $date = null,
		protected ?string $paginationToken = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['date' => $this->date, 'paginationToken' => $this->paginationToken]);
	}
}
