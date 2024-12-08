<?php

namespace Vinkas\Singapore\Api\Requests\Collections;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class Metadata extends Request
{
  protected Method $method = Method::GET;

  public function resolveEndpoint(): string
  {
    return '/collections/'.$this->collectionId.'/metadata';
  }

  public function __construct(
    protected string $collectionId,
    protected bool $withDatasetMetadata = true
  ) {
  }

  public function defaultQuery(): array
  {
    return array_filter(['withDatasetMetadata' => $this->withDatasetMetadata]);
  }
}
