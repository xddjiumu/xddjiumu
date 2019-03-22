<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function index(Request $request, Topic $topic)
    {
        $topics = $topic->withOrder($request->order)->paginate(20);
        return view('topics.index', compact('topics'));
    }

    public function show(Request $request, Topic $topic)
    {
        // dd($topic);
        $categorys = $topic->category()->pluck('name')->toArray();
        $news = Topic::withOrder($request->order)->where('category_id', 1)->paginate(10);
        $dynamic = Topic::withOrder($request->order)->where('category_id', 2)->paginate(10);

        // URL 矫正
        if ( ! empty($topic->slug) && $topic->slug != $request->slug) {
            return redirect($topic->link(), 301);
        }
        // dd($categorys);
        return view('topics.show', compact('topic', 'news', 'dynamic', 'categorys'));
    }
}
