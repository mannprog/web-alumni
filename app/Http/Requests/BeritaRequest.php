<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|max:50',
            'isi' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'News title required',
            'judul.max' => 'News title should be no longer than 50 characters',
            'isi.required' => 'News content required',
            'isi.max' => 'News content should be no longer than 255 characters',
        ];
    }
}
