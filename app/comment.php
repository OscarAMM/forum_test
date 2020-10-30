<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
     //Cosme-juan
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Rodrigo-Kenn
    public function forum(){
        return $this->belongsTo(comment::class);
    }
}
