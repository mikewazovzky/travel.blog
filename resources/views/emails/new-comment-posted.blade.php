@component('mail::message')
# New comment has been posted to your Post.
by {{ $comment->user->name }}

@component('mail::button', ['url' => 'http://travelblog/posts/' . $comment->post->slug ])
Review The Post
@endcomponent

@component('mail::panel')
# Comment:
{{ $comment->body }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
