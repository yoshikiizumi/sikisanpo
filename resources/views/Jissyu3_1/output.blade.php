<html>
<head>
<title>Jissyu/Index</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
@csrf
  <h1>Blade/Index</h1>
  <p>{{$msg}}</p>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">1ページ目</div>
      <div class="swiper-slide">2ページ目</div>
      <div class="swiper-slide">3ページ目</div>
    </div>
    <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-scrollbar"></div>
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
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
    </body>
    <html>