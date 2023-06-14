<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/home', function () {
    return view('pages.index');
});
Route::get('/login', function () {
    return view('admin.auth.login');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('/login','login')->name('login');   
    Route::get('/users','showDashboard')->name('users')->middleware('auth');
});