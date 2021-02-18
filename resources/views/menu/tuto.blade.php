<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
@csrf
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="image/s1.png" alt=""></div>
      <div class="swiper-slide"><img src="image/s2.png" alt=""></div>
      <div class="swiper-slide"><img src="image/s3.png" alt=""></div>
      <div class="swiper-slide"><img src="image/s41.png" alt=""></div>
    </div>
    <div class="swiper-pagination swiper-pagination-black"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true ,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

})
</script> 
<div style="text-align: right;">
<h2>スライドして次へ</h2>
</div>
<div style="margin-bottom:35px"></div>
<div style="text-align: center;">
<a href="/indexa" class="btn-flat-simple"style="font-size:20;">マップ画面へ</a>
</div>
    </body>
    <html>