<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
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
            return view('menu.reward');
        }else{
            return view('auth/login');
        }
    }
    
    public function index3(){
        if(Auth::check()){
            return view('menu.send');
        }else{
            return view('auth/login');
        }
    }
    

    public function index4(){
        if(Auth::check()){
            return view('menu.mypage');
        }else{
            return view('auth/login');
        }
    }
}

