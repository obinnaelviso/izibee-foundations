@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg-contact bg-cover d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white texted text-center mt-5">
                    <h1 class="display-3 text-white lh-1">@yield('title')</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HALF HEADER SECTION -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-5">
                <h1>Get In Touch With Us</h1>
                <p>We are happy to hear from you</p>
                @include('partials.alerts')
                <livewire:contact-form />
            </div>
            <div class="col-md-5">
                <h3>MAIN OFFICE</h3>
                <p><i class="icofont-location-pin"></i> Plot X53, Close7, Elekahia Housing Estate, Port-Harcourt, Rivers State, Nigeria</p>
                <p><i class="icofont-phone"></i> {{ config('app.phone1').', '.config('app.phone2') }}</p>
                <p><i class="icofont-email"></i> {{ config('mail.from.address') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
@push('css')
@livewireStyles
@endpush
@push('js')
@livewireScripts
@endpush
