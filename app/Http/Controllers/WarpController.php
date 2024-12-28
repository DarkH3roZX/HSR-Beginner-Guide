<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;

class WarpController extends Controller
{
    public function gotoWarpCurrent() {
        return view('warpcurrent');
    }

    public function gotoWarpHistory() {
        return view('warphistory');
    }

    public function gotoWarpTips() {
        return view('warptips');
    }

    public function searchVersion(Request $request) {
        // Validate the input
        $request->validate([
            'search-term' => 'required',
        ]);

        // Retrieve data based on the input
        $data = Banners::where('version', 'like', '%' . $request->input('search-term') . '%')->get();

        // Return the view with the data
        return view('warphistory', compact('data'));
    }
}
