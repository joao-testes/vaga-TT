<?php

namespace App\Clients\RandomApi\Facade;

use App\Clients\RandomApi\V2\Endpoints\User;
use App\Clients\RandomApi\V2\RandomApiV2Service;
use Illuminate\Support\Facades\Facade;

/**
 * @method static User user()
 */

class RandomApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return RandomApiV2Service::class;
    }
}
