<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class SaleController extends BaseController
{
    public function index(Request $request) {

        return \App\Sale::select('company', 'amount')
            ->where('year', $request->year)
            ->get();

    }

    public function years() { // 👈 追加

        return \App\Sale::select('year')
            ->groupBy('year')
            ->pluck('year');

    }
}


