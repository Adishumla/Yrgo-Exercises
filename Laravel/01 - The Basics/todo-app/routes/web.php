<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\CompleteTaskController;

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
    return view('index');
})->name('login');

Route::post('login', LoginController::class);

Route::get('/login', function () {
    return view('index');
})->name('login')->middleware('guest');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/logout', function () {
    auth()->logout();
    return redirect()->intended('/login');
});

Route::post('/task', CreateTaskController::class)->middleware('auth');

Route::patch('tasks/{task}/complete', CompleteTaskController::class)->middleware('auth');
