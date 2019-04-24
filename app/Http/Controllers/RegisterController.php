<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use \App\Mail\RegistrasiEmail;
use \App\Models\Pelamar;
use \App\Models\PemberiKerja;
use \App\Models\Registrasi;
use \App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.registrasi');
    }

    public function registerPekerja()
    {
        return view('register.pekerja');
    }

    public function resetPassword($email = null, Request $req)
    {
        if ($req->isMethod('post')) {

            $cekUser = User::where('email', $req->email)->first();
            // Membandingkan inputan User dengan Password Hashing di table users
            if (Hash::check($req->password_reset, $cekUser->password_old)) {
                $pass_new = $req->password_baru;
                $cekUser->password_old = $cekUser->password;
                $cekUser->password = Hash::make($pass_new);
                $cekUser->save();
            } else {
                return view('reset-password')->with('email', $req->email);
            }
            return redirect()->route('login');
        }
        return view('reset-password')->with('email', $email);

        // ->where('password',$req->password_reset)

    }

    public function insertRegisterPekerja(Request $req)
    {
        // dd($request->all());
        $tipe = 1;
        $nama = $req->nama;
        $no_telp = $req->no_telp;
        $email = $req->email1;
        $password = $req->password;
        $insert = Pelamar::create([
            'nama' => $nama,
            'email1' => $email,
            'telp1' => $no_telp,
        ]);

        $user = User::create([
            'name' => $nama,
            'email' => $email,
            'password' => Hash::make($password),
            'role_id' => $tipe,
        ]);

        $insertRegister = Registrasi::create([
            'user_id' => $user->id,
            'token_verifikasi' => sha1(time()),
        ]);
        $this->sendEmail($insert, $email, $insertRegister);

        return redirect('login');

    }

    public function resendEmail(Request $req)
    {

        if ($req->isMethod('post')) {

            $cekStatus = User::where('email', $req->email)->first();

            if (!isset($cekStatus)) {

                alert()->error(
                    'Email Tersebut tidak Terdaftar',
                    'Verifikasi Email')
                    ->persistent('Close');

                return view('resend-email');

            } else if ($cekStatus->status_verifikasi == 1) {

                alert()->info(
                    'Email Anda sudah Aktif',
                     'Verifikasi Email')
                     ->persistent('Close');

                return view('resend-email');

            } else {

                $getToken = Registrasi::where('user_id', $cekStatus->id)->first();
                \Mail::to($req->email)->send(new RegistrasiEmail($getToken));
                return redirect('login');
            }
        } else {
            return view('resend-email');

        }
    }

    public function sendEmail($insert, $email, $insertRegister)
    {
        if ($insert) {
            \Mail::to($email)->send(new RegistrasiEmail($insertRegister));
        }
    }

    public function verifyUser($token)
    {
        $verifyUser = Registrasi::where('token_verifikasi', $token)->first();
        if (isset($verifyUser)) {
            $status = $verifyUser->user->status_verifikasi;
            if ($status !== "1") {
                $verifyUser->user->status_verifikasi = "1";
                $verifyUser->user->email_verified_at = time();
                $verifyUser->user->save();
                $verifyUser->save();
                $status = "Email Kamu sudah disetujui, sekarang kamu dapat Login.";
            }
        } else {
            return redirect('/login')->with('warning', "Maaf, Email tidak bisa di identifikasi");
        }
        return redirect('/login')->with('status', $status);
    }

    public function registerPerusahaan()
    {
        return view('register.perusahaan');
    }

    public function insertRegisterPerusahaan(Request $req)
    {
        $nama = $req->nama;
        $no_telp = $req->no_telp;
        $email = $req->email;
        $password = $req->password;
        $tipe = 2;
        $insert = PemberiKerja::create([
            'nama_pemberikerja' => $nama,
            'email1' => $email,
            'telp1' => $no_telp,
            'password' => $password,
        ]);

        if ($insert) {
            return $this->registerPerusahaan();
        } else {
            echo "Register Perusahaan Gagal";
        }
    }
}
