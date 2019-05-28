<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormPengalamanRequest extends FormRequest
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
            'posisi' => 'required',
            'nama_perusahaan' => 'required',
            'id_jenis_perusahaan' => 'required',
            'id_jenis_pekerjaan' => 'required',
            'id_level_pekerjaan' => 'required',
            'bulan_awal' => 'required',
            'tahun_awal' => 'required',
            'bulan_akhir' => 'required',
            'tahun_akhir' => 'required',
            'tugas_tanggungjawab' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'posisi.required' => 'Mohon Isikan Posisi Anda Saat ini / Sebelumnya',
            'nama_perusahaan.required' => 'Mohon Isikan Nama Perusahaan Anda Saat ini / Sebelumnya',
            'id_jenis_perusahaan.required' => 'Silahkan Pilih Jenis Perusahaan',
            'id_jenis_pekerjaan.required' => 'Silahkan Pilih Bidang Pekerjaan',
            'id_level_pekerjaan.required' => 'Silahkan Pilih Jabatan',
            'bulan_awal.required' => 'Silahkan Pilih Awal Bulan Anda Bekerja',
            'tahun_awal.required' => 'Silahkan Pilih Awal Tahun Anda Bekerja',
            'bulan_akhir.required' => 'Silahkan Pilih Akhir Bulan Anda Bekerja',
            'tahun_akhir.required' => 'Silahkan Pilih Akhir Tahun Anda Bekerja',
            'tugas_tanggungjawab.required' => 'Silahkan Isi Tugas dan Tanggung Jawab Anda Selama Bekerja',
        ];
    }

}
