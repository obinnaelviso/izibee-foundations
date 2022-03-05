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
    function payWithPaystack(int amount, int email) {
        let handler = PaystackPop.setup({

        key: {{ config('paystack.public_key') }},

        email,

        amount: amount * 100,

        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

        // label: "Optional string that replaces customer email"

        onClose: function(){

            alert('Window closed.');

        },

        callback: function(response){

            let message = 'Payment complete! Reference: ' + response.reference;

            alert(message);

        }

        });

        handler.openIframe();

    }
</script>
@endpush
