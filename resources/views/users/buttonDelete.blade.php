<form method="POST" action="{{ route('users.destroy', [$user->id]) }}">

	{{ method_field('DELETE') }}
		
	{{ csrf_field() }}
	
	<input type="submit" class="btn btn-danger btn-xs btn-custom" value="Delete"/>

</form>