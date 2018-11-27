<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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
