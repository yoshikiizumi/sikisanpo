@extends('layouts.helloapp')
 
@section('content')

<form method="POST" action="contacts/confirm">
    @csrf

    <label>メールアドレス：</label>
    <input name="email" value="{{ old('email') }}" type="text"><br>
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p><br>
    @endif

    <label>タイトル</label>
    <input name="title" value="{{ old('title') }}" type="text"><br>
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title') }}</p><br>
    @endif

    <label>お問い合わせ内容</label><br>
    <textarea name="body">{{ old('body') }}</textarea><br>
    @if ($errors->has('body'))
        <p class="error-message">{{ $errors->first('body') }}</p><br>
    @endif

    <button type="submit" name="action" value="">確認</button>
</form>


@endsection