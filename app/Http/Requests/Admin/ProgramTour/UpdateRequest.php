<?php

namespace App\Http\Requests\Admin\ProgramTour;

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
            'description' => 'required|string',
            'begin_tour_banner' => 'required|string',
            'back_image' => 'file|nullable',
            'tour_id' => 'required|exists:tours,id'
        ];
    }
}
