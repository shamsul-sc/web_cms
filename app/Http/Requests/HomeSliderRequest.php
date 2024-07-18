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
            'slider_text_last'  => 'nullable|string|max:255',
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'alt_tag'           => 'nullable|required_with:image|string|max:255',
            'button_text'       => 'nullable|string',
            'button_url'        => 'nullable|url|required_with:button_text',
            'position'          => 'required|integer|digits_between:1,99',
            'status'            => 'required|in:show,hide',
        ];
    }
}
