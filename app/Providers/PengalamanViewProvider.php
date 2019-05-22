<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;


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
        view()->composer('pelamar.pengalaman_long', function($view){
            $view->with('industri', DB::table('tb_ref_perusahaan_jenis')->pluck('jenis_perusahaan', 'kode_jenis'));
            $view->with('bidang', DB::table('tb_ref_pekerjaan_jenis')->pluck('jenis_pekerjaan', 'kode_jenis'));
            $view->with('jabatan', DB::table('tb_ref_pekerjaan_level')->pluck('level_pekerjaan', 'kode_level'));
        });
    }
}
