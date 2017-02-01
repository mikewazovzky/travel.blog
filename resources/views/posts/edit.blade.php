@extends('layouts.blog')

@section('blog-content')	
	
	<h1>Edit Post</h1>
    <hr>

    <form method="POST" action="/posts/{{ $post->id }}">
        
		{{ method_field('PATCH') }}
		
		@include('posts.form')
		
    </form>	  
	  
	@include('errors.list')
	
@endsection
