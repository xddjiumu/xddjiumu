<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Http\Requests\ContactusRequest;

class ContactuslistController extends Controller
{
    public function index()
    {
    	$contactus = Contactus::orderBy('id', 'esec')->paginate(14);
    	return view('xdd.ppd-nkefu_02', compact('contactus'));
    }

    public function store(ContactusRequest $request, Contactus $contactus)
    {
        $contactus->create($request->only([
            'name',
            'email',
            'mobile',
            'message',
        ]));
        return redirect()->route('cuserviceone.index')->with('success', '您提交的留言我们会认真阅读，如有需要我们会给您来电，谢谢您！');
    }
}
