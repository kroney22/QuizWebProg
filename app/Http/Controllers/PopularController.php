<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PopularController extends Controller
{
    public function index()
    {
        $popularArticles = Article::orderBy('views', 'desc')->paginate(3);
        return view('popular.index', compact('popularArticles'));
    }
}
