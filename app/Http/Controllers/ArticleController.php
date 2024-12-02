<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();

        return view("article", compact('article'));
    }

    public function getArticle($id){
        $article = Article::find($id);

        return view('', compact('article'));
    }
}
