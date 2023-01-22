<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreatmentRequest extends FormRequest
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
            'kategori_id'           => 'required',
            'dokter_id'             => 'required',
            'nama_treatment'        => 'required|unique:treatments',
            'harga'                 => 'required',
            'deskripsi'             => 'required',
            'gambar'                => 'required',
            'kuota'                 => 'required',

        ];
    }

    public function messages()
    {
        return [
            'kategori_id.required'          => 'Kategori Masih Kosong',
            'dokter_id.required'            => 'Dokter Masih Kosong',
            'nama_treatment.required'       => 'Masukan Nama Treatment',
            'harga.required'                => 'Masukan Harga Treatment',
            'nama_treatment.unique'         => 'Nama Treatment Sudah Ada',
            'deskripsi.required'            => 'Masukan Deskripsi Treatment',
            'gambar.required'               => 'Masukan gambar Treatment',
            'kuota.required'                => 'Masukan kuota Treatment',
        ];
        
    }
}
