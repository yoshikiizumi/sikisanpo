@extends('layouts.design4')
<head>
  <button id="square_btn" onClick="history.back()">戻る</button>
</head>
<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
</style>


@section('content')
<form action="image_input" method="get">
  <table>
    <select onChange="location.href=value">
      <option value="">選択してください</option>
      <option value="/image_search?sort=path">写真</option>
      <option value="/image_search?sort=product_name">花の名前</option>
      <option value="/image_search?sort=season">季節</option>
    </select>
<!--
      @if($selects == '/image_search?sort=path')
        <option value="/image_search?sort=path" selected>写真</option>        
      @elseif($selects == '/image_search?sort=product_name')
        <option value="/image_search?sort=product_name" selected>花の名前</option>
      @elseif($selects == '/image_search?sort=season')
        <option value="/image_search?sort=season" selected>季節</option>
      @else
        <option value="">選択してください</option>
      @endif
-->
    <tr>
      <th>写真</th>
      <th>花の名前</th>
      <th>季節</th>
    </tr>
    <div class="content">
    @foreach($items as $item)
      <tr>
        <td><a href="/image_show?id={{$item->id}}"><img src="{{$item->path}}" width="200" height="130"></a></td>
        <td>{{$item->product_name}}</td>
        @if($item->season == 0)
          <td>春</td>
        @elseif($item->season == 1)
          <td>夏</td>
        @elseif($item->season == 2)
          <td>秋</td>
        @else
          <td>冬</td>
        @endif
      </tr>
    @endforeach
  </table>
  {{$items->appends(request()->query())->links('pagination::default')}}
@endsection