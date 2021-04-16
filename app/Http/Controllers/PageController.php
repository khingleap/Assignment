<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('mainPages.about');
    }
    public function property()
    {
        return view('mainPages.property');
    }
    public function blog()
    {
        return view('mainPages.blog');
    }
    public function contact()
    {
        return view('mainPages.contact');
    }

}
