<?php

namespace App\Http\Requests\Admin\Tour;

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
            'title' => 'required|string',
            'price' => 'required|numeric',
            'waiting_for_programs' => 'required|string',
            'preview_image' => 'file|nullable',
            'main_image' => 'file|nullable',
            'duration_tour' => 'required|string',
            'begin_tour' => 'required',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
