@component('mail::message')
# New Volunteer Request
# Below is the details:
------------------------------------------------------
<table>
    <tbody>
        <tr>
            <td width="250px">Full Name</td>
            <td><strong>{{ $volunteerDetails['name'] }}</strong></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><strong>{{ $volunteerDetails['email'] }}</strong></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><strong>{{ $volunteerDetails['address'] }}</strong></td>
        </tr>
        <tr>
            <td>City </td>
            <td><strong>{{ $volunteerDetails['city'] }}</strong></td>
        </tr>
        <tr>
            <td>State </td>
            <td><strong>{{ $volunteerDetails['state'] }}</strong></td>
        </tr>
        <tr>
            <td>Country </td>
            <td><strong>{{ $volunteerDetails['country'] }}</strong></td>
        </tr>
        <tr>
            <td>Phone Number </td>
            <td><strong>{{ $volunteerDetails['phone'] }}</strong></td>
        </tr>
        <tr>
            <td>Alternate Phone Number </td>
            <td><strong>{{ $volunteerDetails['phone_2'] }}</strong></td>
        </tr>
        <tr>
            <td>Facebook Handle </td>
            <td><strong>{{ $volunteerDetails['facebook'] ?? 'N/A' }}</strong></td>
        </tr>
        <tr>
            <td>Instagram Handle</td>
            <td><strong>{{ $volunteerDetails['instagram'] ?? 'N/A' }}</strong></td>
        </tr>
        <tr>
            <td>Shirt Size </td>
            <td><strong>{{ $volunteerDetails['shirt_size'] }}</strong></td>
        </tr>
        <tr>
            <td>Are you available for impromptu mini outreach</td>
            <td><strong>{{ ucfirst($volunteerDetails['impromptu']) }}</strong></td>
        </tr>
        <tr>
            <td>Occupation</td>
            <td><strong>{{ $volunteerDetails['occupation'] }}</strong></td>
        </tr>
        <tr>
            <td>Organization/Place of Work</td>
            <td><strong>{{ $volunteerDetails['workplace'] }}</strong></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><strong>{{ $volunteerDetails['dob'] }}</strong></td>
        </tr>
        <tr>
            <td>Why do you want to volunteer with {{ config('app.name') }}</td>
            <td><strong>{{ $volunteerDetails['reason'] }}</strong></td>
        </tr>
    </tbody>
</table>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
