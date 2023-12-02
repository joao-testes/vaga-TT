<?php

namespace App\Clients\RandomApi\V2\Entities;

use App\Clients\RandomApi\Interfaces\EntityInterface;

class UserListEntity implements EntityInterface
{
    /**
     * @var UserEntity[]
     */
    public array $users;

    public function __construct(
        array $users
    ) {
        foreach ($users as $user) {
            $this->users[] = new UserEntity($user);
        }
    }
}
