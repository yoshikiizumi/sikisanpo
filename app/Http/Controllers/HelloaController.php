<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HelloaController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function indexa(){

            $data = DB::select('select * from products');
            return view('helloa', ['data' => $data]);
    
    }
}