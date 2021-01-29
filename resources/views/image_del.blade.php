@extends('layouts.design4')
<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
</style>
@section('title', 'index')



@section('content')
<form action="/image_del" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr><th>写真 </th><td><img src="{{$form->path}}" width="200" height="130"></td></tr>
    <tr><th>名前 </th><td>{{$form->product_name}}</td></tr>
    <tr><th>季節 </th><td>{{$form->season}}</td></tr>
    <tr><th></th><td><input type="submit" value="削除"></td></tr>
  </table>
  </form>
@endsection


