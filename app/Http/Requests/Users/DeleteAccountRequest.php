<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

class DeleteAccountRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "password" => "required|password_check:".$this->user->password,
        ];
    }

    public function messages()
    {
        return [
            'password.required'         =>  'Olvidaste ingresar tu contraseña.',
            'password.password_check'   =>  'La contraseña que ingresaste es incorrecta.',
        ];
    }

}
