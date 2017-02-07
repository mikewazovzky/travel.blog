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
			{{ $posts->links() }}
        </nav>

@endsection
