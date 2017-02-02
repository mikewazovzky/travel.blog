{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title:</label>
	<input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : '' }}" required>
</div>

<div class="form-group">
	<label for="country">Country:</label>
	<select name="country" id="country" class="form-control">
		@foreach($countries as $country => $code)
			<option value="{{ $code }}" {{ (isset($post) && ($post->country == $code)) ? 'selected' : '' }} >{{ $country }}</option>
		@endforeach
	</select>			
</div>

<div class="form-group">
	<label for="excert">Excert:</label>
	<textarea class="form-control" id="excert" name="excert" rows="7" required>{{ isset($post) ? $post->excert : '' }}</textarea>
</div>

<!-- Tags Form Input -->
<div class="form-group">
	<label for="tags">Tags:</label>
	<select class="form-control" id="tags" name="tags[]" multiple>
        @foreach($tags as $tagId => $tagName)
            <option value="{{ $tagId }}" {{ (isset($post) && $post->tags->contains('id', $tagId))? 'selected' : '' }}>{{ $tagName }}</option>
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
