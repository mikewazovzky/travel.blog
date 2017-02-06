@component('mail::message')
# New user has been registered.

UserName {{ $user->name }} 

@component('mail::button', ['url' => 'http://travelblog/users/'])
Users Admin Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent