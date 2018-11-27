<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // модель Category, доп. таблица, где  id тега ссылается на id статьи,
    public function categories(){ //м=м  получить все категории к которым принадлежит пост
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags(){ //м=м
        return $this->belongsToMany(Tag::class,
            'posts_tags',
            'post_id',
            'tag_id')->withTimestamps();
    }
    public function comments(){ //пост может иметь меого коментариев
        return $this->hasMany(Comment::class);
    }

    public function tagList(){
        return $this->tags()->get()->implode('name', ', ');
    }
    public static function getPopularPosts(){
        return self::orderBy('views_count','desc')->take(2)->get();
    }

}

