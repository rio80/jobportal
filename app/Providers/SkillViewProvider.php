<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SkillViewProvider extends ServiceProvider
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
        view()->composer('pelamar.skill_form', function ($view) {
            $view->with('level', \App\Models\Level::select()->pluck('nama', 'id'));
            $view->with('skill', \App\Models\Keterampilan::select('id', 'level', 'keterampilan')->get());

        });
    }
}
