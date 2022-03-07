@component('mail::message')
# Hi {{ explode(' ', $name)[0] }},

Thank you for making a donation of {{ config('app.currency').$amount }} to {{ config('app.name') }}. We really appreciate it.<br>
{{ $message }}<br>

Don't just be a one-time contributer, become a partner with us. You've just joined the movement of making a difference.<br>
Every of your gift matters to us and we don't take your efforts for granted.

Don't hesitate to always contact us through our live chat, or through email at <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a>.<br>
Your can also call us through the following lines:<br>
{{ config('app.phone1') }}<br>
{{ config('app.phone2') }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
