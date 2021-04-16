<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function propertysingle()
    {
        return view('pages.psingle');
    }
    public function blogsingle()
    {
        return view('pages.bsingle');
    }
    public function agentgrid()
    {
        return view('pages.agrid');
    }
    public function agentsingle()
    {
        return view('pages.asingle');
    }
}
