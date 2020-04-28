<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{

    // Update Time Relation
    protected $touches = ['user'];

    protected $guarded = [];

    // Reltion many to one
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
