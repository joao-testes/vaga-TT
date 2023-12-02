<?php

namespace App\Clients\RandomApi\V2\Traits;

use App\Clients\RandomApi\V2\Endpoints\User;

trait HasUser
{
    public function user(): User
    {
        return new User($this);
    }
}
