@extends('layouts.design4')

<style>



  .pagination { font-size:48px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }

  
            html, body {
              background-image:url('../image/b119.jpg');
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
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
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




@section('content')

<form action="image_confirm" method="post" enctype="multipart/form-data" id="form">
  @csrf
  ファイル：
  <input type="file" name="imagefile" value="" id="file-input" accept="image/*" required/><br /><br />

  名前：
  <input type="text" name="product_name" size="50" value="{{ old('name') }}" required/><br /><br />

  季節：
  <label><input type="radio" value="0"  name="season" checked>春</label>
    <label><input type="radio" value="1" name="season">夏</label>
    <label><input type="radio" value="2"  name="season">秋</label>
    <label><input type="radio" value="3"  name="season">冬</label><br><br>
  <!--次のinputに仮にデータが既に入っている。-->
  <input type="number" name="latitude" value="1.1" id="latitude" hidden />
  <input type="number" name="longitude" value="2.2" id="longitude" hidden />
  <input type="text" name="cityName" value="Crazy city" id="cityName" hidden />

  <label>はい<input type="radio" value="1"  name="flag"></label>
  <label>いいえ<input type="radio" value="0"  name="flag"></label>
  
  <button type="submit" name="confirm" value="send">確認</button>
</form>
<table>
<select onChange="location.href=value;">
    <option value="/image_input?sort=path">写真</a></th>
    <option value="/image_input?sort=product_name">花の名前</a></th>
    <option value="/image_input?sort=season">季節</a>
  </select>
  <tr>
  <tr>
      <th>写真</th>
      <th>花の名前</th>
      <th>季節</th>
    </tr>
    <div class="content">
    @foreach($items as $item)
      <tr>
        <td><a href="/image_show?id={{$item->id}}"><img src="{{$item->path}}" width="200" height="130"></a></td>
        <td>{{$item->product_name}}</td>
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
    @endforeach
  </table>
  {{$items->appends(request()->query())->links('pagination::default')}}
@endsection