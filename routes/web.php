<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateCouponController;
use App\Http\Controllers\CustomerController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
        return view('dashboard');
    
})->name('dashboard');

Route::get('admin',function ()
{
    return view('admin');
});

Route::resource('generate_coupon',GenerateCouponController::class);

Route::get('create',[CustomerController::class,'create']);

Route::post('save',[CustomerController::class,'store']);

