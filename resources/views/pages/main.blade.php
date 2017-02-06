@extends('layouts.app')

@section('header.styles')	 
	<link rel="stylesheet" type="text/css" href="/css/main.css">
@stop

@section('content')

<div class="container main">	
	<h1 id="title">Путешествие<br>по юго-западу США</h1>
	<h2 id="subtitle">Калифорния. Невада. Аризона. Юта.<br>Национальные парки.</h2>
	
	<div class="row">
		@foreach($posts as $post)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				@include('posts.post-brief')
			</div>
		@endforeach	
	</div>
</div>
@stop


