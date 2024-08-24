<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addPlacementRequest extends FormRequest
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
            'index' =>'required|unique:placements|min:12|max:12',
            'name' =>'required',
            'gender_id' =>'required',
            'aggregate' =>'required|numeric|max:54',
            'programme_id' =>'required|numeric',
            'status_id' =>'required',
            'track' =>'required|in:Single,Double',
        ];
    }
}
