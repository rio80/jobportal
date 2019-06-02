<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    protected $table = "tb_mst_keahlian";

    protected $primary_key = "id";

    protected $fillable = [
        "no_reg", "level", "keterampilan",
    ];

    public function levels(){
        return $this->belongsTo('\App\Models\Level', 'level');
    }
}
