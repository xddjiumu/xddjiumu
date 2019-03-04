<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Http\Requests\ContactusRequest;

class ContactusController extends Controller
{
    public function index()
    {
        return view('xdd.ppd-nkkaz_cc01');
    }

    public function store(ContactusRequest $request, Contactus $contactus)
    {
    	$contactus->create($request->only([
            'name',
            'email',
            'mobile',
            'message',
        ]));
    	return redirect()->route('contactus.index')->with('success', '您提交的留言我们会认真阅读，如有需要我们会给您来电，谢谢您！');
    }
}
