<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('article/articleIndex', compact('article'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('article/articleSingle', compact('article'));
    }
}
