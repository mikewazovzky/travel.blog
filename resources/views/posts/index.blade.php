@extends('layouts.blog')

@section('blog-content')	
	
	@foreach($posts as $post)

		<hr>
		
		@include('posts.post')

	@endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

@endsection
