<?php

namespace App\Http\Controllers;

use App\Models\Essay;

class EssaysController extends Controller
{
    public function index(){
        $essays = Essay::all();
        return view('essays.index', ['essays' => $essays]);
    }


    public function show($id){
        $essay = Essay::find($id);
        return view('essays.show', ['essay' => $essay]);
    }
}
