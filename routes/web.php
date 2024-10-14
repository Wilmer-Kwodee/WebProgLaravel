<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\PostController;
use App\Models\Challenge;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [ChallengeController::class, 'index']);

Route::get('/community', function () {
    return view('community', ['posts' => Post::all()]);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/newpost', function () {
    return view('newpost');
});
Route::post('/addnew', [PostController::class, 'addnew']);

// Route::get('/tailwind-test', function () {
//     return view('app');
// });
