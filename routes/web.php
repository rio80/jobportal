<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('generate-pdf', 'HomeController@generatePDF');

Route::get('/', 'LoginController@index');

Route::get('login', 'LoginController@login');

Route::get('/dashboard', 'PelamarController@index')->name('dashboard');

Route::group(['prefix' => 'register'], function () {

    Route::get('/', 'RegisterController@index')->name('register');

    Route::get('/pekerja', 'RegisterController@registerPekerja')->name('pekerja');

    Route::get('/perusahaan', 'RegisterController@registerPerusahaan')->name('perusahaan');
});

// Route::get('/', function(){
//     return view('registrasi');
// });

// Route::post('/registrasi', function(){
//     $email = Request::input('email');
//     $registrasi = Request::input('nama');
//     Mail::to($email)->send(new App\Mail\RegistrasiEmail($registrasi));
//     return 'Registrasi Berhasil!';
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
