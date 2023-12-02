<?php

namespace App\Clients\RandomApi\Interfaces;

use Illuminate\Http\Client\PendingRequest;

interface ApiServiceInterface
{
    public function api(): PendingRequest;
}
