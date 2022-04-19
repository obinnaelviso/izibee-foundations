@component('mail::message')
# New Volunteer Request
# Below is the details:
------------------------------------------------------
<table>
    <tbody>
        <tr>
            <td colspan="2"><strong>PERSONAL DATA</strong></td>
        </tr>
        <tr>
            <td width="250px">Have you read the Community Service Pledge? <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ ucfirst($volunteerDetails['read_community_service_pledge']) }}</strong></td>
        </tr>
        <tr>
            <td width="250px">Full Name <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['name'] }}</strong></td>
        </tr>
        <tr>
            <td>Date of Birth <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['dob'] }}</strong></td>
        </tr>
        <tr>
            <td>Sex <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['gender'] }}</strong></td>
        </tr>
        <tr>
            <td>Nationality <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['nationality'] }}</strong></td>
        </tr>
        <tr>
            <td>State of Origin <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['state'] }}</strong></td>
        </tr>
        <tr>
            <td>L.G.A of Origin <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['lga'] }}</strong></td>
        </tr>
        <tr>
            <td>Marital Status <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['marital_status'] }}</strong></td>
        </tr>
        <tr>
            <td>Occupation <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['occupation'] }}</strong></td>
        </tr>
        <tr>
            <td>House Address <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['address'] }}</strong></td>
        </tr>
        <tr>
            <td>Email Address <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['occupation'] }}</strong></td>
        </tr>
        <tr>
            <td>Phone Number <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['phone'] }}</strong></td>
        </tr>
        <tr>
            <td>Alternate Phone Number</td>
            <td><strong>{{ $volunteerDetails['phone_2'] }}</strong></td>
        </tr>
        <tr>
            <td>Educational Qualification <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['qualification'] }}</strong></td>
        </tr>
        <tr>
            <td>Facebook Handle</td>
            <td><strong>{{ $volunteerDetails['facebook'] }}</strong></td>
        </tr>
        <tr>
            <td>Twitter Handle</td>
            <td><strong>{{ $volunteerDetails['twitter'] }}</strong></td>
        </tr>
        <tr>
            <td>Instagram Handle</td>
            <td><strong>{{ $volunteerDetails['instagram'] }}</strong></td>
        </tr>
        <tr>
            <td>Have you worked with an NGO? <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ ucfirst($volunteerDetails['worked_with_ngo']) }}</strong></td>
        </tr>
        <tr>
            <td>If yes, what is the name of the NGO?</td>
            <td><strong>{{ ucfirst($volunteerDetails['ngo_name']) }}</strong></td>
        </tr>
        <tr>
            <td>Why do you want to work as a Volunteer in IHF? <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ ucfirst($volunteerDetails['volunteer_reason']) }}</strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>NEXT OF KIN</strong></td>
        </tr>
        <tr>
            <td>Full Name <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_name'] }}</strong></td>
        </tr>
        <tr>
            <td>Sex <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_gender'] }}</strong></td>
        </tr>
        <tr>
            <td>Marital Status <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_marital_status'] }}</strong></td>
        </tr>
        <tr>
            <td>Nationality <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_nationality'] }}</strong></td>
        </tr>
        <tr>
            <td>State of Origin <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_state'] }}</strong></td>
        </tr>
        <tr>
            <td>L.G.A of Origin <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_lga'] }}</strong></td>
        </tr>
        <tr>
            <td>Next of Kin Relationship <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_relationship'] }}</strong></td>
        </tr>
        <tr>
            <td>Address <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_address'] }}</strong></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><strong>{{ $volunteerDetails['kin_email'] }}</strong></td>
        </tr>
        <tr>
            <td>Phone Number <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ $volunteerDetails['kin_phone'] }}</strong></td>
        </tr>
        <tr>
            <td>Have you ever been convicted of any crime before? <span style="color: red; font-weight: 600">*</span></td>
            <td><strong>{{ ucfirst($volunteerDetails['convicted']) }}</strong></td>
        </tr>
    </tbody>
</table>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
