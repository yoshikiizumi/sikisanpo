<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    
    public function index(Request $request) {
        $items = DB::select('select * from maps');
        return view('map.index',['items' => $items]);
    }

    public function post(Request $request) {
        $item = DB::select('select * from maps');
        return view('map.index', ['items' => $items]);
    }

    public function show(Request $request) {
        $id = $request->id;
        $item = DB::table('maps')->where('id', $id)->first();
        return view('map.show', ['item' => $item]);
    }

    public function add(Request $request) {
        return view('map.add');
    }

    public function create(Request $request) {
        $param = [
            'photo' => $request->photo,
            'date' => $request->date,
            'area' => $request->area,
        ];
        DB::insert('insert into maps (photo, date, area) values(:photo, :date, :area)', $param);
        return redirect('/map');
    }

    public function edit(Request $request) {
        $param = ['id' => $request->id];
        $item = DB::select('select * from maps where id = :id', $param);
        return view('map.edit', ['form' => $item[0]]);
    }

    public function update(Request $request) {
        $param = [
            'id' => $request->id,
            'photo' => $request->photo,
            'date' => $request->date,
            'area' => $request->area,
        ];
        DB::update('update maps set photo = :photo, date = :date, area = :area where id = :id', $param);
        return redirect('/map');
    }

    public function del(Request $request) {
        $param = ['id' => $request->id];
        $item = DB::select('select * from maps where id = :id', $param);
        return view('map.del', ['form' => $item[0]]);
    }

    public function remove(Request $request) {
        $param = ['id' => $request->id];
        DB::delete('delete from maps where id = :id', $param);
        return redirect('/map');
    }
}
