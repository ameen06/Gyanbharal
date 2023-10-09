<?php

use App\Http\Controllers\DailyFactsController;
use App\Http\Controllers\EssaysController;
use App\Http\Controllers\GrammerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\PhrasesController;
use App\Http\Controllers\QuizController;
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

Route::get('/', [HomeController::class, 'index']);

Route::view('/contact-us', 'contact');
Route::view('/privacy-policy', 'privacy');
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');

// Pages
Route::get('/pages/{id}/{title}', [HomeController::class, 'page_show'])->name('pages.show');

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