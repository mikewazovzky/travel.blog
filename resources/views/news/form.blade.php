{{ csrf_field() }}

<!-- Article Title input -->
<div class="form-group">
	<label for="title" class="col-sm-1 control-label">Title:</label>
	<div class="col-sm-11">
		<input 
			type="text" 
			class="form-control" 
			id="title" name="title" 
			value="{{ old('title') ?? (isset($article) ? $article->title : '') }}" 
			required
		>
	</div>
</div>

<!-- Article Body Excert input (textarea) -->
<div class="form-group">
	<label for="body" class="col-sm-1 control-label">Body:</label>
	<div class="col-sm-11">	
		<textarea class="form-control" id="body" name="body" rows="4" required>{{ old('body') ?? (isset($article) ? $article->body : '') }}</textarea>
	</div>	
</div>

<!-- form submit button -->
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-3">	
		<button type="submit" class="form-control btn-primary">Publish</button>
	</div>
</div>	