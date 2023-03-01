<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function show()
    {
        return view ('about');
    }

    public function showOne()
    {
        return view ('responsibility');
    }

    public function showTwo()
    {
        return view ('insights');
    }

    public function showthree()
    {
       
        return view ('admin.dashboard');
    }


}
