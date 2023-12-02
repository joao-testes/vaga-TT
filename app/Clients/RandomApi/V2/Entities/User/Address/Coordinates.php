<?php

namespace App\Clients\RandomApi\V2\Entities\User\Address;

class Coordinates
{
    public function __construct(
        public string $latitude,
        public string $longitude,
    ) {
    }
}
