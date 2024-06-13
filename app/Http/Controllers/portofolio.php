<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portofolio extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function project()
    {
        return view('project');
    }

    public function contact()
    {
        return view('contact');
    }
}
