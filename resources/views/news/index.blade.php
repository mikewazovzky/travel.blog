@extends('layouts.news')

@section('news-content')	

<h3>Publish new Aricle</h3>	
<form method="POST" action="/articles" class="form-horizontal">
	@include('news.form')	
</form>	


<hr>
@foreach($articles as $article)		
	<div class="article">
		<div class="panel panel-primary">
		
			<div class="panel-heading">
				<h3 class="panel-title"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
			</div>
			
			<div class="panel-body">
				<p class="now">published at {{ $article->created_at}} by {{ $article->user->name }}</p>
				<p>{{ mb_substr($article->body, 0 , 250) . ' [...]' }}</p>
			</div><!-- panel-body -->	
			
		</div>
	</div>
@endforeach

@endsection