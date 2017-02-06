@extends('layouts.app')

@section('content')

	@yield('blog-header')

    <div class="container">	
	
		<div class="col-lg-9 blog-main">

			@yield('blog-content')
		
		</div>
		
		<div class="col-lg-3 blog-sidebar hidden-xs hidden-sm hidden-md">

			@include('layouts.blog.sidebar')
		
		</div> 

	</div>
    
@stop