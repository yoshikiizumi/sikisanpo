@extends('layouts.design4')

<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
</style>




@section('content')
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <tr><th>写真 </th><td><a href="{{$item->path}}" data-lightbox="group" width="200" height="130"><img src="{{$item->path}}" width="200" height="130"></td></tr>
    <tr><th>名前 </th><td>{{$item->product_name}}</td></tr>
    <tr><th>季節 </th>
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
    <tr><th>共有 </th><td>
      <div class="fb-share-button" data-href="https://jannepiirainen.github.io/shikisanpowelcometest/everest.html" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">facebook</a> / 
      
      <a class="twitter-share-button"
      href="https://twitter.com/intent/tweet?text=Shikisanpoppu%20konnichiwa&url=https://jannepiirainen.github.io/shikisanpowelcometest/everest.html"url="wikipedia.org">
      twitter</a></div></td>
    </tr>
  </table>  
  <button id="square_btn" style="width:100px;
    height:50px; font-size:24pt;"  name="action" onClick="history.back()">戻る</button>
@endsection


