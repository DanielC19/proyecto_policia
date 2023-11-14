<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FunctionsController extends Controller
{
    public function most_guns() {
        $officer = DB::select('SELECT `most_guns`() AS `name`');

        return view('functions.most_guns', compact('officer'));
    }

    public function officers_guns(Request $request) {
        $officer = Officer::find($request->officer);

        $result = DB::select("CALL officersGuns($officer->id)");

        return view('functions.officer_guns')->with('officer', $officer)->with('result', $result);
    }
}
