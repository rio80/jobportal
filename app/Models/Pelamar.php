<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use Uuids;

    protected $table = 'tb_mst_pelamar';

    protected $fillable = [
        'id', 'no_reg', 'no_ktp', 'nama', 'tanggal_lahir', 'jenis_kelamin',
        'alamat_ktp1', 'alamat_ktp2', 'kode_prov_ktp', 'kode_kota_ktp',
        'kode_kec_ktp', 'kode_kel_ktp', 'alamat_domisili1', 'alamat_domisili2',
        'kode_prov', 'kode_kota', 'kode_kec', 'kode_kel', 'status_nikah', 'status_bekerja',
        'telp1', 'telp_wa', 'email1', 'email2', 'pasfoto', 'deskripsi_diri', 'password'
    ];
}
