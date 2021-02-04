<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloaController extends Controller
{
    public function indexa(){

            $data = DB::select('select * from products');
            return view('indexa', ['data' => $data]);
    
    }
}