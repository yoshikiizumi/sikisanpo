@extends('layouts.design4')

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v9.0" nonce="j4fhzcdE"></script>


<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
  
</style>



@section('content')
<br>
<br>
<br>
<br>
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <tr><th>写真 </th><td><a href="{{$item->path}}" data-lightbox="group" width="300" height="230"><img src="{{$item->path}}" width="300" height="230"></td></tr>
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
    <tr><th>フェイスブック共有</th>
    
    <td><div class="fb-share-button" data-href="https://44.192.63.218/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F44.192.63.218%2Findexa&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div></td>
    </a></div></td></tr>
    <tr><th>ツイッター共有</th>
    <td><a href="//twitter.com/share" class="twitter-share-button" data-text="test" data-url="https://44.192.63.218/" data-lang="ja">
 Tweet
 </a></div></td></tr>
  </table>  
  <br>
  <br>
  <button type="button" onclick="location.href='/image_del?id={{$item->id}}' "style="width:200px;
    height:100px; font-size:28pt;margin-right:120px;background-color:#ffff7f; border-radius:12px">削除する</button>
  <button id="square_btn" style="width:200px;
    height:100px; font-size:28pt;background-color:#d1ffff; border-radius:12px"  name="action" onClick="history.back()">戻る</button>
@endsection


