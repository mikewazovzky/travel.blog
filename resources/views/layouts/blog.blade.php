@extends('layouts.app')

@section('content')

	@include('layouts.blog.header')

    <div class="container">	
	
		<div class="col-sm-9 blog-main">

			@yield('blog-content')
		
		</div>
		
		<div class="col-sm-3 blog-sidebar">

			@include('layouts.blog.sidebar')
		
		</div> 

	</div>
    
@stop