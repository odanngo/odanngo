<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>成績表</h1>
            <p class='borad'>[<a href='/scores/create'>成績を記入する</a>]</p>
            <div class='message'>
                @foreach ($scores as $score)
                <h2>打席数<h2>
                <p class='body'>{{ $score->bats }}</p>
                <h2>安打数</h2>
                <p class='body'>{{ $score->hits }}</p>
                <h2>本塁打数</h2>
                <p class='body'>{{ $score->home_run }}</p>
                <h2>盗塁数</h2>
                <p class='body'>{{ $score->stolen_base }}</p>
                <p class ='updated_at'>{{ $score->updated_at }}</p>
            </div>
            @endforeach
            <div class='back'>[<a href='/'>back</a>]</div>
    </body>
    @endsection
</html>
</html>