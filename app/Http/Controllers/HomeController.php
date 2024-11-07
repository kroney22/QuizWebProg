<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('home', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }
}
