<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class PengalamanViewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
        view()->composer('pelamar.pengalaman_long', function ($view) {
            $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

            $tahuns = [];
            for ($tahun = date('Y') - 50; $tahun <= date('Y'); $tahun++) {
                $tahuns[$tahun] = $tahun;
            }

            $view->with('industri', DB::table('tb_ref_perusahaan_jenis')->pluck('jenis_perusahaan', 'id'));
            $view->with('bidang', DB::table('tb_ref_pekerjaan_jenis')->pluck('jenis_pekerjaan', 'id'));
            $view->with('jabatan', DB::table('tb_ref_pekerjaan_level')->pluck('level_pekerjaan', 'id'));
            $view->with('bulan', $bulan);
            $view->with('tahuns', $tahuns);
        });
    }
}
