<?php

namespace App\Http\Requests;

use App\Rules\UserPassword;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'string',
            'password' => ['string' , new UserPassword],
            'address' => 'required|array',
            'address.city' => 'string',
            'address.code' => 'int',
            'address.state' => 'string',
            'address.street' => 'string',
            'address.country' => 'string',
        ];
    }
}
