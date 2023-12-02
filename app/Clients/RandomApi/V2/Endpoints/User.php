<?php

namespace App\Clients\RandomApi\V2\Endpoints;

use App\Clients\RandomApi\Interfaces\ApiGetRequestInterface;
use App\Clients\RandomApi\Interfaces\EntityInterface;
use App\Clients\RandomApi\V2\Entities\UserListEntity;
use Illuminate\Support\Facades\Log;

class User extends BaseRequest implements ApiGetRequestInterface
{
    private int $size = 100;

    /**
     * @throws \DomainException
     */
    public function get(): UserListEntity
    {
        try {
            return new UserListEntity(
                $this->api
                    ->get('users', [
                        'size' => $this->size,
                    ])
                    ->json()
            );
        } catch (\Throwable $e) {
            Log::error(
                "Erro ao buscar dados da API RandomApi: {$e->getMessage()}",
                [
                    'exception' => $e,
                ]
            );
            throw new \DomainException('Erro ao buscar dados da API RandomApi', 400);
        }
    }

    public function size(
        int $size
    ): self {
        $this->size = $size;
        return $this;
    }
}
