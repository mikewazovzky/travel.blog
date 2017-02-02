<div class="blog-post">
	
	<h3 class="blog-post-title">
	
		<a href="/posts/{{ $post->id}}">
		
			{{ $post->title }}
		
		</a>
	
	</h3>
	
	<p class="blog-post-meta">
		
		Country:
		<a href="#">{{ App\Tools\Country::name($post->country) }}</a>
		
		Author:
		<a href="#">{{ $post->user->name }}</a>
		
		Created At:
		{{ $post->created_at->toFormattedDateString() }} 
		
		Updated At:
		{{ $post->updated_at->toFormattedDateString() }} 
		<br>
        
        @if(count($post->tags))
            Tags: &nbsp
            @foreach($post->tags as $tag)
                <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }} </a>
            @endforeach
        @endif
	
	</p>

	<p>{{ $post->excert }}</p>

</div><!-- /.blog-post -->