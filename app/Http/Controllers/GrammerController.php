<?php

namespace App\Http\Controllers;

use App\Models\Grammer;

class GrammerController extends Controller
{
    public function index(){
        $grammers = Grammer::all();
        return view('grammer.index', ['grammers' => $grammers]);
    }


    public function show($id){
        $grammer = Grammer::find($id);
        return view('grammer.show', ['grammer' => $grammer]);
    }
}
