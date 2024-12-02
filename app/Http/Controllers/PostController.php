<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){
        return view('community', ['posts' => Post::all()]);
    }

    public function addPost(Request $request){
        $userId = Auth::id();
        // $newTodo = new Post();
        // $newTodo->title = $request->title;
        // $newTodo->body = $request->body;
        // $newTodo->save();

        $post = Post::factory()->withParams(
            userId: $userId,
            title: $request->title,
            body: $request->body,
            image: $request->image,
        )->create();

        return view('community', ['posts' => Post::all()]);
    }

    public function getPostDetail($id){
        $post = Post::with('reply')->find($id);

        return view('post-detail', compact('post'));
    }
}
