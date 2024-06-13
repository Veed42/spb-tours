<?php

namespace App\Http\Requests\User\TourReview;

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
           'name' => 'required|string|max:30',
           'content' => 'required|string|max:256'
        ];
    }
}
