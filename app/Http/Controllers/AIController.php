<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AIController extends Controller
{
     
    public function artifitialIntelligence(Request $request){
        return view('artifitial_intelligence',[
            'config' => config('common_config'),
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
