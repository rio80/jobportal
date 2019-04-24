<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class LogLogin extends Model
{
    //
    use Uuids;

    protected $table = 'tb_trn_log_login';

    protected $fillable = [
        'id_user'
    ];
}
