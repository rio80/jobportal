<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
class MenuPelamarProvider extends ServiceProvider
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
        $halaman = '';
        if(Request::segment(1) == 'pengalaman_view'){
            $halaman = 'exp_view';
        }
        if(Request::segment(1) == 'pendidikan_view'){
            $halaman = 'edu_view';
        }
        if(Request::segment(1) == 'profil'){
            $halaman = 'profil';
        }

        view()->share('halaman', $halaman);
    }
}
