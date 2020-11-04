<?php

namespace Domain\Auth\User\Address\Entity;

class UserAddressEntity
{
    public string $city;
    public int $code;
    public string $state;
    public string $street;
    public string $country;

    public function __construct(array $addressData)
    {
        $this->city = $addressData['city'];
        $this->code = $addressData['code'];
        $this->state = $addressData['state'];
        $this->street = $addressData['street'];
        $this->country = $addressData['country'];
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getStreet(): string
    {
        return $this->street;
    }
    public function getCountry(): string
    {
        return $this->country;
    }

    public function toArray(): array
    {
        return [
            'city' => $this->city,
            'code' => $this->code,
            'state' => $this->state,
            'street' => $this->street,
            'country' => $this->country,
        ];
    }
}
