{{ csrf_field() }}

<!-- Post Title input -->
<div class="form-group">
	<label for="title" class="col-sm-1 control-label">Title:</label>
	<div class="col-sm-11">
		<input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : '' }}" required>
	</div>
</div>

<!-- Post Country input (select) -->
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

<!-- Post Type input (select) -->
<div class="col-sm-6">
<div class="form-group">
	<label for="type" class="col-sm-2 control-label">Type:</label>
	<div class="col-sm-10">	
		<select name="type" id="type" class="form-control">
			@foreach(['html', 'blade'] as $type)
				<option value="{{ $type }}" {{ (isset($post) && ($post->type == $type)) ? 'selected' : '' }} >{{ $type }}</option>
			@endforeach
		</select>		
	</div>
</div>	
</div>
</div>

<!-- Post Tags input (select)-->
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

<!-- Post Excert input (textarea) Post Excert -->
<div class="form-group">
	<label for="excert" class="col-sm-1 control-label">Excert:</label>
	<div class="col-sm-11">	
		<textarea class="form-control" id="excert" name="excert" rows="4" required>{{ isset($post) ? $post->excert : '' }}</textarea>
	</div>	
</div>

<!-- Post Featured Image -->
<!-- Post Featured Image display image (default image if none) ) -->
<div class="form-group">
	<label for="featured" class="col-sm-1 control-label">Featured Image:</label>
	<div class="col-sm-5">	
		<img id="featuredImage" class="img-responsive" src="/uploads/images/{{ isset($post) && $post->featured ? $post->featured : 'default.jpg'}}"/>
	</div>
	<div class="col-sm-6">	
		<p>Selected Image: <strong><span id="featuredInfo">{{ isset($post) && $post->featured ? $post->featured : 'None'}}</span></strong></p>
	</div>		
</div>

<!-- Post Featured Image input (select file) -->
<div class="form-group">
	<input type="file" name="featured" class="form-control" id="featuredFile">
</div>	

<!-- Post User Page -->
<!-- Post User Page button -->
<div class="form-group">
	<label for="featured" class="col-sm-1 control-label">Page:</label>
	<div class="col-sm-5">	
		<button id="pageButton" type="button" class="form-control">Select Page</button>
	</div>
	<div class="col-sm-6">	
		<p>Selected Page: <strong><span id="pageInfo">{{ isset($post) && $post->page ? $post->page : 'None'}}</span></strong></p>
	</div>		
</div>

<!-- Post User Page input (select file) -->
<div class="form-group">
	<input type="file" name="page" class="form-control" id="pageFile">
</div>

<!-- form submit button -->
<div class="form-group">
	<div class="col-sm-offset-1">	
		<button type="submit" class="form-control btn-primary">Publish</button>
	</div>
</div>	

@section('footer.scripts')
    <!-- Post Tags Select2 Multiselection input -->	
    <script type="text/javascript">
		$('#tags').select2({
			placeholder: "Choose a tag"			
		});		
	</script>
@stop


