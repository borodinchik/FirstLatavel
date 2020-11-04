<?php

namespace Domain\Auth\User\Contracts;

use Domain\Auth\User\Entity\UserEntity;

interface IUserService
{
    public function save(UserEntity $entity);
}
