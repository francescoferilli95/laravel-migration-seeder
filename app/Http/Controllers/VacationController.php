<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;

class VacationController extends Controller
{
    /**
     *  AGENCY
     */
    public function index() {

        $vacations = Vacation::paginate(2);
        //dump($vacations);

        return view('agency', compact('vacations'));
    }
}
