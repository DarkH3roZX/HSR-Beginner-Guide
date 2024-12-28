<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MistakesController extends Controller
{
    public function gotoMistakes() {
        return view('beginnermistakes');
    }
}
