<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
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
    return view('dashboard');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile1', [ProfileController::class, 'profile1'])->name('profile1');
Route::get('/profile2', [ProfileController::class, 'profile2'])->name('profile2');

Route::get('/pengalaman', [PengalamanController::class, 'pengalaman'])->name('kuliah');