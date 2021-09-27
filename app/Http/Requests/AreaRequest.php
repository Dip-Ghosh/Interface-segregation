<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'location_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'location_id.required' => 'Select Any location',
            'name.required' => 'Area name is required!',
            'status.required' => 'Select an status',


        ];
    }
}
