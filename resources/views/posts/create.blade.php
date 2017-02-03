@extends('layouts.blog')

@section('blog-content')	
	
	<h1>Publish a Post</h1>
    <hr>

    <form method="POST" action="/posts" enctype="multipart/form-data" class="form-horizontal">
        
		@include('posts.form')
		
    </form>	  
	  
	@include('errors.list')
	
@endsection
