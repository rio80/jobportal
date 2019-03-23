<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('registrasi');
    }

    public function registerPekerja(){
        return view('register-pekerja');
    }

    public function registerPerusahaan(){
        return view('register-perusahaan');
    }
}
