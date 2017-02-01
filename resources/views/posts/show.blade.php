@extends('layouts.blog')

@section('blog-content')	
	
	<h1>{{ $post->title }}</h1>
	By user <strong> $post->user->name </strong>
	Created At:
		
	{{ $post->created_at->toFormattedDateString() }} 
		
	Updated At:
		
	{{ $post->updated_at->toFormattedDateString() }} 
	
	<br>
	
	{{-- Edit button --}}

	<form method="GET" action="/posts/{{ $post->id }}/edit" style="display: inline;">
		
		{{ csrf_field() }}
		
		<input type="submit" class="btn btn-primary btn-xs" value="Edit"></input>
		
	</form>	
	
	
	
	{{-- Delete button --}}
	<form method="POST" action="/posts/{{ $post->id }}" style="display: inline;">
        
		{{ method_field('DELETE') }}
		
		{{ csrf_field() }}
		
		<input type="submit" class="btn btn-danger btn-xs" value="Delete"></input>
		
	</form>
	
    <hr>
	<p>{{ $post->excert}} </p>	
	<hr>
	
	<div class="comments">
		<h2>Comments</h2>
		<ul class="list-group">

		</ul>
	</div>
	<br>
	{{-- Add a comment --}}
    
    @if(auth()->check())
        <div class="add-comment" >

                <form method="POST" action="/posts/{{ $post->id }}/comments">
                
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
