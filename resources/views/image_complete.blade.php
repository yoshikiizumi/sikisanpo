@extends('layouts.helloapp')
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
<table>
  <tr>
    <th>写真</a></th>
    <th>名前</a></th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td><img src="{{$item->path}}" width="200" height="130"></td>
      <td>{{$item->product_name}}</td>
    </tr>
  @endforeach
</table>
@endsection

