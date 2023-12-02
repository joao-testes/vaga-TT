<?php

namespace App\Clients\RandomApi\V2\Entities\User;

class Job
{

    public function __construct(
        public string $title,
        public string $keySkill,
    ) {
    }
}
