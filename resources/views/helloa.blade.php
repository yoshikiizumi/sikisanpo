@extends('layouts.design3')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--小さい日本地図-->
   

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <header>

    <div class="mypage">
  <a href ="./mypage"><img src="../image/人物.png"></a>

</div>
    <div class="box3">
  <p><span style="font-size:1.5em"><?php $user = Auth::user(); ?>{{ $user->name }} </span>さん</p>
  </div>
    </header>


</head>


<script>


    function initMap() {

        <?php foreach ($data as $blog) : ?>
            <?php echo "const id" . $blog->id . " = {" ?>
            <?php echo "lat: " . $blog->latitude . "," ?>
            <?php echo "lng: " . $blog->longitude ?>
            <?php echo "};" ?>
        <?php endforeach; ?>
        //上のコードはこの形式のデータを繰り返して作成する
        //const id68 = {
        //    lat: 36.363,
        //    lng: 138.044
        //};




        let tokyo = {lat:35.658,lng:139.745}
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: tokyo,
        });
        


        <?php foreach ($data as $blog) : ?>
            <?php echo "const contentStringid" . $blog->id . " =" ?>
            <?php echo "'<h1>" . $blog->product_name . "</h1>' +" ?>
            <?php echo '\'<img src="' . $blog->path . '" width="300" height="300">\';'?>
        <?php endforeach; ?>
        //上のコードはこの形式のデータを繰り返して作成する
        //const contentStringid68 =
        //    '<h1>はっちゃん</h1>' +
        //    '<img src="storage/productimage/g9NJ4ClwzSGidC61eEtuyR9RuD3RboYUbJiQi9xO.jpg" width="200" height="200">';
        
        


        <?php foreach ($data as $blog) : ?>
            <?php echo "const infowindowid" . $blog->id . " = new google.maps.InfoWindow({" ?>
            <?php echo "content: contentStringid" . $blog->id . "," ?>
            <?php echo "});" ?>
        <?php endforeach; ?>
        //上のコードはこの形式のデータを繰り返して作成する
        //const infowindowid68 = new google.maps.InfoWindow({
        //    content: contentStringid68,
        //});
        

        
    

        <?php foreach ($data as $blog) : ?>
            <?php echo "const markerid" . $blog->id . " = new google.maps.Marker({" ?>
            <?php echo "position: id" . $blog->id . "," ?>
            <?php echo "map,"?>
            <?php echo "title: \"これは何かわからないけどいったんのこします\","?>
            <?php echo "});" ?>
        <?php endforeach; ?>
        //上のコードはこの形式のデータを繰り返して作成する
        //const markerid68 = new google.maps.Marker({
        //    position: id68,
        //    map,
        //    title: "これは何かわからないけどいったん残します",
        //});

        
        
        <?php foreach ($data as $blog) : ?>
            <?php echo "markerid" . $blog->id . ".addListener(\"click\", () => {" ?>
            <?php echo "infowindowid" . $blog->id . ".open(map, markerid" . $blog->id . ");" ?>
            <?php echo "});"?>
        <?php endforeach; ?>
        //上のコードはこの形式のデータを繰り返して作成する
        //markerid68.addListener("click", () => {
        //    infowindowid68.open(map, markerid68);
        //});
        
    }
</script>









<body>
    <!--<pre>
    <?php var_dump($data) ?>
    </pre>-->
    
    <div id="map" style="height:60%; width:50%px; top:20%; left:0%;">
    </div>
</body>



<!-- Google MAP API KEY -->
<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyA89oXO9CHChzkj06f_00fFBbheW6xDFEU&callback=initMap" async defer></script>










<!-- Styles -->
<style>
    .map{
        
    }
    
    .map2 {
        position: fixed;
        width: 600px;
        /*ボタンの横の長さ*/
        height: 400px;
        /*ボタンの縦の長さ*/
        top: 5%;
        left: 85%;

        z-index: 10;
        background-image: url('../image/map2.png');
        background-size: cover;
        /* 画像のサイズを指定 */
        width: 10%;
        /* 横幅のサイズを指定  */
        height: 100px;
        display: inline-block;
        /* 縦幅のサイズを指定*/
    }

    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 20px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

</html>