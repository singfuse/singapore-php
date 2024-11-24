<?php

namespace Vinkas\Singapore\Api\Requests\Weather;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieve the latest UV index information
 *
 *
 * **[https://api-open.data.gov.sg/v2/real-time/api/uv](https://api-open.data.gov.sg/v2/real-time/api/uv)**
 *
 * <br/>
 *
 * -
 * Updated every hour between 7 AM and 7 PM everyday
 * - The UV index value is averaged over the
 * preceding hour
 *
 * <br/>
 *
 * - Filter for specific date or date-time by providing `date` in query
 * parameter.
 *   - use YYYY-MM-DD format to retrieve all of the readings for that day
 *   - use
 * YYYY-MM-DDTHH:mm:ss to retrieve the latest readings at that moment in time
 *   - example:
 * `?date=2024-07-16` or `?date=2024-07-16T23:59:00`
 */
class UVIndex extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/uv";
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
