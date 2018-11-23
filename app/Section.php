<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function posts()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }
}
