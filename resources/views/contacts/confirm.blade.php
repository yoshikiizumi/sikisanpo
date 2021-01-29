@extends('layouts.design')

@section('content')

<form method="POST" action="/contacts/complete">
    @csrf

    <label>メールアドレス：</label>
    {{ $inputs['email'] }}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden"><br>

    <label>タイトル</label>
    {{ $inputs['title'] }}
    <input name="title" value="{{ $inputs['title'] }}" type="hidden"><br>

    <label>お問い合わせ内容</label><br>
    {!! nl2br(e($inputs['body'])) !!}
    <input name="body" value="{{ $inputs['body'] }}" type="hidden"><br><br>

    <button type="submit" name="action" value="back">修正</button>
    <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection