@extends('layouts.design4')
<!doctype html>
<head>
     <!--使用するjQueryを定義-->
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

@section("content")
<form action='image_confirm' method="post" enctype="multipart/form-data">
    <img id="img_prv">
    @csrf
    <label class="btn btn-info">
      &#x1F4F8;
      <input id="img_upload" type="file" name="imagefile" class="d-none" onchange="$('#fake_text_box').val($(this).val())">
    </label><br>
    @error('imagefile')
      <tr><td><font color="red">{{$message}}</font></td></tr><br>
    @enderror

    <input type="text" id="fake_text_box" value="" size="35" readonly onClick="$('#file').click();"><br /><br />

    @error('product_name')
      <tr><td><font color="red">{{$message}}</font></td></tr><br>
    @enderror
    花の名前：
    <input type="text" name="product_name" size="50" value="{{old('product_name')}}"/><br /><br />

    @error('season')
      <tr><th>ERROR</th>
      <td><font color="red">{{$message}}</font></td></tr><br>
    @enderror
    季節：
    <label><input type="radio" value="0"  name="season" checked>春</label>
    <label><input type="radio" value="1" name="season">夏</label>
    <label><input type="radio" value="2"  name="season">秋</label>
    <label><input type="radio" value="3"  name="season">冬</label><br><br>
    
  <input type="number" name="latitude" value="1.1" id="latitude" hidden />
  <input type="number" name="longitude" value="2.2" id="longitude" hidden />
  <input type="text" name="cityName" value="Crazy city" id="cityName" hidden />

  公開する:
  <label>はい<input type="radio" value="1"  name="flag"checked></label>
  <label>いいえ<input type="radio" value="0"  name="flag"></label>
  

    <br>
    <br><input type="submit" name="confirm" id="button" value="アルバムに登録する" style="font-size:18pt; background-color:#ffd700; border-radius:12px"　 />
  </form>

<script>
    //画像が選択される度に、この中の処理が走る
    $('#img_upload').on('change', function (ev) {

        //コンソールタブで適切に処理が動いているか確認
        console.log("image is changed");

        //このFileReaderが画像を読み込む上で大切
        const reader = new FileReader();
        //--ファイル名を取得
        const fileName = ev.target.files[0].name;

        //--画像が読み込まれた時の動作を記述
        reader.onload = function (ev) {
            $('#img_prv').attr('src', ev.target.result).css('width', '200px').css('height', '150px');
        }
        reader.readAsDataURL(this.files[0]);
    })
</script>
@endsection

<style>



label{
  color:black;
  background-color:white;
  padding:6px;
  font-size:20pt;
}
.content{
  position:relative;
  top:5%;
  zoom:2;
}

</style>