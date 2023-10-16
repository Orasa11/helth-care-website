<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function obesity() {
        return view('disease/obesity');
    }

    public function diabetes2() {
        return view('disease/diabetes2');
    }

    public function blood_pressure3() {
        return view('disease/blood_pressure3');
    }

    public function obesity_food1() {
        return view('food/obesity_food1');
    }

    public function obesity_food2() {
        return view('disease/obesity_food2');
    }
    public function calculator() {
        return view('calculator');
    }
}
