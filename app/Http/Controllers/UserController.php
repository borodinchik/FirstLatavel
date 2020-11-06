<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\UserRequest;
use Domain\Auth\User\Entity\UserEntity;
use Domain\Auth\User\Contracts\IUserService;
use App\Http\Resources\UserWithUserAddressResource;

class UserController extends Controller
{
    public function store(UserRequest $request): JsonResponse
    {
        $userService = app()->make(IUserService::class);

        return response()
            ->json(
                UserWithUserAddressResource::make(
                    $userService->save(
                        new UserEntity($request->validated())
                    )
                )
            );
    }
}
