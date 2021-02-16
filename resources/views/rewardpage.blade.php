@extends('layouts.design2')
<html>
<header>
@csrf
<div class="mypage">
<a href ="./mypage_2"><img src="../image/人物.png"></a>

</div>
<div class="box3">
<p><span style="font-size:1.5em"><?php $user = Auth::user(); ?>{{ $user->name }} </span>さん</p>
</div>
</header>

<head>
   <meta charset="UTF-8" />
   <title>称号ページ</title>
</head>
<body>

<style>
.topic-title{
   background-color: mediumorchid;
}
.topic-image{
/*width: 900px;*/
  text-align:center; 

  /*  追加 */
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 20px; 
}
.topic-image img{
   /* 追加 */
   width: 100%;
}
</style>
<div class='topic'>
   <br>
   <div class="topic-title">
      <h2>称号一覧</h2>
   </div>
   <div class='topic-image'>
      <img src='../image/称号1.png'>
      <img src='../image/称号2.png'>
      <img src='../image/称号3.png'>
      <img src='../image/称号4.png'>
      <img src='../image/称号5.png'>
      <img src='../image/称号6.png'>
      <img src='../image/称号7.png'>
      <img src='../image/称号8.png'>
      <img src='../image/称号9.png'>
      <img src='../image/称号10.png'>
      <img src='../image/称号11.png'>
      <img src='../image/称号12.png'>
      <img src='../image/称号13.png'>
      <img src='../image/称号14.png'>
      <img src='../image/称号15.png'>
      <img src='../image/称号16.png'>
      <img src='../image/称号17.png'>
      <img src='../image/称号18.png'>
      <img src='../image/称号19.png'>
      <img src='../image/称号20.png'>
      <img src='../image/称号21.png'>
      <img src='../image/称号22.png'>
   </div>
</div>


</body>
</html>
