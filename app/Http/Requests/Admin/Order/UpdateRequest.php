<?php

namespace App\Http\Requests\Admin\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'phone' => 'string|required',
            'email' => 'email:rfc,dns|string|required',
            'country' => 'required|string',
            'date_tour' => 'date',
            'status' => 'required',
            'tour_id' => 'required',

        ];
    }
}
