<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
     
    public function login(Request $request){
        return view('user_login ',[
        ]);
    }

    public function userHome(Request $request){
        return view('user_home ',[
            'config' => config('common_config'),
        ]);
    }

    public function userList(Request $request){
        return view('user_list ',[
            'config' => config('common_config'),
            'data' => '',
        ]);
    }
}
