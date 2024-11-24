<?php

namespace Vinkas\Singapore\Api\Requests\Weather;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get air temperature readings across Singapore
 *
 *
 * **[https://api-open.data.gov.sg/v2/real-time/api/air-temperature](https://api-open.data.gov.sg/v2/real-time/api/air-temperature)**
 *
 * <br/>
 *
 * -
 * Has per-minute readings from NEA
 *
 * <br/>
 *
 * - Filter for specific date or date-time by providing `date`
 * in query parameter.
 *   - use YYYY-MM-DD format to retrieve all of the readings for that day
 *   - use
 * YYYY-MM-DDTHH:mm:ss to retrieve the latest readings at that moment in time
 *   - example:
 * `?date=2024-07-16` or `?date=2024-07-16T23:59:00`
 */
class AirTemperature extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/air-temperature";
	}


	/**
	 * @param null|string $date Format: YYYY-MM-DD or YYYY-MM-DDTHH:MM:SS (SGT). Example: 2024-07-16 or 2024-07-16T23:59:00
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
