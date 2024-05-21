<?php

namespace App\Http\Requests\Admin\Guid;

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
            'image_guid' => 'required|file|unique:guides,image_guid',
            'name' => 'string|required|unique:guides',
            'surname' => 'string|required|unique:guides',
            'patronymic' => 'string|required|unique:guides',
            'year_work' => 'required',
            'guides_quality' => 'required',
            'description' => 'required'
        ];
    }
}
