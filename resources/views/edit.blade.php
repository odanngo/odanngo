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
       <h1>Blog Name</h1>
           <form action='/posts/{{ $post->id }}' method="POST">
               {{ csrf_field() }}
               @method('PUT')
               <div class="title">
                   <h2>Title</h2>
                   <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                   
               </div>
               <div class="body">
                   <h2>Body</h2>
                   <textarea type="text" name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ $post->body }}</textarea>
               </div>       
                   <input type="submit" value="update"/>
              
               
           </form>
          
           <div class='back'>[<a href='/'>back</a>]</div>
       
    </body>
    @endsection
</html>
