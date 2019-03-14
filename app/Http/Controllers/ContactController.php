<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(ContactRequest $request, Contact $contact)
    {
        $contact->create($request->only([
            'name',
            'email',
            'mobile',
            'message',
        ]));
        return redirect()->route('root')->with('success', '您提交的留言我们会认真阅读，如有需要我们会给您来电，谢谢您！');
    }
}
