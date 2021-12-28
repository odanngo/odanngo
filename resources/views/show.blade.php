<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　

    @section('content')
    <body>
        {{Auth::user()->name}}
       <h1>Blog Name</h1>
       <p class='edit'>[<a href="/post/{{ $post->id }}/edit">edit</a>]</p>
       <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
      
           <div class='post'>
               <h2 class='title'>{{ $post->title }}</h2>
               <p class='body'>{{ $post->body }}</p>
               <p class='updated_at'>{{ $post->updated_at }}</p>
               <a href="">{{ $post->category->name }}</a>
           <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
           </div>
           <div class='back'>[<a href='/'>back</a>]</div>
           <script>
               function deletePost(e) {
                   'use strict';
                   if (confirm('削除すると復元できません。\本当に削除しますか？')) {
                       document.getElementById('form_delete').submit();
                   }
               }
           </script>
           
       
    </body>
    @endsection
</html>
