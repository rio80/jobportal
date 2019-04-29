<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PelamarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        return view('pelamar.menu_pelamar');
    }

    public function print_cv(){
        return view('pelamar.print_cv');
    }

    public function lowongan_detail(){
        return view('pelamar.lowongan_detail');
    }

    public function pendidikan_form(){
        return view('pelamar.pendidikan_form');
    }

    public function pendidikan_view(){
        return view('pelamar.pendidikan_view');
    }

    public function profil(){
        return view('pelamar.form_profil');
    }

    public function pengalaman_short(){
        return view('pelamar.pengalaman_short');
    }

    public function pengalaman_long(){
        return view('pelamar.pengalaman_long');
    }

    public function pengalaman_view(){
        return view('pelamar.pengalaman_view');
    }

    public function menu_resume(){
        return view('pelamar.menu_pelamar');
    }
}
