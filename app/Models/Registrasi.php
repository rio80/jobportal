<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Registrasi extends Model
{
    //
    use Uuids;
    protected $guarded = [];

    protected $table = "tb_ref_registrasi";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
