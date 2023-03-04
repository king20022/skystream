<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// to return the homepage
Route::get('/', [HomeController::class, 'create'])->name('welcome');

// to return the about page
Route::get('/about', [HomeController::class, 'show'])->name('about');

// to return the responsibility page
Route::get('/responsibility', [HomeController::class, 'showOne'])->name('responsibility');

// to return insights page
Route::get('/insights', [HomeController::class, 'showTwo'])->name('insights');

Route::get('/alternative', [HomeController::class, 'three'])->name('alternative');

Route::get('/real-asset', [HomeController::class, 'four'])->name('realasset');

Route::get('/realestate', [HomeController::class, 'five'])->name('realestate');





Route::get('/dashboard', function () {

    return view('admin.dashboard');


    // if (Auth::user()->role == 'investor') {
    //     return view('investor.dashboard');
    // } else if (Auth::user()->role == 'admin') {
    //     return back('admin.dashboard');
    // }
    // if (Auth::user()->role == 'investor') {
    //     return redirect()->route('investor.show');
    // } else if (Auth::user()->role == 'admin') {
    //     return view('admin.dashboard');
    // }
})->middleware(['auth', 'verified'])->name('admin.dashboard');


// Route::middleware('auth', 'verified')->group(function () {
//     Route::get('/dashboard', [HomeController::class, 'showthree'])->name('admin.dashboard');

//     Route::get('/investor', [InvestorController::class, 'show'])->name('investor.show');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin/add', [AdminController::class, 'add'])->name('investor.add');

    Route::get('/admin/addd', [AdminController::class, 'addd'])->name('investment.add');



    // show all investor
    Route::get('/admin', [AdminController::class, 'show'])->name('admin.show');

    // edit investor
    Route::get('/admin/edit{id}', [AdminController::class, 'edit'])->name('admin.edit');

    // update investor
    Route::put('/admin/update{id}', [AdminController::class, 'update'])->name('admin.update');

    //  delete user
    Route::post('/admin/delete{user_id}', [AdminController::class, 'delete'])->name('admin.delete');




    // add coin form
    Route::get('/admin/add/coin', [AdminController::class, 'coin'])->name('admin.addcoin');

    // store coin
    Route::put('/admin/coinform', [AdminController::class, 'btc'])->name('coin.update');

    // delete coin
    Route::delete('/payments/{id}', [AdminController::class, 'destroy']);



    // show all investment
    Route::get('/admin/add/investment', [AdminController::class, 'investment'])->name('admin.investment');

    // store investment
    Route::put('/admin/update', [AdminController::class, 'updateinvestment'])->name('adminn.update');

    // delete investment
    Route::delete('/investments/{id}', [AdminController::class, 'Terminate']);

    //  admin ends here


    // investor begins here

    // investor dashboard
    Route::get('/investor', [InvestorController::class, 'show'])->name('investor.show');


    // deposit
    Route::get('/investor/deposit', [InvestorController::class, 'reveal'])->name('investor.reveal');

    // show wallet address
    Route::get('/investor/wallet', [InvestorController::class, 'coin'])->name('investor.coin');

    // update your profile
    Route::get('/investor/profile', [InvestorController::class, 'profile'])->name('investor.update');

    // storeinvestoinfo
    Route::put('/investor/update',  [InvestorController::class, 'profileupdate'])->name('investor.updated');

    // withdraw
    Route::get('/investor/withdraw', [InvestorController::class, 'withdraw'])->name('investor.with');













});

require __DIR__ . '/auth.php';
