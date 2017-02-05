@extends('posts.post')

@section('post-content')	
		
		@if($post->type == 'html' && $post->page)
            
            {!! $post->pageContent() !!}            
        
        @else
        
            <img class="img-responsive" src="/uploads/images/{{ $post->featured ?? 'messa.jpg'}}"/>
			
			<p>{{ $post->excert }}</p>
		
		@endif 
	
@endsection
