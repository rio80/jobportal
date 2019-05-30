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



Route::group(['prefix' => 'dynamic-dependent'], function () {
    Route::get('/', 'LatDynamicDependentController@index')->name('dynamic-dependent');
    

});
Route::get('/', 'HomepageController@index');

Route::get('showProv', 'HomepageController@showProv')->name('show-prov');

// Route::get('/reset-password', 'HomepageController@index');

Route::get('generate-pdf', 'HomeController@generatePDF');

Route::get('/lowongan', 'LowonganController@index')->name('list-lowongan');

Route::group(['prefix' => 'register'], function () {

    Route::get('/', 'RegisterController@index')->name('register');

    Route::get('/pekerja', 'RegisterController@registerPekerja')->name('pekerja');

    Route::post('/insert-pekerja', 'RegisterController@insertRegisterPekerja')->name('insert-pekerja');

    Route::get('/perusahaan', 'RegisterController@registerPerusahaan')->name('perusahaan');

    Route::post('/insert-perusahaan', 'RegisterController@insertRegisterPerusahaan')->name('insert-perusahaan');

    Route::get('/verify/{token_verifikasi}', 'RegisterController@verifyUser')->name('verify');

    Route::get('/resend-email', 'RegisterController@resendEmail')->name('resend-email');

    Route::post('/resend-email', 'RegisterController@resendEmail')->name('resend-email');

    Route::get('reset-password/{email}', 'RegisterController@resetPassword')->name('reset-password');

    Route::post('reset-password/', 'RegisterController@resetPassword')->name('reset-send');

});

Route::group(['middleware' => ['web', 'auth', 'roles']], function () {
    Route::group(['roles' => 'admin'], function () {

    });
    Route::group(['roles' => 'pelamar'], function () {
        Route::get('/dashboard/{iduser}', 'PelamarController@index')->name('dashboard');
        Route::get('/print_cv','PelamarController@print_cv')->name('print_cv');
        Route::get('/lowongan_detail','PelamarController@resume')->name('lowongan_detail');
        Route::get('/pendidikan_new','PelamarController@pendidikan_new')->name('pendidikan_new');
        Route::get('/pendidikan_view','PelamarController@pendidikan_view')->name('pendidikan_view');
        Route::get('/profil/{iduser}/edit','PelamarController@profil')->name('profil');
        Route::get('/pengalaman','PelamarController@pengalaman_create')->name('pengalaman_create');

        Route::get('/pengalaman_view','PelamarController@pengalaman_view')->name('pengalaman_view');
        Route::get('/menu_pelamar','PelamarController@menu_resume')->name('menu_pelamar');
        Route::post('/fetch_lokasi', 'PelamarController@fetch_lokasi')->name('fetch_lokasi');
        Route::patch('/insert-profil', 'PelamarController@insertProfil')->name('insert-profil');
        Route::post('/insert-pengalaman','PelamarController@insertPengalaman')->name('insert-pengalaman');
        Route::post('/insert-pendidikan','PelamarController@pendidikanInsert')->name('insert-pendidikan');

        Route::get('/pengalaman/{exp}/edit','PelamarController@editPengalaman')->name('editPengalaman');
        Route::patch('/pengalaman/{exp}', 'PelamarController@updatePengalaman');
        Route::get('/pendidikan/{edu}/edit', 'PelamarController@pendidikanEdit');
        Route::patch('/pendidikan/{edu}', 'PelamarController@pendidikanUpdate');


    });
    Route::group(['roles' => 'pengusaha'], function () {

    });
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
