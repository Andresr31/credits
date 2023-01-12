<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/fees',[CreditController::class, 'payFee'])->name('fees.pay');

    Route::resources([
        // 'customers' => CustomerController::class,
        // 'advisers' => AdviserController::class,
        // 'capitalizations' => CapitalizationController::class,
        // 'costs' => AdditionalCostController ::class,
        'credits' => CreditController::class,
    ]);
    

});