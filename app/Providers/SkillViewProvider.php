<?php

namespace App\Providers;

use App\Models\Keterampilan;
use App\Models\Level;
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
            if (session('skill_edit_mode') == true) {
                // 'levels' disini adalah function relationship model Keterampilan
                $view->with('skill',
                    Keterampilan::whereHas('levels', function ($q) {
                        $q->where('id', session('skill_edit_id'));
                    })->get()
                );
            } else {
                $view->with('skill', Keterampilan::select('id', 'level', 'keterampilan')
                        ->get());

            }
            $view->with('level', Level::select()->pluck('nama', 'id'));

        });
    }
}
