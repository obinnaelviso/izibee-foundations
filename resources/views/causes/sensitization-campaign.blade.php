@extends('layouts.main')
@section('title', 'Sensitization Campaign')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg-causes bg-cover d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white texted text-center mt-5">
                    <h1 class="display-3 text-white lh-1">
                        <a class="btn-link" href="{{ route('causes') }}">Causes</a> > @yield('title')
                    </h1>
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
            <div class="col-md-9">
                <img src="{{ asset('img/izi-88.jpg') }}" alt="sensitization-campaign" class="img-fluid mb-3">
                <p>
                    Help cater for less privilege via
                    health care facility, education,
                    and scholarships.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
