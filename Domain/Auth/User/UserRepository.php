<?php

namespace Domain\Auth\User;

use \App\Models\User;
use Domain\Auth\User\Contracts\IUserRepository;

class UserRepository implements IUserRepository
{
    public function save(UserService $entity): User
    {
        // TODO: Implement save() method.
    }
}
