<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'preview_content' => 'required|string|max:65535',
            'content' => 'required|string|max:65535',
            'active' => 'nullable|boolean',
            'publication_date' => 'required|date',
            'categories' => 'required|array|exists:categories,id',
        ];
    }
}
