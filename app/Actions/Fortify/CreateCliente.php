<?php

namespace App\Actions\Fortify;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewCliente implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validação de cliente.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefone'  => ['required', 'string', 'unique:users'],
        ])->validate();

        return Cliente::create([
            'email' => $input['email'],
            'telefone'  =>$input['telefone'],
        ]);
    }
}
