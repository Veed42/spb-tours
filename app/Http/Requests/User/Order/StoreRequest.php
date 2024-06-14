<?php

namespace App\Http\Requests\User\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|unique:orders,phone',
            'email' => 'required|unique:orders,email',
            'country' => 'required|string',
            'date_tour' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'tour_id' => 'required|exists:tours,id'
        ];
    }
}
