<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
class HomepageController extends Controller
{
    public function index(){
        Alert::success('Welcome', 'Demo success alert')->persistent("Ok");
        return view('index');
    }
}
