@extends('layouts.main')
@section('title', 'Register as a Volunteer')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg-volunteer bg-cover d-flex align-items-center">
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

<!-- START INFO SECTION -->
<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-9 m-auto">
                @include('partials.alerts')
                <livewire:volunteer-form />
            </div>
        </div>
    </div>
</section>
@endsection
@push('css')
@livewireStyles
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
@endpush
@push('js')
@livewireScripts
<script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
<script>
const elem = document.querySelector('.datepicker_input')
const datepicker = new Datepicker(elem, {
    'format': 'dd/mm/yyyy', // UK format
});

elem.addEventListener('changeDate', changeDate)

function changeDate() {
    elem.dispatchEvent(new Event('input'))
}
</script>
@endpush
