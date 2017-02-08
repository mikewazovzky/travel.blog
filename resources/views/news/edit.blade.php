@extends('layouts.news')

@section('news-content')	
	
<h1>Upadate the Article</h1>
<hr>	

<form method="POST" action="/articles/{{ $article->id }}" class="form-horizontal">

	{{ method_field('PATCH') }}
	
	@include('news.form')
	
</form>

@include('errors.list')
		
@endsection