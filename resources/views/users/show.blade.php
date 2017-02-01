@extends('layouts.app')

@section('content')

	<div class="container users">
		<div class="panel panel-primary" style="width: 250px; text-align: center;">
			<div class="panel-heading">
				<h1>User Card</h1>
			</div>
			
			<div class="panel-body">
				@if($user->avatar)
					<img class="img-thumbnail" style="width: 200px;" src="/images/avatars/{{ $user->avatar}}">
				@else
					<img class="img-thumbnail" style="width: 200px;" src="/images/avatars/user.png">
				@endif
				
				<h1> {{ $user->name }}</h1>
				
				<p>  {{ $user->email }} </p>
		
			</div>
		</div>
	</div>

@stop