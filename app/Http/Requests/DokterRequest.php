<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
            'name'          => 'required|unique:users',
            'email'         => 'required|unique:users',
            'password'      => 'required',
            'gambar'        => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Masukan Nama Dokter',
            'name.unique'           => 'Nama Dokter Sudah Ada',
            'email.required'        => 'Masukan Email',
            'email.unique'          => 'Email Sudah Ada',
            'password.required'     => 'Masukkan Password',
            'gambar.required'       => 'Masukan Foto',
        ];
    }
}
