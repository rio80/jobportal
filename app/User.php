<?php

namespace App;

use App\Notifications\MyOwnResetPassword;
use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements MustVerifyEmail
{
    use Uuids;
    use Notifiable;

    public $incrementing = false;
    protected $primaryKey = "id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tipe'
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
        $str_random = str_random(8);
        $user = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $str_random,
        ];
        $userUpdate = User::where('email',$this->email)->first();
        $userUpdate->password = Hash::make($str_random);
        $userUpdate->save();

        $this->notify(new MyOwnResetPassword($user));

    }


    // ===================================================
    // Bagian Role Based
    // ===================================================
    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }

    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();

        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->cekUserRole($need_role)) {
                    return true;
                }
            }
        } else{
            return $this->cekUserRole($roles);
        }
        return false;
    }
    private function getUserRole()
    {
       return $this->role()->getResults();
    }

    private function cekUserRole($role)
    {
        return (strtolower($role)==strtolower($this->have_role->nama)) ? true : false;
    }
    // ===================================================
    // End Role Based
    // ===================================================
}
