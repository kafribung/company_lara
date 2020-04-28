<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $touches = ['user'];

    protected $fillable = ['title', 'image', 'user_id'];

    // Relasi  many  to one (Portofolio to user)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
