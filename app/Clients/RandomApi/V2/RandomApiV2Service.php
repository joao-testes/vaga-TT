<?php

namespace App\Clients\RandomApi\V2;

use App\Clients\RandomApi\Interfaces\ApiServiceInterface;
use App\Clients\RandomApi\V2\Traits\HasUser;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class RandomApiV2Service implements ApiServiceInterface
{
    use HasUser;
    private const BASE_URL = 'https://random-data-api.com/api/v2/';

    public function api(): PendingRequest
    {
        return Http::baseUrl(
            self::BASE_URL
        );
    }
}
