<?php

namespace App\Http\Requests\Admin\Tour;

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
            'title' => 'required|string|unique:tours',
            'price' => 'required|numeric',
            'waiting_for_programs' => 'required|string|unique:tours',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'duration_tour' => 'required|string',
            'begin_tour' => 'required',
            'category_id' => 'required|exists:categories,id',
            'guid_id' => 'required|exists:guides,id'
        ];
    }
}
