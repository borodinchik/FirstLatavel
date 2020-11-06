<?php

namespace Domain\Auth\User;

use App\Models\User;
use Domain\Auth\User\Contracts\IUserRepository;
use Domain\Auth\User\Contracts\IUserService;
use Domain\Auth\User\Entity\UserEntity;
use Illuminate\Database\Eloquent\Model;

class UserService implements IUserService
{
    private IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function save(UserEntity $entity): User
    {
      return $this->userRepository->save($entity);
    }
}
