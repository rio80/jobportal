<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $primary_key = 'id';
    protected $table = "tb_ref_riwayat_pendidikan_formal";

    protected $fillable = ['no_reg', 'jurusan', 'nama_institusi', 'tahun_lulus', 
                        'bidang_studi', 'id_tingkat'];

    public function tingkatPendidikan(){
        return $this->belongsTo('\App\Models\TingkatPendidikan', 'id_tingkat');
    }

}
