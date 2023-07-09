<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nama' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama kategori lowongan harus diisi',
            'nama.max' => 'Nama kategori lowongan tidak boleh lebih dari 255 karakter',
        ];
    }
}
