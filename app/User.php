<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $hidden = ['password', 'remember_token',];
    protected $guarded = ['id','created_at','updated_at'];
    // связи
    public function posts(){
        // один user может создавать множество статей
        return $this->hasMany(Post::class);
    }
    public function comments(){
        // один user может создавать множество коментов
        return $this->hasMany(Comment::class);
    }
}
