<?php

namespace Domain\Auth\User\Contracts;

use Domain\Auth\User\UserService;

interface IUserRepository
{
    public function save(UserService $entity);
}
