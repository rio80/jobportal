<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use Uuids;

    public $incrementing = false;
    public $keyType = 'string';

    protected $primary_key = 'id';

    protected $table = 'tb_mst_pelamar';

    protected $fillable = [
        'no_reg', 'no_ktp', 'nama', 'tanggal_lahir', 'jenis_kelamin',
        'alamat_ktp1', 'alamat_ktp2', 'kode_prov_ktp', 'kode_kota_ktp',
        'kode_kec_ktp', 'kode_kel_ktp', 'alamat_domisili1', 'alamat_domisili2',
        'kode_prov', 'kode_kota', 'kode_kec', 'kode_kel',
        'status_nikah', 'status_bekerja', 'telp1', 'telp_wa',
        'email1','email2', 'pasfoto', 'deskripsi_diri',
        'jenis_identitas', 'no_identitas', 'kodepos_ktp', 'kodepos_domisili',
    ];

    public function bidang()
    {
        return $this->belongsToMany(
            'App\Models\Bidang',
            'tb_ref_pekerjaan_jenis_trn',
            'id_pelamar',
            'id_pekerjaan_jenis');
    }

    public function statusNikah()
    {
        return $this->belongsTo('\App\Models\StatusNikah', 'status_nikah');
    }

    public function statusKerja()
    {
        return $this->belongsTo('\App\Models\StatusKerja', 'status_bekerja');
    }

    public function getNamaAttribute($value)
    {
        return ucwords($value);
    }

    public function getJenisKelaminAttribute($value)
    {
        switch ($value) {
            case 'L':
                return "Laki-laki";
                break;

            case 'P':
                return "Perempuan";
                break;
            default:
                # code...
                break;
        }
    }

}
