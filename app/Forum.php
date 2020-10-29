<?php

namespace App;

use App\comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //Rodrigo-Kenn
    public function comment()
    {
        return $this->hasMany(comment::class);
    }
}
