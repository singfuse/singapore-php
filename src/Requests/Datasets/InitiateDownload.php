<?php

namespace Vinkas\Singapore\Api\Requests\Datasets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class InitiateDownload extends Request
{
  protected Method $method = Method::GET;

  public function resolveEndpoint(): string
  {
    return 'datasets/'.$this->datasetId.'/initiate-download';
  }

  public function __construct(
    protected string $datasetId
  ) {
  }
}
