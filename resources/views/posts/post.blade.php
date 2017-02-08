@extends('layouts.blog')

@section('blog-content')	
	
	<h1>{{ $post->title }}</h1>
	
	Country:
	<a href="#">{{ App\Tools\Country::name($post->country) }}</a>
	
	Author: <a href="#">{{ $post->user->name }}</a>
    
	Created At:		
	<strong>{{ $post->created_at->toFormattedDateString() }}</strong>		
	
	Updated At:		
	<strong>{{ $post->updated_at->toFormattedDateString() }}</strong>	
	<br>
    
	@if (Auth::user()->isAdmin())
		Type: &nbsp
		<a href="#">{{ $post->type }}</a>
	@endif
	
    @if(count($post->tags))
		Tags: &nbsp
		@foreach($post->tags as $tag)
			<a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }} </a>
		@endforeach
	@endif
	<br>
	
	
	@if (Auth::user()->isAdmin() or Auth::user()->ownes($post))
	
		{{-- Edit button --}}

		<form method="GET" action="/posts/{{ $post->slug }}/edit" style="display: inline;">
			
			{{ csrf_field() }}
			
			<input type="submit" class="btn btn-primary btn-xs" value="Edit"></input>
			
		</form>	
		
		
		
		{{-- Delete button --}}
		
		<form method="POST" action="/posts/{{ $post->slug }}" style="display: inline;">
			
			{{ method_field('DELETE') }}
			
			{{ csrf_field() }}
			
			<input type="submit" class="btn btn-danger btn-xs" value="Delete"></input>
			
		</form>
	
	@endif
	
    <hr>
	
	<div class="post-content">
		
		@yield('post-content')
	
	</div>
	
	<hr>
	
	<div class="comments">
		<h2>Comments</h2>
		<ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->created_at->diffForHumans() }}</strong>&nbsp
                by [<strong>{{ $comment->user->name}}</strong>]:&nbsp
                {{ $comment->body }}
                
                {{-- Delete Comment button --}}
	
                    <form method="POST" action="/comments/{{ $comment->id }}" style="display: inline;">
                        
                        {{ method_field('DELETE') }}
                        
                        {{ csrf_field() }}
                        
                        <input type="submit" class="btn-link pull-right" value="Delete Comment"></input>
                        
                    </form>
                
                
            </li>
        @endforeach
		</ul>
	</div>
	<br>
	{{-- Add a comment --}}
    
    @if(auth()->check())
        <div class="add-comment" >

                <form method="POST" action="/posts/{{ $post->slug }}/comments">
                
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                </form>
                
                @include('errors.list')
        </div>
    @endif     
	
@endsection