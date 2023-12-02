<?php

namespace App\Clients\RandomApi\V2\Entities\User;

class CreditCard
{
    public function __construct(
        private readonly string $number
    ) {
    }

    public function number(): string
    {
        $hiddenDigits = str_repeat('X', strlen($this->number) - 4);
        $visibleDigits = substr($this->number, -4);

        return $hiddenDigits . $visibleDigits;
    }
}
