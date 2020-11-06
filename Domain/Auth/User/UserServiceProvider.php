<?php

namespace Domain\Auth\User;

use Illuminate\Support\ServiceProvider;
use Domain\Auth\User\Contracts\IUserService;
use Domain\Auth\User\Contracts\IUserRepository;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->userService();
        $this->userRepository();
    }

    private function userService(): void
    {
        $this->app->singleton(IUserService::class, UserService::class);
    }

    private function userRepository(): void
    {
        $this->app->singleton(IUserRepository::class, UserRepository::class);
    }


}
