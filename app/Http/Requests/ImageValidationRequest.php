<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageValidationRequest extends FormRequest
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
            'registration_number' => 'image|mimes:jpeg,png,jpg,gif,svg |nullable',
            'fitness_certificate' => 'image|mimes:jpeg,png,jpg,gif,svg |nullable',
            'tax_token' => 'image|mimes:jpeg,png,jpg,gif,svg |nullable',
            'car_image' => 'image|mimes:jpeg,png,jpg,gif,svg |nullable',
            'driving_license' => 'image|mimes:jpg,jpeg,png,gif,svg |nullable'
        ];
    }
}
