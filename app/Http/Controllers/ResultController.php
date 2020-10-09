<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class ResultController extends Controller
{
    public function index(Request $request, $questionId){

    $questionInfo = Question::where('id', $questionId)->first();
        return view('/admin/result', [
            'questionId' => $questionId,

            'questionInfo' => $questionInfo
    ]);
}

// コメントリストを取得してJSON形式で返す
    public function ajax(Request $request, $questionId){



    $commentData = Comment::where('question_id', $questionId)->orderBy('created_at', 'desc')->get();

    $json = ["commentData" => $commentData];

    return response()->json($json);
}

}
