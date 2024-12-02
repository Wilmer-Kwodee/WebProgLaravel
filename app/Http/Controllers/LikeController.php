<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function addLike(Request $request){
        $userId = Auth::id();

        $like = Like::factory()->withParams(
            postId: $request->postId,
            userId: $userId,
        )->create();

        $post = Post::with('reply')->find($request->postId);

        return view('post-detail', compact('post'));
    }

    public function deleteLike(Request $request){
        $userId = Auth::id();

        $like = Like::where('postId', $request->postId)
                    ->where('userId', $userId)
                    ->first();

        if ($like) {
            $like->delete(); // Delete the like
        }

        $post = Post::with('reply')->find($request->postId);
        return view('post-detail', compact('post'));
    }
}
