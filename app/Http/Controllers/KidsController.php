<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Video;

class KidsController extends Controller
{
    public function index(){
        $slides = Slide::all();
        $videos = Video::all();

        return view('kids.index',  ['slides' => $slides, 'videos' => $videos]);
    }
}
