<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //一覧ページ
    public function index()
    {
        return view('posts.index');
    }

    // 作成ページ
    public function create()
    {
        return view('posts.create');
    }
}
