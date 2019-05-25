<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table = "tb_ref_riwayat_pengalaman_kerja";

    protected $fillable = ['nama_perusahaan', 'jabatan', 'id_jenis_pekerjaan',
    'tugas_tanggungjawab', 'tanggal_gabung', 'tanggal_berhenti', 
    'status_bekerja', 'no_reg', 'id_jenis_perusahaan'];

    

}
