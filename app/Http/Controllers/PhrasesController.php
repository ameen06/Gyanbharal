<?php

namespace App\Http\Controllers;

use App\Models\Phrase;

class PhrasesController extends Controller
{
    public function index(){
        $phrases = Phrase::all();
        return view('phrases.index', ['phrases' => $phrases]);
    }


    public function show($id){
        $phrase = Phrase::find($id);
        return view('phrases.show', ['phrase' => $phrase]);
    }
}
