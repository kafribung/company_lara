<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // Update Time Relation
    protected $toaches = ['user'];

    protected $guarded = [];

    // Relasi One to one (About)

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
