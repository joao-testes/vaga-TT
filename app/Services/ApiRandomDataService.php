<?php

namespace App\Services;

use App\Clients\RandomApi\Facade\RandomApi;
use App\Clients\RandomApi\V2\Entities\UserListEntity;
use App\Contracts\ApiRandomServiceContract;

class ApiRandomDataService implements ApiRandomServiceContract
{

    public function Users(): UserListEntity
    {
        return RandomApi::user()
            ->get();
    }
}
