<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('categories')->get();
        return view('admin.news.index', compact('news'));
    }
    public function show($id){
        $news = News::findOrFail($id);
        return view('admin.news.show',compact('news'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
        }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories' => 'required|array'
        ]);

        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        $news->categories()->attach($request->categories);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    public function edit(News $news)
    {
        $categories = Category::all();
        $selected = $news->categories->pluck('id')->toArray();
        return view('admin.news.edit', compact('news', 'categories', 'selected'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories' => 'required|array'
        ]);

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        $news->categories()->sync($request->categories);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        $news->categories()->detach();
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
