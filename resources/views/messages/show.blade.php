<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $messge->title }}
        </h1>
        <div class="content">
            <div class="content__message">
                <h3>本文</h3>
                <p>{{ $message->body }}</p>    
            </div>
        <div class="col-md-3"> 
         <form action="{{ route('likes', $mesage) }}" method="POST">
           @csrf
           <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
        </form>
        </div>
    <div class="col-md-3">
        <form action="{{ route('unlikes', $message) }}" method="POST">
        @csrf
        <input type="submit" value="&#xf164;いいね取り消す" class="fas btn btn-danger">
         </form>
     </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body
    @endsection
</html>
