<?php

namespace Vinkas\Singapore\Api\Requests\AirQuality;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Pollutant Standards Index (PSI)
 *
 *
 * **[https://api-open.data.gov.sg/v2/real-time/api/psi](https://api-open.data.gov.sg/v2/real-time/api/psi)**
 *
 * <br/>
 *
 * -
 * Updated hourly from NEA.
 * - Readings are provided for each major region in Singapore
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
 * - The `region_metadata` field in the response provides
 * longitude/latitude information for the regions. You can use that to place the readings on a map.
 */
class PSI extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/psi";
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
