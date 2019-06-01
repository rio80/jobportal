<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TingkatPendidikan extends Model
{
    protected $primary_key = 'id';

    protected $table = "tb_mst_tingkat_pendidikan";

    protected $fillable = ['nama'];

    public function Pendidikan(){
        return $this->hasMany('\App\Models\Pendidikan', 'id');
    }
}
