<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function gotoCharacters() {
        return view('characterslist');
    }
}
