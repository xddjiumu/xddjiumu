<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function index()
    {
        $topics = Topic::paginate(30);
        return view('topics.index', compact('topics'));
    }
}
