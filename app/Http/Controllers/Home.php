<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $request)
    {
        return view('blog.index');
    }
}
