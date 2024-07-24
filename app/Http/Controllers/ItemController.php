<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function home()
    {
        return view('blog.home');
    }
    public function about()
    {
        return view('blog.about');
    }
    public function contact()
    {
        return view("blog.contact");
    }
}
