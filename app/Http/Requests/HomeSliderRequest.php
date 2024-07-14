<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeSliderRequest extends FormRequest
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
            'slider_text_top'   => 'required|string|max:100',
            'slider_text_middle'=> 'required|string|max:100',
            'slider_text_last'  => 'string|max:255|nullable',
            'image'             => 'required',
            'alt_tag'           => 'required',
            'button_text'       => 'string|nullable',
            'button_url'        => 'required_with:button_text',
            'position'          => 'integer|digits_between:1,99'
        ];
    }
}
