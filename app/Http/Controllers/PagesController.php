<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class PagesController extends Controller
{
    /**
     * show home
     *
     * @return views/home
     */
    public function root()
    {
        // $this->middleware('auth');
        return view('pages.root');
    }

    public function index()
    {
        $topics = Topic::find(1);
        return view('xdd.index', compact('topics'));
    }
}