<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UserPassword implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return preg_match("/[a-zA-Z][0-9][-!$%^&*()@_+|~=`{}\[\]:;'<>?,.\/]/", $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The :attribute not valid';
    }
}
