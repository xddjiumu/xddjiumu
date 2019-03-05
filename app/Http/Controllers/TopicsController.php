<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TopicRequest;

class TopicsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $topics = Topic::paginate();
        return view('topics.index', compact('topics'));
    }

    public function news()
    {
        $topics = Topic::where('category_id', 1)->paginate(14);
        $category = Category::find(1);
        return view('xdd.ppd-news_01', compact('topics', 'category'));
    }

    public function newsone()
    {
        $topics = Topic::where('category_id', 2)->paginate(14);
        $category = Category::find(2);
        return view('xdd.ppd-news_01', compact('topics', 'category'));
    }

    public function cuserviceflo()
    {
        $topics = Topic::where('category_id', 3)->paginate(14);
        $category = Category::find(3);
        return view('xdd.ppd-nkefu_03', compact('topics', 'category'));
    }

    public function show(Topic $topic)
    {
        $category = Category::find($topic->category_id);
        if($topic->category_id == 3)
        {
            return view('xdd.ppd-nkefu_03show', compact('topic', 'category'));
        }
        return view('xdd.ppd-news_01show', compact('topic', 'category'));
    }

    public function create(Topic $topic)
    {
        return view('topics.create_and_edit', compact('topic'));
    }

    public function store(TopicRequest $request)
    {
        $topic = Topic::create($request->all());
        return redirect()->route('topics.show', $topic->id)->with('message', 'Created successfully.');
    }

    public function edit(Topic $topic)
    {
        $this->authorize('update', $topic);
        return view('topics.create_and_edit', compact('topic'));
    }

    public function update(TopicRequest $request, Topic $topic)
    {
        $this->authorize('update', $topic);
        $topic->update($request->all());

        return redirect()->route('topics.show', $topic->id)->with('message', 'Updated successfully.');
    }

    public function destroy(Topic $topic)
    {
        $this->authorize('destroy', $topic);
        $topic->delete();

        return redirect()->route('topics.index')->with('message', 'Deleted successfully.');
    }
}