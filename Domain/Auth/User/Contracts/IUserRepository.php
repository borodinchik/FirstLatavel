<?php

namespace Domain\Auth\User\Contracts;

use App\Models\User;
use Domain\Auth\User\Entity\UserEntity;

interface IUserRepository
{
    public function save(UserEntity $entity): User;
}
