@extends('layouts.design4')
<style>
  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
</style>


@section('menubar')
  @parent

@endsection

@section('content')
    <form action="image_input" method="post">
        @csrf
        <table border="1">
            <tr>
                <td>写真</td>
                <td><img src="{{ $data['read_temp_path'] }}" width="200" height="130"></td>
            </tr>
            <tr>
                <td>名前</td>
                <td>{{ $data['product_name'] }}</td>
            </tr>
            <tr>
                <td>季節</td>
                <td>{{ $data['season'] }}</td>
            </tr>
            <tr>
                <td>緯度</td>
                <td>{{ $data['latitude'] }}</td>
            </tr>
            <tr>
                <td>経度</td>
                <td>{{ $data['longitude'] }}</td>
            </tr>
            <tr>
                <td>町名</td>
                <td>{{ $data['cityName'] }}</td>
            </tr>
        </table>
        <input type="submit" name="action" value="送信" />
    </form>
@endsection
