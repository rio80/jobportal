<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusKerja extends Model
{
    protected $table = "tb_ref_statuskerja";

    public function Pelamar(){
        return $this->hasMany('\App\Models\Pelamar', 'id');
    }
}
