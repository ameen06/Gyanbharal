<?php

use App\Http\Controllers\DailyFactsController;
use App\Http\Controllers\EssaysController;
use App\Http\Controllers\GrammerController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\PhrasesController;
use App\Http\Controllers\WordsController;
use App\Models\HomeSlide;
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
    $slides = HomeSlide::get();
    return view('welcome', ['slides' => $slides]);
});

// words
Route::get('/english-to-assamese', [WordsController::class, 'to_assamese'])->name('e-a-words');
Route::get('/assamese-to-english', [WordsController::class, 'to_english'])->name('a-e-words');

// kids page
Route::get('/kids-playstream', [KidsController::class, 'index'])->name('kids-playstream');

// daily facts
Route::get('/daily-facts', [DailyFactsController::class, 'index'])->name('daily-facts');

// phrases
Route::get('/phrases', [PhrasesController::class, 'index'])->name('phrases.index');
Route::get('/phrases/{id}', [PhrasesController::class, 'show'])->name('phrases.show');

// grammer
Route::get('/grammer', [GrammerController::class, 'index'])->name('grammer.index');
Route::get('/grammer/{id}/{title}', [GrammerController::class, 'show'])->name('grammer.show');

// essays
Route::get('/essays', [EssaysController::class, 'index'])->name('essays.index');
Route::get('/essays/{id}/{title}', [EssaysController::class, 'show'])->name('essays.show');