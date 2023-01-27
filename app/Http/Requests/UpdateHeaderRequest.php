<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeaderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'webTitle' => ['nullable', 'required_if:is_visible_webTitle,1', 'string', 'max:255'],
            'banner_title' => ['nullable', 'string', 'max:255'],
            'banner_paragraph' => ['nullable', 'string', 'max:255'],
            'banner_photo' => ['nullable', 'file', 'max:8192'],
            'is_visible_webTitle' => ['nullable', 'boolean'],
            'is_visible_about' => ['nullable', 'boolean'],
            'is_visible_contact' => ['nullable', 'boolean'],
        ];
    }
}
