<?php

namespace Vinkas\Singapore\Api\Resources;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Vinkas\Singapore\Api\Requests\GoogleSearch\Trending;

class GoogleSearch extends BaseResource
{
  /**
   * Get trending searches in Singapore
   *
   *
   * **[https://trends.google.com/trending/rss](https://trends.google.com/trending/rss)**
   *
   */
  public function trending(): Response
  {
    return $this->connector->send(new Trending());
  }
}
