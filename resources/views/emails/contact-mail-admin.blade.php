@component('mail::message')
# New Contact Form
# Below is the details:
------------------------------------------------------
<table>
    <tbody>
        <tr>
            <td width="250px">Name</td>
            <td><strong>{{ $contact['name'] }}</strong></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><strong>{{ $contact['email'] }}</strong></td>
        </tr>
        <tr>
            <td>Subject</td>
            <td><strong>{{ $contact['subject'] }}</strong></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><strong>{{ $contact['message'] }}</strong></td>
        </tr>
    </tbody>
</table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
