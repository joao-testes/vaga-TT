<?php

namespace App\Clients\RandomApi\V2\Entities;

use App\Clients\RandomApi\Interfaces\EntityInterface;
use App\Clients\RandomApi\V2\Entities\User\Address;
use App\Clients\RandomApi\V2\Entities\User\CreditCard;
use App\Clients\RandomApi\V2\Entities\User\Job;
use App\Clients\RandomApi\V2\Entities\User\Name;
use App\Clients\RandomApi\V2\Entities\User\Subscription;

class UserEntity implements EntityInterface
{
    public int $id;

    public string $uid;

    public Name $name;

    public string $username;

    public string $email;

    public string $image;

    public string $gender;

    public string $phone;

    public \DateTimeInterface $dateOfBirth;

    public Address $address;

    public Job $job;

    public CreditCard $creditCard;

    public Subscription $subscription;


    public function __construct(array $data)
    {
        $this->id = data_get($data, 'id');
        $this->uid = data_get($data, 'uid');
        $this->name = new Name(
            data_get($data, 'first_name'),
            data_get($data, 'last_name'),
        );
        $this->username = data_get($data, 'username');
        $this->email = data_get($data, 'email');
        $this->gender = data_get($data, 'gender');
        $this->phone = data_get($data, 'phone_number');
        $this->dateOfBirth = new \DateTimeImmutable(data_get($data, 'date_of_birth'));
        $this->address = new Address(data_get($data, 'address'));
        $this->job = new Job(
            data_get($data, 'employment.title'),
            data_get($data, 'employment.key_skill')
        );
        $this->creditCard = new CreditCard(
            data_get($data, 'credit_card.cc_number'),
        );
        $this->subscription = new Subscription(
            data_get($data, 'subscription.plan'),
            data_get($data, 'subscription.status'),
            data_get($data, 'subscription.payment_method'),
            data_get($data, 'subscription.term'),
        );
        $this->image = data_get($data, 'avatar');
    }
}
