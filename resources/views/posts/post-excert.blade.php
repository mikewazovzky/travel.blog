<div class="row blog-post">

	<div class="col-sm-5">
	
		<a href="/uploads/images/{{ $post->featured ?? 'default.jpg' }}" data-lity>
	
			<img class="img-responsive" src="/uploads/images/{{ $post->thumbnail ?? 'default.jpg'}}"/>
		
		</a>
		
	</div>
	
	<div class="col-sm-7">
	
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

		<p>{{ mb_substr($post->excert, 0, 175) . ' [...]' }}</p>
		
	</div>

</div><!-- /.blog-post -->