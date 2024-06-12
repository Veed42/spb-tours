<?php

namespace App\Http\Requests\User\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|unique:orders,phone',
            'email' => 'required|unique:orders,email',
            'country' => 'required|string',
            'date_tour' => 'required|date',
            'user_id' => 'required|exists:orders,user_id',
            'tour_id' => 'required|exists:orders,tour_id'
        ];
    }
}
