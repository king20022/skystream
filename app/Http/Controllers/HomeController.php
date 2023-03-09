<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {

        $investment = Investment::all();
        return view('welcome', compact('investment'));
        // return view('welcome');
    }

    public function show()
    {
        $investment = Investment::all();
        return view('home', compact('investment'));
        // return view ('home');
    }


}
