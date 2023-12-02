<?php

namespace App\Clients\RandomApi\V2\Entities\User;

class CreditCard
{
    public function __construct(
        private string $number
    ) {
    }
}
