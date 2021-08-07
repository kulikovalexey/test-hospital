@component('mail::message')

#Email verification

You were registrated on site {{ config('app.name') }}

{{ $user->vrify_token }}

Please click on link:
{{--@component('mail::button', ['url' => route('register.verify', ['token' => $user->vrify_token])])--}}
{{--Verify Email--}}
{{--@endcomponent--}}

{{--@endcomponent--}}
