<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     *  HOMEPAGE
     */
    public function index() {
        return view('home');
    }

    /**
     *  ABOUT
     */
        public function about() {
        return view('about');
    }
}
