<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Laravel\Prompts\password;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

     public function authorize() {
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
           'phone' => 'required',
            'password' => 'required|string|min:10'
        ];
    }
}
