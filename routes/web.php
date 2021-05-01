<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin');

    //Manage Data User
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
});

Route::prefix('user')->middleware('role:user')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user');
});
