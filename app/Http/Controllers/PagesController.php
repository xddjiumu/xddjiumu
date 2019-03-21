<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class PagesController extends Controller
{
    /**
     * show home
     *
     * @return views/home
     */
    public function root(Topic $topic)
    {
        // $this->middleware('auth');
        $news = $topic->with('category')->where('category_id', 1)->paginate(8);
        $dynamic = $topic->with('category')->where('category_id', 2)->paginate(8);
        return view('pages.root', compact('news', 'dynamic'));
    }

    public function index()
    {
        return view('pages.index', compact('news', 'dynamic'));
    }

    public function product()
    {
        return view('pages.product', compact('news', 'dynamic'));
    }
}