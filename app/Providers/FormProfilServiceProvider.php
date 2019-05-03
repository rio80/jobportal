<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Provinsi as prov;
use Illuminate\Support\Facades\View;

class FormProfilServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pelamar.form_profil', function($view){
            $view->with('provList', prov::select()->pluck('nama_prov', 'id_prov'));
            $view->with('stat_nikah', DB::table('tb_ref_statusnikah')->pluck('nama', 'id'));
            $view->with('stat_kerja', DB::table('tb_ref_statuskerja')->pluck('nama', 'id'));
            $view->with('jenis_identitas', DB::table('tb_ref_noidentitas')->pluck('nama', 'id'));
        });
    }
}
