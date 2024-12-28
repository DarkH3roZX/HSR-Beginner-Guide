<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function gotoMeta() {
        return view('metacurrent');
    }

    public function gotoMetaPast() {
        return view('metapast');
    }

    public function gotoMetaFuture() {
        return view('metafuture');
    }
}
