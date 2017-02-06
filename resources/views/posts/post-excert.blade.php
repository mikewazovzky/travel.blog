<div class="row blog-post">

	<div class="col-sm-4 col-md-5">
		<img class="img-responsive" src="{{ $post->thumbnail ? '/uploads/images/' . $post->thumbnail : ''}}"/>
	</div>
	
	<div class="col-sm-8 col-md-7">
	
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

		<p>{{ mb_substr($post->excert, 0, 300) . ' [...]' }}</p>
		
	</div>

</div><!-- /.blog-post -->