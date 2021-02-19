<!-- デザイン -->
<html>

<header>
<div class="mypage">
  <a href ="./mypage_2"><img src="../image/人物.png"></a>
</div>


<div class="box3">
  <p><span style="font-size:1.5em"><?php $user = Auth::user(); ?>{{ $user->name }} </span>さん</p>
  </div>
</header>

<head>

<header>

  <div class="hamburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
      <div class="menu-content">
            <ul>
                <li><a href="/tuto">チュートリアル</a></li>
                <li><a href="/reward">実績</a></li>
                <li><a href="/send">みんなの地図</a></li>
                <li><a href="/contacts">お問い合わせ</a></li>
                <!--<li><a href={{ route('logout') }} onclick="event.preventDefault<();
               document.getElementById('logout-form').submit();">
                  ログアウト
                  </a></li>
                  <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;"> -->
                  @csrf
            </ul>  
      </div>
  </div>
</header>

    <title>@yield('title')</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet"> -->
    <style>

.mypage img{
  margin:10px;
  float:left;
  position:fixed;
  
}

.box3 {
  display:inline-block;
  width:30%;
  padding:0.5em; 1em;
  margin:40px 150px;
  font-weight:bold;
  color:#000;
  background:#fff;
  border:double 5px #7cfc00;
  border-radius:80px;
}

.box3 p{

  text-align:center;
  margin:0;
  padding:0;
}


html, body {
              background-image:url('../image/b119.jpg');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

  .menu-btn {
    position: fixed;
    top: 140px;
    left: 0px;
    display: flex;
    height: 90px;
    width: 90px;
    justify-content: center;
    align-items: center;
    z-index: 90;
    background-color: #24140e;
}
.menu-btn span,
.menu-btn span:before,
.menu-btn span:after {
    content: '';
    display: block;
    height: 3px;
    width: 30px;
    border-radius: 3px;
    background-color: #ffffff;
    position: absolute;
}
.menu-btn span:before {
    bottom: 8px;
}
.menu-btn span:after {
    top: 8px;
}

#menu-btn-check:checked ~ .menu-btn span {
    background-color: rgba(255, 255, 255, 0);/*メニューオープン時は真ん中の線を透明にする*/
}
#menu-btn-check:checked ~ .menu-btn span::before {
    bottom: 0;
    transform: rotate(45deg);
}
#menu-btn-check:checked ~ .menu-btn span::after {
    top: 0;
    transform: rotate(-45deg);
}

#menu-btn-check {
    display: none;
}

/* 以下メニュー */

.menu-content {
    width: 40%;
    height:50%;
    position: fixed;
    top: 8%;
    left: 0;
    z-index: 80;
    background-color: #ffdead;
}
.menu-content ul {
    padding: 70px 0px 0;
}

.menu-content li{
  background-color:#d6c6af;
}


.menu-content ul li {
    border-bottom: solid 1px #ffffff;
    border-top: solid 1px #ffffff;
    list-style: none;
}
.menu-content ul li a {
    display: block;
    width: 100%;
    font-size: 40px;
    font-weight:bold;
    box-sizing: border-box;
    color:#000000;
    text-decoration: none;
    padding: 50px 60px 50px 0;
    position: relative;

}
.menu-content ul li a::before {
    content: "";
    width: 7px;
    height: 7px;
    border-top: solid 4px #ffffff;
    border-right: solid 4px #ffffff;
    transform: rotate(45deg);
    position: absolute;
    right: 90px;
    top: 65px;
}



.menu-content {
    width: 40%;
    height: 50%;
    position: fixed;
    top: 8%;
    left: -100%;/*leftの値を変更してメニューを画面外へ*/
    z-index: 80;
    background-color: #ffdead;
    transition:  0.5s;/*アニメーション設定*/
}

#menu-btn-check:checked ~ .menu-content {
    left: 0;/*メニューを画面内へ*/
}





            
    ul {  list-style: none; text-decoration: none;}
    body {font-size:16pt; color:black; margin: 0px; }
    h1 {top:50px  font-size:40pt; text-align:center; color:black;
    margin:-10px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;}
    h2 {font-size:20pt; text-align:center; color:black;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin:50px; text-align:center;}
    .footer { text-align:right; font-size:10pt; margin:10px;
    border-bottom:solid 1px #ccc; color:#ccc; }
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:28pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    table {border-collapse: collapse; width:900px; text-align:center; margin:10px -5px 10px; table-layout: fixed;}
    table th, table td {border: solid 5px #7cfc00; border-radius: 50px;}
    .box1 {padding: 0.5em 0.5em ;margin: 0px 0px; width: auto;  border: solid 3px #000000; }
    .box1 p {margin: 0px 5px 0px -5px; padding: 0; width: auto 10;}
    
    .button_wrapper remodal-bg{font-size: 1.4em;
    font-weight: bold;
    padding: 10px 30px;
    color: #fff;
    border-style: none;
    box-shadow: 2px 2px 3px 1px #666;
    -moz-box-shadow: 2px 2px 3px 1px #666;
    -webkit-box-shadow: 2px 2px 3px 1px #666;
    text-shadow: 1px 1px 2px #000;
    background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
    background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

/*ここから各ボタン */

.button {
  display      : inline-block;
  border-radius: 50%;                  /* 角丸 */
  box-shadow   : 5px 5px 3px #666666;  /* 影の設定 */
  cursor       : pointer;              /* カーソル形状 */
  transition   : .3s;                  /* なめらか変化 */
}
.button:hover {
  box-shadow   : none;                 /* 影の設定 */
  border-radius: 0;                    /* 角丸 */
}

.box{
  display: flex;
	flex-wrap:wrap;
  position:fixed;
  bottom:0%;
  left:9%;
}

.box > li {
  width: 29%;
	box-sizing:border-box;
}

.box li img {
	max-width:100%; /*画像のはみだしを防ぐ*/
	height: auto; /*画像の縦横比を維持 */
  border:solid 2px #250d00; /*枠線*/
}



/*ここまで各ボタン */
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
    </ul>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
</body>

<main>

      <ul class="box">
        <li><a href="./indexa"><img src="../image/地図案.png"></a></li>
        <li><a href="./create"> <img src="../image/カメラ案.png"></a>
        </li>
         <li><a href="./image_input"> <img src="../image/アルバム案.png"></a>
        </li>
      </ul>
</main>

</html>
