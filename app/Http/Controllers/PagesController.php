<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}