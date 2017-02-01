<div class="blog-post">
	
	<h3 class="blog-post-title">
	
		<a href="/posts/{{ $post->id}}">
		
			{{ $post->title }}
		
		</a>
	
	</h3>
	
	<p class="blog-post-meta">
		
		Author:
		
		<a href="#">$post->user->name</a>
		
		Created At:
		
		{{ $post->created_at->toFormattedDateString() }} 
		
		Updated At:
		
		{{ $post->updated_at->toFormattedDateString() }} 
		

				
	</p>

	<p>{{ $post->excert }}</p>

</div><!-- /.blog-post -->