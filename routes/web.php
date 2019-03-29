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


Route::get('/','LoginController@index');

Route::get('login','LoginController@login');

Route::get('dashboard','LoginController@dashboard');

Route::get('register','RegisterController@index');

Route::get('register-pekerja','RegisterController@registerPekerja');

Route::get('register-perusahaan','RegisterController@registerPerusahaan');

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
