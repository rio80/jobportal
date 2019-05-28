<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table = "tb_ref_perusahaan_jenis";

    public function pengalaman(){
        return $this->hasMany('App\Models\Pengalaman', 'id');
    }
}
