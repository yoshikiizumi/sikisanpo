<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $sort = 'id';
        $items = Person::oderBy($sort, 'asc')->simplePaginate(5);
        $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
        return view('hello.index', $param);
    }

    public function post(Request $request) {
        $items = DB::select('select * from player');
        return view('hello.index', ['items'=>$items]);
    }

    public function getAuth(Request $request) {
        $param = ['message' => 'ログインして下さい。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしました。(' . Auth::user()->name . '(';
        } else {
            $msg = 'ログインに失敗しました。';
        }
        return view('hello.auth', ['message' => $msg]);
    }
}
