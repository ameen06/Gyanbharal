<?php

use App\Http\Controllers\DailyFactsController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\WordsController;
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

Route::get('/english-to-assamese', [WordsController::class, 'to_assamese'])->name('e-a-words');
Route::get('/assamese-to-english', [WordsController::class, 'to_english'])->name('a-e-words');
Route::get('/kids-playstream', [KidsController::class, 'index'])->name('kids-playstream');
Route::get('/daily-facts', [DailyFactsController::class, 'index'])->name('daily-facts');
