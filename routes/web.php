<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [ChallengeController::class, 'index']);
// Route::get('/',  function () {
//     return 'ok berhasil masuk home';
// });

Route::get('/community', [PostController::class,'index']);

Route::get('/community/detail/{id}', [PostController::class, 'getPostDetail']);

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
Route::post('/addPost', [PostController::class, 'addPost']);
Route::get('/logout', [UserController::class, 'logout']);

// Route::get('/tailwind-test', function () {
//     return view('app');
// });
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/proof', [ChallengeController::class, 'proof']);

// localization
Route::get('/locale/{locale}', [LocalizationController::class, 'setLocale']);