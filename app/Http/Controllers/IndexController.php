<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // ボイスキャスト選択画面
    public function index(){
        return view('/index/index');
    }

    // ボイス選択画面
    public function voice(){
        return view('/index/voice');
    }
}
