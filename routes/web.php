<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

/////////////////////////
//SINGUP
/////////////////////////

Route::get('/register', function () {
    return view('auth\register');
})->name('register');

Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'min:4'],
        'email' => ['required'],
        'password' => ['confirmed', 'required', 'min:8'],
    ]);
    return $validated;
});

/////////////////////////
//LOGIN
/////////////////////////
Route::get('/login', function () {
    return view('auth\login');
})->name('login');

Route::post('/login', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required'],
        'password' => ['required', 'min:8'],
    ]);
    return $validated;
});

Route::get('/', function () {
    return view('welcome');
});
