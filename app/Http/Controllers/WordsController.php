<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function to_assamese(){
        $words = Word::all();

        return view('words.to-assamese',  ['words' => $words]);
    }

    public function to_english(){
        $words = Word::all();

        return view('words.to-english',  ['words' => $words]);
    }
}
