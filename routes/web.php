<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CAController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BondingController;
use App\Http\Controllers\PortofolioPremiController;

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

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout',[loginController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class)->middleware('auth');
Route::get('/portofoliopremi',[PortofolioPremiController::class, 'portofoliopremi'])->name('portofoliopremi')->middleware('auth');
Route::get('/cac',[CAController::class, 'cac'])->name('cac')->middleware('auth');
Route::get('/bonding',[BondingController::class, 'bonding'])->name('bonding')->middleware('auth');