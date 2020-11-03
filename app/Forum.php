<?php

namespace App;

use App\comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    /*
    public function user()
    {
        return $this->belongsTo(User::class);
    }*/
    public function get_users(){
        return $this->belongsToMany(User::class, 'forum_user')->withPivot('forum_id', 'user_id')->orderBy('id', 'DESC');
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    //Rodrigo-Kenn
    public function comment()
    {
        return $this->hasMany(comment::class); 
    }
    /*
    public function hasForum($id){
        if($this->forums()->where('forum_id', $id)->first()){
            return true;
        }else{
            return false;
        }
    }*/
    
     //belongsToMany (muchos a muchos)
     //belongsTo (uno a muchoo)
     //hasMany(muchos a uno)
     //hasOne (uno a uno)

}
