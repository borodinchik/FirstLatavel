<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserWithUserAddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'Last_name' => $this->last_name,
            'email' => $this->first_name,
            'address' => [
                'city' => $this->userAddress->city,
                'code' => $this->userAddress->code,
                'street' => $this->userAddress->street,
                'state' => $this->userAddress->state,
                'country' => $this->userAddress->country,
            ],
        ];
    }
}
