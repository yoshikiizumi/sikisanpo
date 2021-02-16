<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Auth;

class MenuController extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('menu.tuto');
        }else{
            return view('auth/login');
        }
    }


    public function index2(){
        if(Auth::check()){
            return view('rewardpage');
        }else{
            return view('auth/login');
        }
    }
    
    public function index3(Request $request){
        if(Auth::check()){

            $data = DB::select('select * from products');
            return view('menu.send', ['data' => $data]);
        }else{
            return view('auth/login');
        }
    }

    public function index4(){
        if(Auth::check()){
            return view('menu.mypage_2');
        }else{
            return view('auth/login');
        }
    }
}

