@extends('layouts.design6')
<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
  button{
    width:300px;
    height:100px; 
    font-size:24pt;
    background-color:#d1ffff;
    border-radius:12px;
    margin:100px 350px ;
  }
</style>

<header>
<div class="mypage">
  <a href ="./mypage_2"><img src="../image/人物.png"></a>
</div>


<div class="box3">
  <p><span style="font-size:1.5em"><?php $user = Auth::user(); ?>{{ $user->name }} </span>さん</p>
  </div>
</header>
<br>
<br>
<br>
<br>
<br>
<h1>本当に削除してもよろしいですか？<h1>

@section('content')
<form action="/image_del" method="post">


  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr><th>写真 </th><td><img src="{{$form->path}}" width="200" height="130"></td></tr>
    <tr><th>名前 </th><td>{{$form->product_name}}</td></tr>
    <br>
  </table>
   <div><input type="submit" value="削除する"style="font-size:24pt;background-color:#ffff7f; border-radius:12px"></div>
</form>
@endsection

<button id="history" onClick="location.href='/image_input'">やっぱりやめる</button>



