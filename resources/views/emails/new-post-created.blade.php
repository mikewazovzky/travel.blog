@component('mail::message')
# New post has been published.

post by {{ $post->user->name }} published at [{{ $post->created_at }}]

@component('mail::button', ['url' => 'http://travelblog/posts/' . $post->slug ])
Review The Post
@endcomponent

@component('mail::panel')
# {{$post->title }}
{{ $post->excert}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
