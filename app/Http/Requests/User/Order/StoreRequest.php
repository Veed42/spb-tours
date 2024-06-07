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
            'phone' => 'required:unique:orders',
            'email' => 'required|unique:orders',
            'country' => 'required|string',
            'time_tour' => 'required',
            'date_tour' => 'required|date',
            'count_grown' => 'required|numeric',
            'count_children' => 'required|numeric',
            'age_children' => 'required|numeric',
            'user_id' => 'unique:orders'
        ];
    }
}
