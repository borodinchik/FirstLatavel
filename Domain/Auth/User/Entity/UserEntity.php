<?php

namespace Domain\Auth\User\Entity;

use \Domain\Auth\User\Address\Entity\UserAddressEntity;

class UserEntity
{
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected string $password;
    protected UserAddressEntity $address;

    public function __construct(array $userData)
    {
        $this->firstName = $userData['first_name'];
        $this->lastName = $userData['last_name'];
        $this->email = $userData['email'];
        $this->password = $userData['password'];
        $this->address = new UserAddressEntity($userData['address']);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getAddress(): UserAddressEntity
    {
        return $this->address;
    }

    public function toArray()
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
            'address' => $this->address->toArray(),
        ];
    }
}
