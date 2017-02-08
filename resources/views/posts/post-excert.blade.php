<div class="row blog-post">

	<div class="col-sm-5 col-md-4">
	
		<a href="/uploads/images/{{ $post->featured ?? 'default.jpg' }}" data-lity>
	
			<img class="img-responsive" src="/uploads/images/{{ $post->featured ?? 'default.jpg'}}"/>
		
		</a>
		
	</div>
	
	<div class="col-sm-7 col-md-8">
	
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
			
			Published:
			<strong>{{ $post->created_at->toFormattedDateString() }}</strong>
			
			@if(count($post->tags))
				<br>Tags: &nbsp
				@foreach($post->tags as $tag)
					<a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }} </a>
				@endforeach
			@endif
		
		</p>

		<p>{{ mb_substr($post->excert, 0, 175) . ' [...]' }}</p>
		
	</div>

</div><!-- /.blog-post -->