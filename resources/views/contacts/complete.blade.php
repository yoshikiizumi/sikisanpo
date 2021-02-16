@extends('layouts.design5')

@section('content')
@csrf
<h1>{{ __('送信完了') }}</h1><br>
<h2>お問い合わせありがとうございます。<br>
フォームの送信は無事完了いたしました。</h2><br>

<a href="/contacts" style="font-size:24pt;">戻る</a>

@endsection

