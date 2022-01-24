<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>成績記録</h1>
        <form action="/scores" method="post">
            @csrf
            <div class="bats">
                <h2>打席数</h2>
                <input type="text" name="score[bats]" placeholder="タイトル"/>
            </div>
            
            <div class="hits">
                <h2>安打数</h2>
                <input typ
                e="text" name="score[hits]" placeholder="タイトル"/>
            </div>        

            <div class="home_run">
            <h2>本塁打数</h2>
                <input type="text" name="score[home_run]" placeholder="タイトル"/>
            </div>
            
            <div class="home_run">
            <h2>盗塁数</h2>
                <input type="text" name="score[stolen_base]" placeholder="タイトル"/>
            </div>        
 
            <input type="submit" value="保存"/>
            
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    @endsection
</html>
