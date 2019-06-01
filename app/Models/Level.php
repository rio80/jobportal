<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = "tb_ref_level";

    protected $fillable = ["nama"];

    public function keterampilan(){
        return $this->hasMany('\App\Models\Keterampilan', 'id');
    }
}
