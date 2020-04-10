@component('mail::message')
Dear,{{$receiver_name}}<br>
    {{$message->message_content}}



Best Wishes,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::button', ['url' => ''])
    Click here
@endcomponent
