<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    protected $touches = ['user'];

    protected $fillable = ['owner', 'profession', 'description', 'user_id'];

    // Relasi Many to one (Motivation to User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
