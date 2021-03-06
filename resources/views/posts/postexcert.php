<div class="row blog-post">

	<div class="col-sm-4">
		<img class="img-responsive" src="{{ $post->featured ? '/uploads/images/' . $post->featured : ''}}"/>
	</div>
	
	<div class="col-sm-8">
	
		<h3 class="blog-post-title">		
			<a href="/posts/{{ $post->slug}}">			
				{{ $post->title }}			
			</a>		
		</h3>
		
		<p class="blog-post-meta">
			
			Country:
			<a href="#">{{ App\Tools\Country::name($post->country) }}</a>
			
			Author:
			<a href="#">{{ $post->user->name }}</a>
			
			<br>
			Created At:
			<strong>{{ $post->created_at->toFormattedDateString() }}</strong>
			
			Updated At:
			<strong>{{ $post->updated_at->toFormattedDateString() }}</strong>
			<br>
			
			@if(count($post->tags))
				Tags: &nbsp
				@foreach($post->tags as $tag)
					<a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }} </a>
				@endforeach
			@endif
		
		</p>

		<p>{{ $post->excert }}</p>
	
	</div>

</div><!-- /.blog-post -->