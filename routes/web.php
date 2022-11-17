<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('layouts/layout');
// });

Route::get('/shest1k', function () {
    return view('layouts/shest1k');
});

Route::get('/about', function () {
    return view ('layouts/about');
});

Route::get('/contacts', [ContactsController::class, 'contacts']);

Route::get('/', [MainController::class, 'index']);


