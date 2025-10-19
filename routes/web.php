<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Pastikan controller ini di-import
use App\Http\Controllers\KonserController;
use App\Http\Controllers\DetailKonserController;
use App\Http\Controllers\ArtisController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/konser', [KonserController::class, 'index'])->name('konser');
Route::get('/detailKonser', [DetailKonserController::class, 'show'])->name('detail.konser');
Route::get('/artis', [ArtisController::class, 'list'])->name('artis.list');

use App\Http\Controllers\ProfileController;
Route::get('/profil', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profil', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');