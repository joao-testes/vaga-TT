<?php

namespace App\Clients\RandomApi\V2\Entities\User;

class Name
{
    public function __construct(
        public string $firstName,
        public string $lastName,
    ) {
    }
}
