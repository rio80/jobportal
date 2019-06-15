<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PendNonFormal extends Model
{
    //
    protected $table = 'tb_ref_riwayat_pendidikan_informal';

    public function getTanggalMulaiAttribute($value){
        $bulan = Carbon::parse($value)->format('m');
        $tahun = Carbon::parse($value)->format('Y');

        return $tahun.'-'.$bulan;
    }

    public function getTanggalSelesaiAttribute($value){
        $bulan = Carbon::parse($value)->format('m');
        $tahun = Carbon::parse($value)->format('Y');

        return $tahun.'-'.$bulan;
    }

}
