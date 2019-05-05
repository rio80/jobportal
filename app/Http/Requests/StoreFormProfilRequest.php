<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormProfilRequest extends FormRequest
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
        if (strtolower($this->get('show_prov')) == 'kosong') {
            if ($this->get('propinsi_ktp') == '0') {
                $required_prov_ktp = 'required';
            }
            $required_prov_ktp = 'required';
        } else {
            $required_prov_ktp = '';
        }

        if (strtolower($this->get('show_prov_dom')) == 'kosong') {

            if ($this->get('propinsi_dom') == '0') {
                $required_prov_dom = 'required';
            }
            $required_prov_dom = 'required';

        } else {
            $required_prov_dom = '';
        }

        if (strtolower($this->get('show_kota')) == 'kosong') {
            if ($this->get('kota_ktp') == '0') {
                $required_kota_ktp = 'required';
            }
            $required_kota_ktp = 'required';
        } else {
            $required_kota_ktp = '';
        }

        if (strtolower($this->get('show_kota_dom')) == 'kosong') {
            if ($this->get('kota_dom') == '0') {
                $required_kota_dom = 'required';

            }
            $required_kota_dom = 'required';
        } else {
            $required_kota_dom = '';
        }

        if (strtolower($this->get('show_kec')) == 'kosong') {
            if ($this->get('kecamatan_ktp') == '0') {
                $required_kec_ktp = 'required';
            }
            $required_kec_ktp = 'required';
        } else {
            $required_kec_ktp = '';
        }

        if (strtolower($this->get('show_kec_dom')) == 'kosong') {
            if ($this->get('kecamatan_dom') == '0') {
                $required_kec_dom = 'required';
            }
            $required_kec_dom = 'required';
        } else {
            $required_kec_dom = '';
        }

        if (strtolower($this->get('show_kel')) == 'kosong') {
            if ($this->get('kelurahan_ktp') == '0') {
                $required_kel_ktp = 'required';

            }
            $required_kel_ktp = 'required';
        } else {
            $required_kel_ktp = '';
        }

        if (strtolower($this->get('show_kel_dom')) == 'kosong') {
            if ($this->get('kelurahan_dom') == '0') {
                $required_kel_dom = 'required';
            }
            $required_kel_dom = 'required';
        } else {
            $required_kel_dom = '';
        }

        return [
            //
            'namalengkap' => 'required|string|max:100',
            'nohp_wa' => 'required|numeric',
            'uploadfoto' => 'required|sometimes|image|max:500|mimes:jpeg,jpg,bmp,png',
            // 'nohp' => 'required|numeric',
            'alamatktp1' => 'required|string',
            'kodeposktp' => 'required|string|size:5',
            'alamatdomisili1' => 'required|string',
            'kodeposdom' => 'required|string|size:5',
            'email1' => 'required|email',
            'email2' => 'required|email',
            'propinsi_ktp' => $required_prov_ktp,
            'kota_ktp' => $required_kota_ktp,
            'kecamatan_ktp' => $required_kec_ktp,
            'kelurahan_ktp' => $required_kel_ktp,
            'propinsi_dom' => $required_prov_dom,
            'kota_dom' => $required_kota_dom,
            'kecamatan_dom' => $required_kec_dom,
            'kelurahan_dom' => $required_kel_dom,
            'jenis_identitas' => 'required',
            'no_identitas' => 'required|numeric',
            'statusnikah' => 'required',
            'statusbekerja' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'namalengkap.required' => 'Mohon isikan nama lengkap anda',

            'nohp_wa.required' => 'Mohon isikan No HP anda',
            'nohp_wa.numeric' => 'Isikan No Hp dengan Angka',

            'uploadfoto.required' => 'Mohon Upload Foto Anda',
            'uploadfoto.image' => 'Kolom Foto hanya boleh berisi file gambar',
            'uploadfoto.max' => 'Kolom Foto tidak boleh lebih dari 500 Kb',
            'uploadfoto.mimes' => 'Kolom Foto hanya boleh diisi file *.jpg, *.jpeg, *.bmp, *.png',

            // 'nohp.required' => 'Mohon Isikan No Hp Anda',
            // 'nohp.numeric' => 'Isikan No Hp dengan Angka',

            'alamatktp1.required' => 'Mohon isikan Alamat KTP anda',

            'kodeposktp.required' => 'Mohon isikan Kode Pos KTP anda',
            'kodeposktp.size' => 'Jumlah digit Kode Pos KTP harus :size digit',

            'alamatdomisili1' => 'Mohon isikan alamat domisili anda',

            'kodeposdom.required' => 'Mohon isikan Kode Pos Domisili anda',
            'kodeposdom.size' => 'Jumlah digit Kode Pos Domisili harus :size digit',

            'email1.required' => 'Mohon isikan email anda',
            'email1.email' => 'Format email tidak sesuai',

            'email2.required' => 'Mohon isikan email anda',
            'email2.email' => 'Format email tidak sesuai',

            'propinsi_ktp.required' => 'Mohon Pilih Provinsi sesuai KTP',

            'kota_ktp.required' => 'Mohon Pilih Kota sesuai KTP',

            'kecamatan_ktp.required' => 'Mohon Pilih Kecamatan sesuai KTP',

            'kelurahan_ktp.required' => 'Mohon Pilih Kelurahan sesuai KTP',

            'propinsi_dom.required' => 'Mohon Pilih Provinsi sesuai Domisili',

            'kota_dom.required' => 'Mohon Pilih Kota sesuai Domisili',

            'kecamatan_dom.required' => 'Mohon Pilih Kecamatan sesuai Domisili',

            'kelurahan_dom.required' => 'Mohon Pilih Kelurahan sesuai Domisili',

            'jenis_identitas.required' => 'Mohon Pilih Jenis Identitas anda',

            'no_identitas.required' => 'Mohon masukan No Identitas anda',
            'no_identitas.numeric' => 'Isikan no identitas anda dengan angka',

            'statusnikah.required' => 'Mohon Pilih Status Nikah anda',

            'statusbekerja.required' => 'Mohon Pilih Status Bekerja anda',

            'deskripsi.required' => 'Mohon Masukan Deskripsi Anda',
        ];
    }
}
