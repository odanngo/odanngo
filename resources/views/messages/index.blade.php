<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <div class="card-body">
        <a href="{{ route('messages.show') }}" class="btn btn-primary">詳細へ</a>
        <a href="{{ route('messages.create') }}" class="btn btn-primary">書き込む</a>
        @foreach ($messages as $message)
                    <p class="card-text">内容：{{ $message->body }}</p>
                    <p class="card-text">投稿者：{{ $names[$loop->index] }}</p>
        
    <div class="row justify-content-center">
        @if($message->likes->where('id', Auth::id())->count()==1)
           <div class="col-md-3">
             <form action="/unlikes/{{ $message->id }}" method="POST">
             @csrf
            <input type="submit" value="&#xf164;いいね取り消す" class="fas btn btn-danger">
             </form>
           </div>
        @else
            <div class="col-md-3">
            <form action="/likes/{{ $message->id }}" method="POST">
            @csrf
            <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
            </form>
            </div>
        @endif
        @endforeach
 <div class="row justify-content-center">
    <p>いいね数：{{ $message->likes()->count() }}</p>
</div>
                    </div>
                </div>
    @endsection
</html>
