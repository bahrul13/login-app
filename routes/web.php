<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManageController;

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


Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', [AuthManageController::class, 'login'])->name('login');
Route::post('/login', [AuthManageController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManageController::class, 'register'])->name('register');
Route::post('/register', [AuthManageController::class, 'registerPost'])->name('register.post');
Route::get('logout', [AuthManageController::class, 'logout'])->name('logout');
