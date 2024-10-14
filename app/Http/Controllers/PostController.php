<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('community', ['posts' => Post::all()]);
    }
    public function addnew(Request $request){
        $newTodo = new Post();
        $newTodo->title = $request->title;
        $newTodo->body = $request->body;
        $newTodo->save();

        return view('community', ['posts' => Post::all()]);
    }
}
