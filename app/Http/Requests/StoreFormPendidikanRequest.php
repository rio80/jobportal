<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePendidikanRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_institusi' => 'required',
            'tahun_lulus' => 'required',
            'id_tingkat' => 'required',
            'bidang_studi' => 'required',
            'jurusan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_institusi.required' => 'Mohon Isikan Nama Institusi Anda',
            'tahun_lulus.required' => 'Mohon Pilih Tahun Lulus Anda',
            'id_tingkat.required' => 'Mohon Pilih Tingkat Pendidikan Anda',
            'bidang_studi.required' => 'Mohon Isikan Bidang Studi Anda',
            'jurusan.required' => 'Mohon Isikan Jurusan Anda',
        ];
    }
}
