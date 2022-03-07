@component('mail::message')
# New Donation Made Through {{ ucfirst(str_replace('-', ' ', $donationDetails['payment_method'])) }}
# Below is the details:
------------------------------------------------------
<table>
    <tbody>
        <tr>
            <td width="250px">Full Name</td>
            <td><strong>{{ $donationDetails['name'] }}</strong></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><strong>{{ $donationDetails['email'] }}</strong></td>
        </tr>
        <tr>
            <td>Campaign</td>
            <td><strong>{{ $donationDetails['campaign'] }}</strong></td>
        </tr>
        <tr>
            <td>How did you hear about this campaign? </td>
            <td><strong>{{ $donationDetails['campaign_news'] }}</strong></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><strong>{{ config('app.currency').$donationDetails['amount'] }}</strong></td>
        </tr>
        <tr>
            <td>Recurring Payment</td>
            <td><strong>{{ $donationDetails['recurring_payment'] }}</strong></td>
        </tr>
        <tr>
            <td>Payment Method</td>
            <td><strong>{{ ucfirst(str_replace('-', ' ', $donationDetails['payment_method'])) }}</strong></td>
        </tr>
        @if($donationDetails['reference'])
        <tr>
            <td>Payment Reference</td>
            <td><strong>{{ $donationDetails['reference'] }}</strong></td>
        </tr>
        @endif
    </tbody>
</table>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
