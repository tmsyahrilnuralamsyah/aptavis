<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasemenController;

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

Route::get('/', [KlasemenController::class, 'index'])->name('index');
Route::post('/tambahKlub', [KlasemenController::class, 'tambahKlub'])->name('tambahKlub');
Route::post('/editSkor', [KlasemenController::class, 'editSkor'])->name('editSkor');