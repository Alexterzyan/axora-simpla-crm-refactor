<?php


namespace App\RequestRules\User;

use App\RequestRules\IRequestRules;

class RegisterUserRequest implements IRequestRules
{
    public static function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'password|required'
        ];
    }

    public static function messages(): array
    {
        // TODO: Implement messages() method.
    }

}