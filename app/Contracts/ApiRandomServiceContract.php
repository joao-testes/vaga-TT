<?php

namespace App\Contracts;

use App\Clients\RandomApi\V2\Entities\UserListEntity;

interface ApiRandomServiceContract
{
    public function Users(): UserListEntity;
}
