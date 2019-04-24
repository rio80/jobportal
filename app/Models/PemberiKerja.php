<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;


class PemberiKerja extends Model
{
    //
    use Uuids;

    protected $table = 'tb_mst_pemberikerja';

    protected $fillable = [
        'id', 'nama_pemberikerja', 'jenis', 'no_ktp', 'no_tdp', 'alamat', 'kode_prov',
        'kode_kota', 'kode_kec', 'kode_kel', 'email1', 'email2', 'telp1', 'telp2',
        'foto', 'deskripsi', 'password',
    ];
}
