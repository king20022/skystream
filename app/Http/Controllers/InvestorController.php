<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    //


    public function show()
    {
        $user = auth()->user();
        return view('Investor.dashboard', ['user' => $user]);
        // return view('Investor.dashboard');
    }





    public function reveal()
    {
        $user = auth()->user();
        return view('Investor.deposit', ['user' => $user]);
        // return view('Investor.deposit');
    }

    public function coin()
    {
        return view('Investor.address');
    }
}
