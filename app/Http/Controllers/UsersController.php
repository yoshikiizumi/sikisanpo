<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $sort = 'id';
        $items = Person::oderBy($sort, 'asc')->simplePaginate(5);
        $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
        return view('player.index', $param);
    }
}
