@extends('layouts.app')

@section('content')	

	<div class="container">
		<h1>Create new user</h1>
		<hr/>
		
		<form method="POST" id="userForm" action="/users" class="form-horizontal" enctype="multipart/form-data">	
			
			@include('users.form', [
				'submitButtonText' => 'Create User', 
				'imageSrc' => 'user.png',
			])
	
		</form>
		
		@include('errors.list')
		
	</div>

@stop