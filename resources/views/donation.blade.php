@extends('layouts.main')
@section('title', 'Donation')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg bg-cover d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white texted text-center mt-5">
                    <h1 class="display-3 text-white lh-1">Be a part of the movement</h1>
                    <h3 class="text-white lh-1">Your good support could make a difference in the life of these children.</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HALF HEADER SECTION -->

<!-- START INFO SECTION -->
<section class="info mt-5 mb-5">
    <div class="container">
        @include('partials.alerts')
        <livewire:donation-form />
    </div>
</section>
<!-- END INFO SECTION -->
@endsection

@push('css')
@livewireStyles
@endpush

@push('js')
@livewireScripts

<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    Livewire.on('pay-paystack', paymentDetails => {
        payWithPaystack(paymentDetails.amount, paymentDetails.email)
    })
    Livewire.on('pay-bank-transfer', paymentDetails => {
        $('#amount').html(paymentDetails.amount)
        var myModal = new bootstrap.Modal(document.getElementById('bankTransferModal'))
        myModal.show()
    })

    function payWithPaystack(amount, email) {
        let handler = PaystackPop.setup({

            key: '{{ config('paystack.public_key') }}',

            email,

            amount: amount * 100,

            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

            // label: "Optional string that replaces customer email"

            onClose: function(){},

            callback: function(response){

                // emit event for user reference and trigger email.

                // let message = 'Payment complete! Reference: ' + response.reference;
                Livewire.emit('paystackSummary', response.reference)
            }

        });

        handler.openIframe();
    }

    function payWithBankTransfer() {
        console.log('something here')
        Livewire.emit('bankTransferSummary')
    }
</script>
<div class="modal fade" id="bankTransferModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Payment With Bank Transfer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <h6 class="col-md-12">
                    Pay <b>{{ config('app.currency') }}<span id="amount"></span></b> to one of the following bank details below:
                </h6>
            </div>
          <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>Bank Name: <b>GT BANK</b></li>
                    <li>Account Number: <b>0655350395</b></li>
                    <li>Account Name: <b>IZIBEE HALLMARK FOUNDATION</b></li>
                </ul>

                <p>Click the button below once you have made the payment so that we can confirm your transaction.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="payWithBankTransfer()">Finish</button>
        </div>
      </div>
    </div>
  </div>
@endpush
