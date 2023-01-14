<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username', 
        'no_tlp',
        'kelas', 
        'reguler', 
        'roles', 
        'passwordtwo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'passwordtwo'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPasswordCAttribute()
    {
        if ($this->passwordtwo !== null) {
            return Crypt::decryptString($this->passwordtwo);
        } else {
            return "password kosong";
        }
    }
    public function getJadwalAttribute()
    {
       if($this->reguler === 'A'){
           return "Rabu, 18 Januari 2023. Pukul 08.00 - 15.00 WIB";
       }elseif($this->reguler === 'B'){
        return "Kamis, 19 Januari 2023. Pukul 08.00 - 15.00 WIB";
       }else{
        return "Jum'at, 20 Januari 2022. Pukul 08.00 - 15.00 WIB";
       }
    }

    protected $appends = ['password_c', 'jadwal'];

    public function suara(){
        return $this->hasMany('App\Models\Suara');
    }
}