<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BSHomeController;
use App\Http\Controllers\BookControllrt;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [BSHomeController::class , 'home'])->name('dashboard');
    Route::get('/Sell_Book', [BookControllrt::class , 'sellbook'])->name('sell-books');
    Route::post('/Add_Book', [BookControllrt::class , 'addbook'])->name('add-books');
    Route::get('/Book_Details/{id}', [BSHomeController::class , 'details'])->name('details');
    Route::get('/Check_info/{id}', [BSHomeController::class , 'info'])->name('info');
    Route::post('/ADD_info/{id}', [BSHomeController::class , 'addinfo'])->name('add-info');
});
