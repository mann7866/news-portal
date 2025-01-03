<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class LandinPageController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();

        return view('welcome', compact('news'));
    }

    public function news()
    {
        $news = News::with('categories')->latest()->paginate(3);

        $categories = Category::withCount('news')->get();

        $popularNews = News::orderBy('views', 'desc')->take(3)->get();

        return view('news', compact('news', 'popularNews', 'categories'));
    }
}
