@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="font-size:16pt;">{{ __('ようこそ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href='./tuto'style="font-size:26pt;">{{ __('さっそくはじめる') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="../image/sakura.png">
@endsection
　<style>
main{
    zoom:1.1;
}
body{
    background-image:url('../image/b119.jpg');
}
img{
    width:360px;
    height:360px;
}
</style>