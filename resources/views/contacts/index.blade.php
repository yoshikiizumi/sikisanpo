@extends('layouts.design5')
 
@section('content')


<form method="POST" action="contacts/confirm">
    @csrf
<div id ="mail">
    <label>メールアドレス：</label>
    <input name="email" value="{{ old('email') }}" type="text"><br>
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p><br>
    @endif
</div>

    <label>タイトル:</label>
    <input name="title" value="{{ old('title') }}" type="text"><br>
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title') }}</p><br>
    @endif


    <label>お問い合わせ内容</label><br>
    <textarea  name="body">{{ old('body') }}</textarea><br>
    @if ($errors->has('body'))
        <p class="error-message">{{ $errors->first('body') }}</p><br>
    @endif

    <button type="submit" name="action" value="">確認</button>
</form>


<style>
textarea{
    width:800px;
    height:500px;
}

button{
    width:100px;
    height:50px;
    font-size:24pt;
}

form{
    position:relative;
    top:320px;
}



</style>


@endsection