<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Import Db user yang TDK LOGIN
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    // Relasi One to one (About)
    public function about()
    {
        return $this->hasOne('App\Models\About');
    }

    // Relasi one to many (Hobby)
    public function hobbies()
    {
        return $this->hasMany('App\Models\Hobby');
    }

    // Relasi one to many (Motivation)
    public function motivations()
    {
        return $this->hasMany('App\Models\Motivation');
    }

    // Relasi one to many (Portofolio)
    public function portofolios()
    {
        return $this->hasMany('App\Models\Portofolio');
    }

    // Relasi One to one (Contact)
    public function contact()
    {
        return $this->hasOne('App\Models\Contact');
    }

    // -----------------------AUTH ADMIN FITUR
    public function tamu()
    {
        $user = Auth::guest();
        if($user) {
            return false;
        } return true;
    }




}
