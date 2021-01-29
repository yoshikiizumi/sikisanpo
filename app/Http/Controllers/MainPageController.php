<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Auth;


class MainPageController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        if(Auth::check()){

            $data = DB::select('select * from products');
            return view('index', ['data' => $data]);
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

