<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
