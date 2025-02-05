<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    
    public function homePage(Request $request){
        return view('home_page ',[
            'config' => config('common_config'),
        ]);
    }
    public function ourProducts(Request $request){
        return view('product_list ',[
            'config' => config('common_config'),
        ]);
    }
    


    public function animation(Request $request){
        return view('animation ',[
            'config' => config('common_config'),
        ]);
    }


    
    public function analytics(Request $request){
        return view('data_analytics ',[
            'config' => config('common_config'),
        ]);
    }

    public function digitalMarketing(Request $request){
        return view('digital_marketing',[
            'config' => config('common_config'),
        ]);
    }
    

}
