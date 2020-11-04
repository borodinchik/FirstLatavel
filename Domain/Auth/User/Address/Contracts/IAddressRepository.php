<?php

namespace Domain\Auth\User\Address\Contracts;

use \App\Models\UserAddress;
use Domain\Auth\User\Address\Entity\UserAddressEntity;

interface IAddressRepository
{
    public function save(UserAddressEntity $entity): UserAddress;
}
