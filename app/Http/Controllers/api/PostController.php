<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts, 200);
    }
}
