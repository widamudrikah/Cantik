<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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
            'nama'                  => 'required',
            'no_hp'                 => 'required',
            'umur'                  => 'required',
            'treatment_id'          => 'required',
            'alamat'                => 'required',
            'keluhan'               => 'required',
            'tanggal_reservasi'     => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nama.required'                 => 'Namamu Masih Kosong',
            'no_hp.required'                => 'Nomor HP mu Masih Kosong',
            'umur.required'                 => 'Umurmu Masih Kosong',
            'treatment_id.required'         => 'Kamu Belum Milih Treatment',
            'alamat.required'               => 'Alamatmu Masih Kosong',
            'keluhan.required'              => 'Keluhanmu Belum Ada',
            'tanggal_reservasi.required'    => 'Tanggal Reservasi Masih Kosong',
        ];
    }
}
