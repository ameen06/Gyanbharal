<?php

namespace App\Http\Controllers;

use App\Models\DailyFact;
use Illuminate\Http\Request;

class DailyFactsController extends Controller
{
    public function index(){
        $daily_fact = DailyFact::latest()->first();

        return view('daily_facts.index',  ['daily_fact' => $daily_fact]);
    }
}
