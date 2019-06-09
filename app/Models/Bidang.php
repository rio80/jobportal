<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $table = "tb_ref_pekerjaan_jenis";

    public function pengalaman(){
        return $this->hasMany('App\Models\Pengalaman', 'id');
    }

    public function pelamar()
    {
        return $this->belongsToMany('App\Models\Pelamar', 'tb_ref_pekerjaan_jenis_trn', 'id_pekerjaan_jenis', 'id_pelamar');
    }

}
