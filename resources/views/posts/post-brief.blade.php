<div class="block" style="background: {{ $post->color()}};">

	<h2>{{ $post->title}}</h2>

	<img src="/uploads/images/{{ $post->thumbnail }}"/>

	<p>	{{ $post->excert }}</p>

	<a class="button" href="/posts/{{ $post->slug }}">Подробнее</a>

</div>		