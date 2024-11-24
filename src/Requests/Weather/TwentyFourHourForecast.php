<?php

namespace Vinkas\Singapore\Api\Requests\Weather;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieve the latest 24 hour weather forecast
 *
 *
 * **[https://api-open.data.gov.sg/v2/real-time/api/twenty-four-hr-forecast](https://api-open.data.gov.sg/v2/real-time/api/twenty-four-hr-forecast)**
 *
 * <br/>
 *
 * -
 * Updated multiple times throughout the day
 *
 * <br/>
 *
 * - Filter for specific date or date-time by
 * providing `date` in query parameter.
 *   - use YYYY-MM-DD format to retrieve all of the readings for
 * that day
 *   - use YYYY-MM-DDTHH:mm:ss to retrieve the latest readings at that moment in time
 *   -
 * example: `?date=2024-07-16` or `?date=2024-07-16T23:59:00`
 *
 * <br/>
 *
 * - Possible values for forecast
 * include:
 *   - Fair
 *   - Fair (Day)
 *   - Fair (Night)
 *   - Fair and Warm
 *   - Partly Cloudy
 *   - Partly
 * Cloudy (Day)
 *   - Partly Cloudy (Night)
 *   - Cloudy
 *   - Hazy
 *   - Slightly Hazy
 *   - Windy
 *   - Mist
 *   -
 * Fog
 *   - Light Rain
 *   - Moderate Rain
 *   - Heavy Rain
 *   - Passing Showers
 *   - Light Showers
 *   -
 * Showers
 *   - Heavy Showers
 *   - Thundery Showers
 *   - Heavy Thundery Showers
 *   - Heavy Thundery Showers
 * with Gusty Winds
 */
class TwentyFourHourForecast extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/twenty-four-hr-forecast";
	}


	/**
	 * @param null|string $date SGT date (YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS). Example: 2024-07-16 or 2024-07-16T23:59:00
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
