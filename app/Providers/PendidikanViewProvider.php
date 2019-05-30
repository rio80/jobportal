<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class PendidikanViewProvider extends ServiceProvider
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
        view()->composer('pelamar.pendidikan_form', function ($view) {

            $tahuns = [];
            for ($tahun = date('Y') - 50; $tahun <= date('Y'); $tahun++) {
                $tahuns[$tahun] = $tahun;
            }

            $view->with('tingkat', DB::table('tb_mst_tingkat_pendidikan')->pluck('nama', 'id'));
            $view->with('tahuns', $tahuns);
        });
    }
}
