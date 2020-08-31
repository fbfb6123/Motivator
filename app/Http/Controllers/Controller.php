<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    //下の記述をすると互換性がないとの理由でreward/messageのviewが表示されない。
    // public function index(Request $request)
    // {
    //     $user = Auth::user();
    //     $sort = $request->sort;
    //     $items = Person::orderBy($sort, 'abc')->simplePaginate(5);
    //     $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
    //     return view('hello.index', $param);
    // }

}
