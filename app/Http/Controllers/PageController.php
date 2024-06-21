<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController 
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }
}
