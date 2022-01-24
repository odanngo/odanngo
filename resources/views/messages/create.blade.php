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
        <h1>野球掲示板</h1>
        <p>野球に関することなら何でもOKです！</p>
        <form action="/messages" method="post">
            {{ csrf_field() }}
            <div class="body">
                <h2>本文</h2>
                <textarea name="message[body]" placeholder="こんにちは"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        
        <form class="mb-4" method="POST" action="{{ route('comment.store') }}">
    @csrf
 
    <input
        name="message_id"
        type="hidden"
        value="{{ $message->id }}"
    >
 
    <div class="form-group">
        <label for="subject">
        名前
        </label>
 
 <input
            id="name"
            name="name"
            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
            value="{{ old('name') }}"
            type="text"
        >
        @if ($errors->has('name'))
         <div class="invalid-feedback">
         {{ $errors->first('name') }}
         </div>
        @endif
    </div>
 
    <div class="form-group">
     <label for="body">
     本文
     </label>
 
        <textarea
            id="comment"
            name="comment"
            class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
            rows="4"
        >{{ old('comment') }}</textarea>
        @if ($errors->has('comment'))
         <div class="invalid-feedback">
         {{ $errors->first('comment') }}
         </div>
        @endif
    </div>
 
    <div class="mt-4">
     <button type="submit" class="btn btn-primary">
     コメントする
     </button>
    </div>
</form>
 
@if (session('commentstatus'))
    <div class="alert alert-success mt-4 mb-4">
     {{ session('commentstatus') }}
    </div>
@endif

        
            <div class='back'>[<a href='/'>HOMEへ戻る</a>]</div>
    </body>
    @endsection
</html>
