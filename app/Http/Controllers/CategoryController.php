<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::with('articles')->findOrFail($id);
        return view('category.show', compact('category'));
    }
}