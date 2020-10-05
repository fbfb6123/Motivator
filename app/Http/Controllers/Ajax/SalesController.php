<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function index(Request $request) {

        return \App\Sale::select('company', 'amount')
            ->where('year', $request->year)
            ->get();
    }

    public function year() {
        return \App\Sale::select('year')
            ->groupBy('year')
            ->pluck('year');
    }
}


