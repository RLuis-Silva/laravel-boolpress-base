<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * pagine statiche
     */

    // HOME
    public function home(){
        return view('home');
    }

    // ABOUT
    public function about(){
        return view('about');
    }
}
