<?php

namespace Vinkas\Singapore\Api\Resources;

use Saloon\Http\Connector;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Vinkas\Singapore\Api\Requests\Datasets\InitiateDownload;
use Vinkas\Singapore\Api\Requests\Datasets\PollDownload;

class Dataset extends BaseResource
{
    /**
     * Constructor
     */
    public function __construct(
      readonly protected Connector $connector,
      readonly protected ?string $datasetId = null
      ) {
        //
    }

    public function initiateDownload(): Response
    {
        return $this->connector->send(new InitiateDownload($this->datasetId));
    }

    public function pollDownload(): Response
    {
        return $this->connector->send(new PollDownload($this->datasetId));
    }
}
