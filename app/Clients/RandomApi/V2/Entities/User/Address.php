<?php

namespace App\Clients\RandomApi\V2\Entities\User;

use App\Clients\RandomApi\V2\Entities\User\Address\Coordinates;

class Address
{
    public string $street_name;

    public string $street_address;

    public string $city;

    public string $state;

    public string $country;

    public string $zip;

    public Coordinates $coordinates;

    public function __construct(array $data)
    {
        $this->street_name = data_get($data, 'street_name');
        $this->street_address = data_get($data, 'street_address');
        $this->city = data_get($data, 'city');
        $this->state = data_get($data, 'state');
        $this->country = data_get($data, 'country');
        $this->zip = data_get($data, 'zip_code');
        $this->coordinates = new Coordinates(
            data_get($data, 'coordinates.lat'),
            data_get($data, 'coordinates.lng')
        );
    }
}
