{{ csrf_field() }}

<div class="form-group">
	<label for="title" class="col-sm-1 control-label">Title:</label>
	<div class="col-sm-11">
		<input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : '' }}" required>
	</div>
</div>


<div class="row">
<div class="col-sm-6">
<div class="form-group">
	<label for="country" class="col-sm-2 control-label">Country:</label>
	<div class="col-sm-10">
		<select name="country" id="country" class="form-control">
			@foreach($countries as $country => $code)
				<option value="{{ $code }}" {{ (isset($post) && ($post->country == $code)) ? 'selected' : '' }} >{{ $country }}</option>
			@endforeach
		</select>	
	</div>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
	<label for="type" class="col-sm-2 control-label">Type:</label>
	<div class="col-sm-10">	
		<select name="type" id="type" class="form-control">
			@foreach(['blade', 'html'] as $type)
				<option value="{{ $type }}" {{ (isset($post) && ($post->type == $type)) ? 'selected' : '' }} >{{ $type }}</option>
			@endforeach
		</select>		
	</div>
</div>	
</div>
</div>

<!-- Tags Form Input -->
<div class="form-group">
	<label for="tags" class="col-sm-1 control-label">Tags:</label>
	<div class="col-sm-11">
		<select class="form-control" id="tags" name="tags[]" multiple>
			@foreach($tags as $tagId => $tagName)
				<option value="{{ $tagId }}" {{ (isset($post) && $post->tags->contains('id', $tagId))? 'selected' : '' }}>{{ $tagName }}</option>
			@endforeach
		</select>
	</div>
</div>	


<div class="form-group">
	<label for="excert" class="col-sm-1 control-label">Excert:</label>
	<div class="col-sm-11">	
		<textarea class="form-control" id="excert" name="excert" rows="4" required>{{ isset($post) ? $post->excert : '' }}</textarea>
	</div>	
</div>

<div class="form-group">
	<label for="featured" class="col-sm-1 control-label">Featured Image:</label>
	<div class="col-sm-5">	
		<img id="featuredImage" class="img-responsive" src="/uploads/images/{{ isset($post) && $post->featured ? $post->featured : 'messa.jpg'}}"/>
	</div>
	<div class="col-sm-6">	
		<p>Selected Image: <strong><span>{{ isset($post) && $post->featured ? $post->featured : 'None'}}</span></strong></p>
	</div>		
</div>

<div class="form-group">
	<label for="featured" class="col-sm-1 control-label">Page:</label>
	<div class="col-sm-5">	
		<button type="button" class="form-control">Select Page</button>
	</div>
	<div class="col-sm-6">	
		<p>Selected Page: <strong><span>{{ isset($post) && $post->page ? $post->page : 'None'}}</span></strong></p>
	</div>		
</div>

<div class="form-group">
	<input type="file" name="featured" class="form-control" id="featuredFile">
</div>	

<div class="form-group">
	<input type="file" name="page" class="form-control" id="pageFile">
</div>

<div class="form-group">
	<button type="submit" class="form-control btn-primary">Publish</button>
</div>	

@section('footer.scripts')
    	
    <script type="text/javascript">
		$('#tags').select2({
			placeholder: "Choose a tag"			
		});
	</script>

@stop
