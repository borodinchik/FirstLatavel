<?php

namespace Domain\Auth\User\Address;

use App\Models\UserAddress;
use Domain\Auth\User\Address\Entity\UserAddressEntity;
use Domain\Auth\User\Address\Contracts\IAddressRepository;

class AddressRepository implements IAddressRepository
{
    public function save(UserAddressEntity $entity): UserAddress
    {

    }
}
