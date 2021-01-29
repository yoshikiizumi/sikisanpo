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

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
  <td><a href="/map/add">新規登録</a></td>
  <tr>
    <th>ID</th>
    <th>写真</th>
    <th>日付</th>
    <th>場所</th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->photo}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->area}}</td>
      <td><a href="/map/show?id={{$item->id}}">詳細</a></td>
      <td><a href="/map/edit?id={{$item->id}}">更新</a></td>
      <td><a href="/map/del?id={{$item->id}}">削除</a></td>
    </tr>
  @endforeach
  </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
