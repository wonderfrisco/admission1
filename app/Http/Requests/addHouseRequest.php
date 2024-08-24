<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addHouseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required|unique:houses',
            'number_id' =>'required|max:1',
            'size' =>'required|numeric',
            'gender_id' =>'required',
            'color_id' =>'required'
        ];
    }
}
