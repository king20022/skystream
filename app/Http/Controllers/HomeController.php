<?php

namespace App\Http\Controllers;

use App\Models\Investment;
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

    public function three()
    {

        return view ('alternative');
    }


    public function four()
    {

        return view ('real-asset');
    }

    public function five()
    {

        return view ('investment.realestate');
    }

    public function six()
    {

        return view ('investment.stocks');
    }

    public function seven()
    {

        return view ('investment.infrastructure');
    }


}
