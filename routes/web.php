<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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

Route::get('/shest1k', function () {
    return view('main/shest1k');
});

Route::get('/about', function () {
    return view ('main/about');
});

Route::get('/contacts', [ContactsController::class, 'contacts']);

Route::get('/', [MainController::class, 'index']);

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');

Route::post('/signin/check', [AuthController::class, 'signin_check']);




