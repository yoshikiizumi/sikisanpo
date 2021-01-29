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
  <td><a href="/player/add">新規登録</a></td>
  <tr>
    <th>ID</th>
    <th>名前</th>
    <th>生年月日</th>
    <th>歩数</th>
    <th>ログイン日数</th>
    <th>報酬</th>
    <th>ランキング</th>
    <th>ポイント</th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->step}}</td>
      <td>{{$item->login}}</td>
      <td>{{$item->present}}</td>
      <td>{{$item->rank}}</td>
      <td>{{$item->point}}</td>
      <td><a href="/player/show?id={{$item->id}}">詳細</a></td>
      <td><a href="/player/edit?id={{$item->id}}">更新</a></td>
      <td><a href="/player/del?id={{$item->id}}">削除</a></td>
    </tr>
  @endforeach
  </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
