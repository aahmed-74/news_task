<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function showCategory($id)
    {
        $category = Category::with('news')->findOrFail($id);
        return view('category', compact('category'));
    }
}

