<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Tag;
class PostController extends Controller{
    public function index(){

        $posts = Post::paginate(2);
        $page = 'pages.post';
       // dd($post);
        return view('two-content',compact('posts','page'));
    }
    public function create(){
        //
    }
    public function store(Request $request){
        //
    }
    public function show($id){
        //
    }
    public function edit($id){
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id){
        //
    }

    /////////////////////////////////////
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
