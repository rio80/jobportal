<?php

namespace App\Http\Controllers;

use Alert;

class HomepageController extends Controller
{
    public function index()
    {
        alert()->success('Success Message', 'Optional Title');
        return view('index');
    }
}
