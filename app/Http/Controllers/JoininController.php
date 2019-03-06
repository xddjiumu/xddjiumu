<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoininRequest;
use Illuminate\Http\Request;
use App\Models\Joinin;

class JoininController extends Controller
{
    public function index()
    {
        return view('xdd.ppd-ninter_02');
    }

    public function store(JoininRequest $request, Joinin $joinin)
    {
        $joinin->create($request->only([
            'name',
            'mobile',
            'address',
            'product',
            'telephone',
            'fax',
            'code',
            'email',
            'message',
            ]));
        return redirect()->route('marketingone.index')->with('success', '您提交的留言我们会认真阅读，我们会给您来电，谢谢您！');
    }
}
