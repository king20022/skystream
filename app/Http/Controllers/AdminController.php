<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function add()

    {
        $payment = Payment::all();
        return view('Admin.addcoin', compact('payment'));
    }

    public function addd()
    {
        $investment = Investment::all();
        return view('Admin.addinvestment', compact('investment'));
    }




    public function show()
    {
        $user = User::orderby('id', 'desc')->get();
        return view('Admin.investors', compact('user'));
    }



    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('Admin.profile', compact('user'));
    }




    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'profit' => 'required|string|max:255',
            'bonus' => 'required|string|max:255',
            'balance' => 'required|string|max:255' . $user->id,
        ]);

        $user->update($validatedData);

        return redirect()->back()->with('success', 'Investor details updated successfully.');
    }



    public function delete($user_id)
    {
        $user = User::findOrFail($user_id); // Retrieve the user record from the database

        if (!$user) {
            abort(404);
        }
        $user->delete(); // Delete the user record

        // return redirect()->back()->with('success', 'Investor details deleted successfully.');

        // return redirect()->route('Admin.show')->with('success', 'Investor has been deleted.'); // Redirect back to the user list page with a success message
        return redirect()->back()->with('success', 'Investor details updated successfully.');
    }









    public function coin()
    {

        return view('Admin.coinform');
    }




    public function btc(Request $request)
    {

        $payment = new Payment;
        $payment->network = $request->input('network');
        $payment->name = $request->input('name');
        $payment->address = $request->input('address');
        $payment->save();

        // return back();
        // return view('Admin.coinform');
        // return redirect()->back()->with('success', 'Investor details deleted successfully.');
        // Redirect back to the previous page with a success message
        // return redirect()->route('Admin.addcoin')->with('success', 'Data has been inserted successfully.');
        return redirect()->route('investor.add');
    }



    public function destroy($id)
    {

        // Delete the payment from the database.
        Payment::destroy($id);

        // Redirect the user back to the payments list page.
        // return view('Admin.addcoin');
        return redirect()->back()->with('success', 'Investor details deleted successfully.');
    }


    public function investment()
    {
        return view('Admin.investmentform');
    }




    public function updateinvestment(Request $request)
    {
        $investment = new Investment;
        $investment->investmentType= $request->investmentType;
        $investment->minimum = $request->minimum;
        $investment->maximum = $request->maximum;
        $investment->pip = $request->pip;
        $investment->pip = $request->pip;
        $investment->investmentPlan = $request->investmentPlan;
        $investment->save();


        return redirect()->route('investment.add')->with('success', 'Investment added successfully.');
    }




    public function Terminate($id)
    {

        // Delete the payment from the database.
        Investment::destroy($id);

        // Redirect the user back to the payments list page.
        // return view('Admin.addcoin');
        return redirect()->back()->with('success', 'Investment details deleted successfully.');
    }
}
