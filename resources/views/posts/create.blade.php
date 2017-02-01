@extends('layouts.app')

@section('content')	
	
	<h1>Publish a Post</h1>
    <hr>

    <form method="POST" action="/posts">
        
		@include('posts.form')
		
    </form>	  
	  
	@include('errors.list')
	
@endsection
