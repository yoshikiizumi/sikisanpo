@extends('layouts.design3')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
    <header>

    <div>
        <a type="button" href="./index" class="map2"></a>
</div>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

        .map2{
            position:fixed;
            width:600px;/*ボタンの横の長さ*/
            height:400px;/*ボタンの縦の長さ*/
            top:30px;
            right:100px;
  
                z-index: 10;
                background-image:url('../image/back.png');
                background-size:cover;                 /* 画像のサイズを指定 */
                width:10%;                              /* 横幅のサイズを指定  */
                height:150px;      
                display:  inline-block;                  /* 縦幅のサイズを指定*/
            }
           
        </style>
<div class="mypage">
  <a href ="./mypage"><img src="../image/人物.png"></a>
</div>


<div class="box3">
  <p><span style="font-size:1.5em"><?php $user = Auth::user(); ?>{{ $user->name }} </span>さん</p>
  </div>
</header>
    <body>
    <div id="map" style="height:1200px; top:100px;">
	    </div>
        
        <script src="{{ asset('/js/result.js') }}"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyA89oXO9CHChzkj06f_00fFBbheW6xDFEU&callback=initMap" async defer>
	    </script>
    </body>
</html>



