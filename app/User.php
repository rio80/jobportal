<?php

namespace App;

use App\Notifications\MyOwnResetPassword;
use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Uuids;
    use Notifiable;

    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'email_verified_at' => 'datetime',

    ];

    public function verifyUser()
    {
        return $this->hasOne('App\Registrasi');
    }

    public function sendPasswordResetNotification($token)
    {
        $user = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => str_random(8),
        ];
        $userUpdate = User::where('email',$this->email)->first();
        $userUpdate->password = $user['password'];
        $userUpdate->save();

        $this->notify(new MyOwnResetPassword($user));

    }
}
