<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
    public function home_index(){
        return view('frontend.home');
    }
    public function about_us_index(){
        return view('frontend.about-us');
    }
}
