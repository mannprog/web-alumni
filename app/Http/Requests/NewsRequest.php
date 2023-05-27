<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'judul.required' => 'Judul berita harus diisi',
            'judul.max' => 'Judul berita tidak bisa lebih dari 50 karakter',
            'isi.required' => 'Isi berita harus diisi',
            'isi.max' => 'Isi berita tidak bisa lebih dari 255 karakter',
        ];
    }
}
