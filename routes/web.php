<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KriteriaController;

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.detail');

use App\Http\Controllers\SubkriteriaController;

// routes/web.php
Route::get('/subkriteria/{id}', [SubkriteriaController::class, 'index'])->name('subkriteria.index');
