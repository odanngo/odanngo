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
        <h1>野球名鑑と掲示板</h1>
        <p class='create'>[<a href='/scores/show'>成績を記録する</a>]</p>
        <p class='borad'>[<a href='/messages'>掲示板を見る</a>]</p>
        <div class='scores'>
            @foreach ($scores as $score)
            <div class='scores'>
                <a href="/scores/{{ $score->id }}"><h2 class='title'></h2></a>
                <p class='body'>野球好きの方大歓迎</p>
                <form action="/scores/{{ $score->id }}" id="form_{{ $score->id }}" method="score" style="display:inline">
                    @csrf
                     @method('DELETE')
                    <button type="submit">delete</button> 
                </form>
                
            </div>
            @endforeach
        </div>
      
        <div class='paginate'>
            {{ $scores->links() }}
        </div>
    </body>
    @endsection
</html>
