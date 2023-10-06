<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(){
        $questions = Quiz::all();
        return view('quiz.index', ['questions' => $questions]);
    }
}
