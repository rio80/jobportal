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
        $reqSegmentMenu = Request::segment(1);

        if ($reqSegmentMenu == 'pengalaman_view' ||
            $reqSegmentMenu == 'pengalaman') {
            $halaman = 'exp_view';
        }

        if ($reqSegmentMenu == 'pendidikan_view' ||
            $reqSegmentMenu == 'pendidikan_new' ||
            $reqSegmentMenu == 'pendidikan') {
            $halaman = 'edu_view';
        }

        if ($reqSegmentMenu == 'profil') {
            $halaman = 'profil';
        }

        if ($reqSegmentMenu == 'skill_view' ||
            $reqSegmentMenu == 'skill_create') {
            $halaman = 'skill_view';
        }

        view()->share('halaman', $halaman);
    }
}
