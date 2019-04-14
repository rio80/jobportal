<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    // protected function validateLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         $this->username() => 'required|string',
    //         'password' => 'required|string',
    //     ]);
    // }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(
        Request $req
        // , $user
    ) {
        $cekLogin = (Auth::attempt(
            [
                'email' => $req->email,
                'password' => $req->password,
                'status_verifikasi' => 1,
            ]
            ));

        if ($cekLogin) {
        return redirect('dashboard');
            // The user is active, not suspended, and exists.
        }
        else{
            auth()->logout();
            return back()->with('warning', 'Akun kamu belum di aktivasi,
            buka link aktivasi kamu yang ada di email pendaftaran.');
        }
        // if($user->status_verifikasi !== '1'){
        //     auth()->logout();
        // return back()->with('warning', 'Akun kamu belum di aktivasi,
        // buka link aktivasi kamu yang ada di email pendaftaran.');
        // }
        // // return redirect()->intended($this->redirectPath());
        // return redirect('dashboard');


    }
}
