<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusNikah extends Model
{
    protected $table = 'tb_ref_statusnikah';

    public function Pelamar(){
        return $this->hasMany('\App\Models\Pelamar', 'id');
    }
}
