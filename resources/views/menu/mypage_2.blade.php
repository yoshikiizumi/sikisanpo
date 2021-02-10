@extends('layouts.design2')

<style>

  .pagination { font-size:10px; }
  .pagination li { display:inline-block }
  tr th a:link { color:white; }
  tr th a:visited { color:white; }
  tr th a:hover { color:white; }
  tr th a:active { color:white; }
  h3{
    text-align: center;
  }
  
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

<br>
<br>
<br>
<br>
<h3>ユーザー名：<?php $user = Auth::user(); ?>{{ $user->name }}</h3>
<h3>メールアドレス：<?php $user = Auth::user(); ?>{{ $user->email }}</h3>
<h3>性別：<?php $user = Auth::user(); ?>{{ $user->seibetu }}</h3>
<h3>生年月日：<?php $user = Auth::user(); ?>{{ $user->birth }}</h3>
<h3>現在の称号：散歩初心者</h3>
