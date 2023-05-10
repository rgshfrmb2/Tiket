<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\LaporanController;


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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// / management tiket
Route::get('/tiket/index', [TiketController::class, 'index'])->name('tiket.index');
Route::get('/tiket/create', [TiketController::class, 'create'])->name('tiket.create');
Route::post('/tiket/create', [TiketController::class, 'store'])->name('tiket.store');
Route::get('/tiket/update{id}', [TiketController::class, 'edit'])->name('tiket.edit');
Route::post('/tiket/update{id}', [TiketController::class, 'update'])->name('tiket.update');
Route::get('/tiket/delete{id}', [TiketController::class, 'destroy'])->name('tiket.delete');

// / management tiket
Route::get('/checkin/index', [CheckinController::class, 'index'])->name('checkin.index');
Route::get('/checkin/agree{id}', [CheckinController::class, 'agree'])->name('checkin.agree');
Route::post('/checkin/create', [CheckinController::class, 'store'])->name('checkin.store');
Route::get('/checkin/update{id}', [CheckinController::class, 'edit'])->name('checkin.edit');
Route::post('/checkin/update{id}', [CheckinController::class, 'update'])->name('checkin.update');
Route::get('/checkin/delete{id}', [CheckinController::class, 'destroy'])->name('checkin.delete');

// / management tiket
Route::get('/laporan/index', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/agree{id}', [LaporanController::class, 'agree'])->name('laporan.agree');
Route::post('/laporan/filter', [LaporanController::class, 'filter'])->name('laporan.filter');
