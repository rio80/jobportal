<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;


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
        view()->composer('pelamar.pendidikan_form', function($view){
            $view->with('tingkat', DB::table('tb_mst_tingkat_pendidikan')->pluck('nama', 'id'));
        });
    }
}
