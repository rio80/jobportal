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
        return view('dashboard');
    }
}
