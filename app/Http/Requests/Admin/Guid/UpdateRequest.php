<?php

namespace App\Http\Requests\Admin\Guid;

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
            'image_guid' => 'nullable|file',
            'name' => 'string|required',
            'surname' => 'string|required',
            'patronymic' => 'string|required',
            'year_work' => 'required',
            'guides_quality' => 'required',
            'description' => 'required'
        ];
    }
}
