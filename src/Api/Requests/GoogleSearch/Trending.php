<?php

namespace Vinkas\Singapore\Api\Requests\GoogleSearch;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get trending searches in Singapore
 *
 *
 * **[https://trends.google.com/trending/rss](https://trends.google.com/trending/rss)**
 *
 */
class Trending extends Request
{
  protected Method $method = Method::GET;

  public function __construct()
  {
  }

  public function resolveEndpoint(): string
  {
    return "/rss";
  }

  public function defaultQuery(): array
  {
    return [
      'geo' => 'SG'
    ];
  }
}
