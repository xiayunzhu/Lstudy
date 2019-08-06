<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add(Request $request)
    {
        \Log::info('嘿嘿嘿');
        echo '我是粑粑';
    }
}
