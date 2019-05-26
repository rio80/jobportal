<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Pengalaman extends Model
{
    protected $table = "tb_ref_riwayat_pengalaman_kerja";

    protected $fillable = ['nama_perusahaan', 'jabatan', 'id_jenis_pekerjaan',
    'tugas_tanggungjawab', 'tanggal_gabung', 'tanggal_berhenti', 
    'status_bekerja', 'no_reg', 'id_jenis_perusahaan'];

    
    public function bidang(){
        return $this->belongsTo('App\Models\Bidang', 'id_jenis_pekerjaan');
    }

    public function getTanggalGabungAttribute($tanggal_gabung){
        $blnName = Carbon::parse($tanggal_gabung)->format('M');
        $thnName = Carbon::parse($tanggal_gabung)->format('Y');
        return $blnName. ' '.$thnName;
    }

    public function getTanggalBerhentiAttribute($tanggal_berhenti){
        $blnName = Carbon::parse($tanggal_berhenti)->format('M');
        $thnName = Carbon::parse($tanggal_berhenti)->format('Y');
        return $blnName. ' '.$thnName;
    }
}
