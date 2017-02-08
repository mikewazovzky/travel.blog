<div class="block" style="background: {{ $post->color()}};">

	<h2>{{ $post->title}}</h2>
	
	<a href="/uploads/images/{{ $post->featured ?? 'default.jpg' }}" data-lity>
	
		<div class="img">
			<img src="/uploads/images/{{ $post->thumbnail  ?? 'default.jpg' }}"/>
		</div>

	</a>
	
	<p>	{{ $post->excert }}</p>

	<a class="button" href="/posts/{{ $post->slug }}">Подробнее</a>

</div>		