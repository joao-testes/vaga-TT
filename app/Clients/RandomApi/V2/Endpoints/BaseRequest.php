<?php

namespace App\Clients\RandomApi\V2\Endpoints;

use App\Clients\RandomApi\Interfaces\ApiServiceInterface;
use Illuminate\Http\Client\PendingRequest;

abstract class BaseRequest
{

    protected PendingRequest $api;

    public function __construct(
        private readonly ApiServiceInterface $service
    ) {
        $this->api = $this->service->api();
    }
}
