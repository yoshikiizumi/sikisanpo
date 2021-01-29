@extends('layouts.helloapp')
<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
</style>
@section('title', 'Add')

@section('menubar')
  @parent
  追加ページ
@endsection

@section('content')
  <form action="/map/add" method="post">
  <table>
    @csrf
    <tr><th>写真 </th><td><input type="text" name="photo"></td></tr>
    <tr><th>日付 </th><td><input type="text" name="date"></td></tr>
    <tr><th>場所 </th><td><input type="text" name="area"></td></tr>
    <tr><th></th><td><input type="submit" value="追加"></td></tr>
  </table>
  </form>
  </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
