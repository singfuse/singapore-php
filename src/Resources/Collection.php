<?php

namespace Vinkas\Singapore\Api\Resources;

use Saloon\Http\Connector;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Vinkas\Singapore\Api\Requests\Collections\Metadata;

class Collection extends BaseResource
{
    /**
     * Constructor
     */
    public function __construct(
      readonly protected Connector $connector,
      readonly protected ?string $collectionId = null
      ) {
        //
    }

    public function metadata(): Response
    {
        return $this->connector->send(new Metadata($this->collectionId));
    }
}
