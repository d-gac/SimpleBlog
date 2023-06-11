<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreInstanceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'domain' => 'required|regex:/^[a-zA-Z0-9- ]+$/|max:42',
            'domain_slug' => 'required|string|max:512',
            'active' => 'nullable|boolean',
            'description' => 'required|string|max:1024',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'domain_slug' => Str::slug($this->domain).'.'.env('APP_URL_ONLY', 'localhost')
        ]);
    }
}
