<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class DynamicController extends Controller
{
    public function index(Request $request)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $news = Topic::withOrder($request->order)
                        ->where('category_id', 2)
                        ->paginate(20);
        $category = Category::find(2);
        // 传参变量话题和分类到模板中
        return view('dynamic.index', compact('news', 'category'));
    }
}
