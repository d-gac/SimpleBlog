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
//        dd($this);
        return [
            'is_visible_twitter' => ['nullable', 'boolean'],
            'is_visible_facebook' => ['nullable', 'boolean'],
            'is_visible_github' => ['nullable', 'boolean'],
            'is_visible_linkedin' => ['nullable', 'boolean'],
            'is_visible_youtube' => ['nullable', 'boolean'],
            'twitter' => ['nullable', 'required_if:is_visible_twitter,1', 'url', 'max:1024'],
            'facebook' => ['nullable', 'required_if:is_visible_facebook,1', 'url', 'max:1024'],
            'github' => ['nullable', 'required_if:is_visible_github,1', 'url', 'max:1024'],
            'linkedin' => ['nullable', 'required_if:is_visible_linkedin,1', 'url', 'max:1024'],
            'youtube' => ['nullable', 'required_if:is_visible_youtube,1', 'url', 'max:1024'],
        ];
    }
}
