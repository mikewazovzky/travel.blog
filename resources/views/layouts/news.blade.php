@extends('layouts.app')

@section('content')

    <div class="container">	
	
		@include('layouts.news.header')
		
		<div class="col-sm-8 col-md-9 news-main">

			@yield('news-content')
		
		</div>
		
		<div class="col-sm-4 col-md-3 news-sidebar hidden-xs">

			@include('layouts.news.sidebar')
		
		</div> 

	</div>
    
@stop