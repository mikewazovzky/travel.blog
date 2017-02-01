{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title:</label>
	<input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : '' }}" required>
</div>

<div class="form-group">
	<label for="excert">Excert:</label>
	<textarea class="form-control" id="excert" name="excert" rows="7" required>{{ isset($post) ? $post->excert : '' }}</textarea>
</div>

<!-- Tags Form Input -->
<div class="form-group">
	<label for="tags">Tags:</label>
	<select class="form-control" id="tags" name="tags[]" value="2" multiple>

	</select>
</div>	

<div class="form-group">
	<button type="submit" class="btn btn-primary">Publish</button>
</div>	
