<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return inertia::render('homepage', [
            'title' => 'Homepage',
            'description' => 'selamat datang di web bertia',
            'news' => $news
        ]);
    }
}