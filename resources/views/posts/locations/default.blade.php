@extends('posts.post')

@section('post-content')

<h1>{{ $location->title }}</h1>
<img class="" src="/images/canyon.jpg" style="width: 300px; float:right; margin: 0 10px;">
<div class="">
{!! $contents !!}
</div>
	
@stop