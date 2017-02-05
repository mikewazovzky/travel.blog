@extends('layouts.blog')

@section('blog-header')	

	@include('layouts.blog.header')
	
@stop

@section('blog-content')	
	
	@foreach($posts as $post)
		
		@include('posts.post-excert')
		
		<hr>

	@endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

@endsection
