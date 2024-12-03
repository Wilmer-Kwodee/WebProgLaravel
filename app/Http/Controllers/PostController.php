<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::with('user')->get();
        // dd($posts);
        return view('community', compact('posts'));
    }

    public function addPost(Request $request){
        $userId = Auth::id();

        $post = Post::factory()->withParams(
            userId: $userId,
            title: $request->title,
            body: $request->body,
            image: "",
        )->create();

        $posts = Post::with('user')->get();
        return view('community', compact('posts'));
    }

    public function getPostDetail($id){
        $post = Post::with('reply')->find($id) ;

        return view('post-detail', compact('post'));
    }
}
