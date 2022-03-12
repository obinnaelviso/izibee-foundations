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
            <td>Date of Birth</td>
            <td><strong>{{ $volunteerDetails['dob'] }}</strong></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td><strong>{{ $volunteerDetails['gender'] }}</strong></td>
        </tr>
        <tr>
            <td>Nationality </td>
            <td><strong>{{ $volunteerDetails['nationality'] }}</strong></td>
        </tr>
        <tr>
            <td>State of Origin </td>
            <td><strong>{{ $volunteerDetails['state'] }}</strong></td>
        </tr>
        <tr>
            <td>L.G.A of Origin </td>
            <td><strong>{{ $volunteerDetails['lga'] }}</strong></td>
        </tr>
        <tr>
            <td>Marital Status </td>
            <td><strong>{{ $volunteerDetails['marital_status'] }}</strong></td>
        </tr>
        <tr>
            <td>Occupation </td>
            <td><strong>{{ $volunteerDetails['occupation'] }}</strong></td>
        </tr>
        <tr>
            <td>House Address </td>
            <td><strong>{{ $volunteerDetails['address'] }}</strong></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><strong>{{ $volunteerDetails['occupation'] }}</strong></td>
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
            <td>Educational Qualification, and Other Professional Attainment</td>
            <td><strong>{{ $volunteerDetails['qualification'] }}</strong></td>
        </tr>
    </tbody>
</table>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
