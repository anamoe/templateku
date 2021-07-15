<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_role', 'nama', 'username', 'email', 'password', 'foto'
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
        'email_verified_at' => 'datetime',
    ];


    public function isUser(){

        if($this->id_role == 2){
            return true;
        }
            return false;
    }
    public function isAdmin(){

        if($this->id_role == 1){
            return true;
        }
            return false;
    }

    public function ambilFotoProfile()
    {
        if(!$this->foto){
            return asset('Images/Profile/a.png');
        }else{
            return asset('Images/Profile/'.$this->foto);
        }
    }
}
