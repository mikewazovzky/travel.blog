<!DOCTYPE html>
<html>    
<head>
    <title></title>
</head>
<body>

    <h1>New Post has been published.</h1>

    <p>By: <strong>{{ $post->user->name }}</strong></p>
    
    <p>Title: <strong>{{ $post->title }}</strong></p>

    <p> {{ $post->excert }} </p>
    
</body>
</html>