<?php

namespace Domain\Auth\User;

use \App\Models\User;
use App\Models\UserAddress;
use Domain\Auth\User\Contracts\IUserRepository;
use Domain\Auth\User\Entity\UserEntity;

class UserRepository implements IUserRepository
{
    public function save(UserEntity $entity): User
    {
       $user = User::query()->create($entity->toArray());

       $userAddress = UserAddress::query()->make($entity->getAddress()->toArray());
       $userAddress->user_id = $user->id;
       $user->userAddress()->save($userAddress);

       return $user->with('userAddress')->first();
    }
}
