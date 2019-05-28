<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table = "tb_ref_riwayat_pengalaman_kerja";

    protected $fillable = ['posisi','nama_perusahaan', 'id_level_pekerjaan', 'id_jenis_pekerjaan',
        'tugas_tanggungjawab', 'tanggal_gabung', 'tanggal_berhenti',
        'status_bekerja', 'no_reg', 'id_jenis_perusahaan',
        'diff_date'];

    // Attribute diff_date adalah tambahan sendiri, untuk membuat selisih 
    

    public function bidang()
    {
        return $this->belongsTo('App\Models\Bidang', 'id_jenis_pekerjaan');
    }

    public function industri()
    {
        return $this->belongsTo('App\Models\Industri', 'id_jenis_perusahaan');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan', 'id_level_pekerjaan');
    }

    public function getTanggalGabungAttribute($tanggal_gabung)
    {
        $blnName = Carbon::parse($tanggal_gabung)->format('M');
        $thnName = Carbon::parse($tanggal_gabung)->format('Y');
        return $blnName . ' ' . $thnName;
    }

    public function getTanggalBerhentiAttribute($tanggal_berhenti)
    {
        $blnName = Carbon::parse($tanggal_berhenti)->format('M');
        $thnName = Carbon::parse($tanggal_berhenti)->format('Y');
        return $blnName . ' ' . $thnName;
    }

    public function getDiffDateAttribute($diff_date)
    {
        $cetak = "";
        $join_date = date_create($this->tanggal_gabung);
        $end_date = date_create($this->tanggal_berhenti);

        $diffTahun = date_diff($join_date, $end_date)->y;
        if ($diffTahun !== 0) {
            $cetak = $diffTahun . ' Tahun ';
        }

        $diff_bulan = date_diff($join_date, $end_date)->m + 1;
        $cetak .= $diff_bulan. ' Bulan';
        return $cetak;
    }
}
