<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => [ 'string' ],
            'username' => ['required' , 'string' , 'max:14' , 'min:3'],
            'lastname' => ['required' , 'string'],
            'email' => ['required' , 'string'  , 'max:255' ], // , Rule::unique('email')
            'password' => ['required' , 'confirmed'  , 'max:20' , Password::default()],
            'phone_number' => ['required' ,'string'  , 'max:255'],
            'address' => ['required' , 'string'  , 'max:1000'],
        ];
    }
}
