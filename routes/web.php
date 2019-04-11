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

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('resend-email', 'RegisterController@resendEmail')->name('resend-email');

Route::post('resend-email', 'RegisterController@resendEmail')->name('resend-email');

Route::get('reset-password', 'RegisterController@resetPassword')->name('reset-password');

Route::get('/', 'HomepageController@index');

// Route::get('/reset-password', 'HomepageController@index');

Route::get('generate-pdf', 'HomeController@generatePDF');

Route::get('/dashboard', 'PelamarController@index')->name('dashboard');

Route::get('/lowongan', 'LowonganController@index')->name('list-lowongan');

Route::group(['prefix' => 'register'], function () {

    Route::get('/', 'RegisterController@index')->name('register');

    Route::get('/pekerja', 'RegisterController@registerPekerja')->name('pekerja');

    Route::post('/insert-pekerja', 'RegisterController@insertRegisterPekerja')->name('insert-pekerja');

    Route::get('/perusahaan', 'RegisterController@registerPerusahaan')->name('perusahaan');

    Route::post('/insert-perusahaan', 'RegisterController@insertRegisterPerusahaan')->name('insert-perusahaan');

    Route::get('/verify/{token_verifikasi}', 'RegisterController@verifyUser') ->name('verify');
});


// Route::get('/isiemail', function(){
//     return view('registrasi_email');
// });

// Route::post('/sendmail', function(){
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
