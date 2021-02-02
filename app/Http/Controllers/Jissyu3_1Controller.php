<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Auth;

class Jissyu3_1Controller extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('jissyu3_1.input');
        }else{
            return view('auth/login');
        }
    }


    public function index2(){
        if(Auth::check()){
            return view('jissyu3_1.rewardpage');
        }else{
            return view('auth/login');
        }
    }
    
    public function index3(){
        if(Auth::check()){
            return view('jissyu3_1.sendpage');
        }else{
            return view('auth/login');
        }
    }
    public function index4(){
        if(Auth::check()){
            return view('jissyu3_1.sendtestpage');
        }else{
            return view('auth/login');
        }
    }

    public function index5(){
        if(Auth::check()){
            return view('jissyu3_1.mypage');
        }else{
            return view('auth/login');
        }
    }
}