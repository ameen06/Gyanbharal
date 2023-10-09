<?php

namespace App\Http\Controllers;

use App\Models\HomeSlide;
use App\Models\Page;

class HomeController extends Controller
{
    public function index(){
        $slides = HomeSlide::get();
        $pages = Page::get();

        // pick a bg color
        $colorsArray = array("slate", "stone", "red", "emerald", "teal", "blue", "indigo", "violet", "fuchsia", "pink");
        $randomColor = array_rand($colorsArray);
        $ColorName = $colorsArray[$randomColor];

        return view('welcome', ['slides' => $slides, 'pages' => $pages, 'color' => $ColorName]);
    }
    public function page_show($id){
        $page = Page::find($id);
        return view('pages.show', ['page' => $page]);
    }
}
