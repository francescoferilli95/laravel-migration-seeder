<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;

class AgencyController extends Controller
{
    /**
     *  AGENCY
     */
    public function index() {



        return view('agency');
    }
}
