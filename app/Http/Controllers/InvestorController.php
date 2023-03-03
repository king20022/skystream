<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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
        $payment = Payment::all();
        return view('investor.address', compact('payment'));
    }



    public function profile()
    {

        return view('Investor.profile');
    }


    public function profileupdate()
    {

        return view('Investor.profile');
    }

    public function withdraw()
    {
        $user = auth()->user();
        return view('Investor.withdraw', ['user' => $user]);
        // return view('Investor.withdraw');
    }
}
