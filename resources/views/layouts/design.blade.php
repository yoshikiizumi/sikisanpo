<!-- デザイン -->
<html>
<head>

<div class="w1000">
        <input id="nav-input" type="checkbox" class="nav-hidden">
        <label id="menubtn" for="nav-input"><img src="../image/menuicon.png"></label>
        <nav>
            <ul>
                <li><a href="/jissyu3">チュートリアル</a></li>
                <li><a href="/rewardpage">実績</a></li>
                <li><a href="/sendpage">写真を送る</a></li>
                <li><a href={{ route('logout') }} onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                  ログアウト
                  </a></li>
                  <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
                  @csrf

            </ul>  
        </nav>
 </div>

    <title>@yield('title')</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet"> -->
    <style>

html, body {
              background-image:url('../image/b119.jpg');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

#menubtn img{
                width:100%;
                max-width: 50px;
            }
            .w1000{
                max-width:1000px;
                margin: 0 auto;
            }
            nav{
                background-color:#ccc;
                padding:20px 3%;
            }
            .nav-hidden{
            display:none;
            }
            /*ハンバーガーメニュー*/
            #menubtn img{
                width:100%;
                max-width: 120px;
            }
            .w1000{
                max-width:200px;
                margin: 0 auto;
                position: fixed;
                top: 50px;
                left: 16px;
                 /* ボタンの大きさ  */
                width: 200px;
                height: 200px;
                /* 最前面に */
                z-index: 10;
                line-height: 50px;
                

            }
            nav{
                background-color:#98fb98;
                padding:50px 3%;
                display: none;
            }
            #nav-input:checked ~ nav {/*チェック入ってるとき ~ メニューが*/
                display: block;/*追加*/
                animation: 1s fadeIn;/*追加*/
            }
            @keyframes fadeIn {
                from { opacity: 0; }/*追加*/
                to { opacity: 1; }/*追加*/
            }
            .nav-hidden{
                display:none;
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
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;}
    table th, table td {border: solid 1px black;}
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
    display:  inline-block; 
}

.box > li {
    display:  inline-block;     /* インラインブロック要素にする */
    width: 190px;               /* 幅指定 */
    vertical-align:  middle;    /* 要素を上下中央で揃える */
}

.map{
  position:fixed;
  width:600px;/*ボタンの横の長さ*/
  height:400px;/*ボタンの縦の長さ*/
  bottom:1%;
  left:20%;
  

    background-image:url('../image/map.png');
    background-size:cover;                 /* 画像のサイズを指定    */
    width:12%;                              /* 横幅のサイズを指定    */
    height:168px;                            /* 縦幅のサイズを指定    */
}

.m{
  position:fixed;/*スクロールしても移動しない*/
  top:90%;/*文字の高さ*/
  left:20%;/*文字の横移動*/
  width:85px;/*横幅*/
  box-sizing:border-box;
  height:50px;
  padding:10px;
  background:skyblue;
}


.camera{
    position:fixed;
  width:600px;/*ボタンの横の長さ*/
  height:400px;/*ボタンの縦の長さ*/
  bottom:1%;
  right:45%;
  

    background-image:url('../image/camera.png');/*画像を指定*/
    background-size:cover;                 /* 画像のサイズを指定    */
    width:12%;                              /* 横幅のサイズを指定    */
    height:168px;                            /* 縦幅のサイズを指定    */
}

.c{
  position:fixed;
  top:90%;
  right:45%;
  width:85px;
  box-sizing:border-box;
  height:50px;
  padding:10px;
  background:skyblue;
}


.gallery{
    position:fixed;
  width:600px;/*ボタンの横の長さ*/
  height:400px;/*ボタンの縦の長さ*/
  bottom:1%;
  right:20%;
  

    background-image:url('../image/gallery.png');
    background-size:cover;                 /* 画像のサイズを指定    */
    width:12%;                              /* 横幅のサイズを指定    */
    height:168px;                            /* 縦幅のサイズを指定    */
}

.a{
  position:fixed;
  top:90%;
  right:20%;
  width:100px;
  box-sizing:border-box;
  height:50px;
  padding:5px;
  background:skyblue;
}



/*ここまで各ボタン */
</style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</head>


<main>
    <!--  <div class="m">マップ</div> 
      <div class="c">カメラ</div>
      <div class="a">アルバム</div> 
      
    !-->   

      <div class="box">
        <tr><a type="button" href="./index" class="map"></a></tr>
        <tr><a type="button" href="./sendtestpage" class="camera"></a></tr>
        <tr><a type="button" href="./image_input" class="gallery"></a></tr>
      </div>
    </main>

</html>
