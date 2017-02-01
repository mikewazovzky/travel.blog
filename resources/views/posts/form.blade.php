{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title:</label>
	<input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : '' }}" required>
</div>

<div class="form-group">
	<label for="body">Body:</label>
	<textarea class="form-control" id="body" name="body" rows="7" required>{{ isset($post) ? $post->body : '' }}</textarea>
</div>

<!-- Tags Form Input -->
<div class="form-group">
	<label for="tags">Tags:</label>
	<select class="form-control" id="tags" name="tags[]" value="2" multiple>
		@foreach($tags as $tagId => $tagName)
			<option value="{{ $tagId }}" {{(isset($post) && ($post->tags->contains('id', $tagId)))? 'selected' : ''}}>{{ $tagName }}</option>
		@endforeach
	</select>
</div>	

<div class="form-group">
	<button type="submit" class="btn btn-primary">Publish</button>
</div>	

@section('footer.scripts')

	<script type="text/javascript">
		$('#tags').select2({
			placeholder: "Choose a tag"			
		});
	</script>

@stop
