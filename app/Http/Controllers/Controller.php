<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        if(Auth::check()){
            return view('index');
        }else{
            return view('auth/login');
        }
    }

   

    public function index2(){
        if(Auth::check()){
            return view('index2');
        }else{
        return view('auth/login');
     }
    }
}


