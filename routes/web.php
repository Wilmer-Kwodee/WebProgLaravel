<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [ChallengeController::class, 'index']);
// Route::get('/',  function () {
//     return 'ok berhasil masuk home';
// });

Route::get('/community', function () {
    return view('community', ['posts' => Post::all()]);
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/logincheck', [UserController::class, 'logincheck']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/newpost', function () {
    return view('newpost');
});
Route::post('/addnew', [PostController::class, 'addnew']);
Route::get('/logout', [UserController::class, 'logout']);

// Route::get('/tailwind-test', function () {
//     return view('app');
// });
