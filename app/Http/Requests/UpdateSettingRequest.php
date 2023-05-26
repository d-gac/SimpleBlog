<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'about_title' => ['required', 'string', 'max:64'],
            'about_content' => ['required', 'string', 'max:16384'],
            'contact_title' => ['required', 'string', 'max:64'],
            'contact_content' => ['required', 'string', 'max:16384'],
            'custom_css' => ['nullable', 'string', 'max:16384'],
        ];
    }
}
