<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Forum;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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
    /*
    public function forum(){
        return $this->hasMany(Forum::class);
    }**/
    public function forums(){
        return $this->belongsToMany(Forum::class)->withTimestamps();
    }
    //Juan-Cosme
    public function comment(){
        return $this->hasMany(comment::class);
    }
    public function hasForum($id){
        if($this->forums()->where('forum_id', $id)->first()){
            return true;
        }else{
            return false;
        }
    }
}
