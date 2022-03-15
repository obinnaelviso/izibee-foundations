@component('mail::message')

Thank you for contacting {{ config('app.name') }}. We have received your message and we will get back to you shortly!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
