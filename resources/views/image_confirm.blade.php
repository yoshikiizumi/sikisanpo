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
                @if($data['season'] == 0)
                        <td>春</td>
                    @elseif($data['season'] == 1)
                        <td>夏</td>
                    @elseif($data['season'] == 2)
                        <td>秋</td>
                    @else
                        <td>冬</td>
                    @endif
            </tr>
            <tr>       
                <td>町名</td>
                <td>{{ $data['cityName'] }}</td>
            </tr>
            <tr>
            <td>表示</td>
            @if ($data['flag'] == 1)
                <td>表示する</td>
            @else
                <td>表示しない</td>
            @endif
            </tr>
        </table>
        <input type="submit" style="width:100px;
    height:50px;
    font-size:24pt;"  name="action" value="送信" />
    </form>

   
@endsection
