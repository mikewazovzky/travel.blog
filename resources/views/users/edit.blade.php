@extends('layouts.app')

@section('content')	

	<div class="container">
		<h1> Update User Data</h1>
		<hr>
		
		<form 
            method="POST" 
            action="{{ action('UsersController@update', ['id' => $user->id]) }}" 
            class="form-horizontal" 
            id="userForm" 
            enctype="multipart/form-data"
        >
		
			{{ method_field('PATCH') }}
		
			@include('users.form', [
				'submitButtonText' => 'Update User', 
				'imageSrc' => ($user->avatar ? : 'user.png'),
				])

		</form>
		
		@include('errors.list')
		
	</div>

@stop

