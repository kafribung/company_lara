<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Update releasi auto
    protected $touches = ['user'];

    protected $guarded = ['created_at', 'updated_at'];

    // Relasi One to one (Contact to user)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }



}
