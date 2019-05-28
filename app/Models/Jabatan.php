<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "tb_ref_pekerjaan_level";

    public function Pengalaman(){
        return $this->hasMany('App\Models\Pengalaman', 'id');
    }
}
