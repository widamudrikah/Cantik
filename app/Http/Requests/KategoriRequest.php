<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
            'nama_kategori'     => 'required|unique:kategoris',
            'gambar'            => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_kategori.required'            => 'Masukan Nama Kategori',
            'nama_kategori.unique'              => 'Nama Kategori Sudah Ada',
            'gambar.required'                   => 'Masukan gambar',
        ];
    }
}
