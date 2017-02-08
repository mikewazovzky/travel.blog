@extends('layouts.news')

@section('news-content')	
	
<h1>{{ $article->title }}</h1>
<p class="now">Published at {{ $article->created_at}} by {{ $article->user->name }}</p>

{{-- Edit button --}}

<form method="GET" action="/articles/{{ $article->id }}/edit" style="display: inline;">
	
	{{ csrf_field() }}
	
	<input type="submit" class="btn btn-primary btn-xs" value="Edit"></input>
	
</form>	



{{-- Delete button --}}

<form method="POST" action="/articles/{{ $article->id }}" style="display: inline;">
	
	{{ method_field('DELETE') }}
	
	{{ csrf_field() }}
	
	<input type="submit" class="btn btn-danger btn-xs" value="Delete"></input>
	
</form>


<hr>	
		
<p>{{ $article->body }}</p>

@endsection