<?php

namespace App\Clients\RandomApi\V2\Entities\User;

class Subscription
{
    public function __construct(
        public string $plan,
        public string $status,
        public string $paymentMethod,
        public string $term,
    ) {
    }
}
