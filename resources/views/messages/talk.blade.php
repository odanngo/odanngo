<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>野球掲示板</h1>
        <p class='board'>[<a href='/messages/board'>board</a>]</p>
        <div class='messages'>
            @foreach ($messages as $message)
            <div class='message'>
                <a href='/messages/{{ $message->id }}'><h2 class='title'>{{ $message->title }}</h2></a>
                <p class='body'>{{ $message->body }}</p>
            </div>
            @endforeach
        </div>

    </body>
</html>
