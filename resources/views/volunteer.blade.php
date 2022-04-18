@extends('layouts.main')
@section('title', 'Become a Volunteer')
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
            <div class="col-md-9">
                <img src="{{ asset('img/2.jpg') }}" class="img-fluid mb-3" alt="official">

                <a href="{{ route('volunteer-register') }}" class="btn btn-mega mb-3">
                    Register as a Volunteer
                    <i class="bi bi-arrow-right"></i>
                </a>

                <p>We encourage people to volunteer and get involved inhelping improve the lives and families of less privileged persons in our rural communities, so we hope you find a support organisation in your environment and contact them.</p>

                <p>
                    If you are passionate about helping others, you can make a lot of difference by sharing what drives your passion with others. You can be inspiration to others who would love to help others but don’t know how to go about it. There are several ways to start volunteering, but everything starts with your commitment.
                    <a href="{{ route('volunteer-register') }}" class="btn-link">Click to register</a>
                </p>
                <br>
                <h5 class="fw-bolder text-uppercase">About Volunteering</h5>

                <p>Volunteering is generally considered as a selfless activity where an individual or group provides services for no financial gain. Volunteering is also popular with skills development and is often intended to promote kindness or to improve the standard of living. Volunteering may have positive benefits for the volunteer as well as for the person or community served.</p>

                <p>Volunteering has the ability to improve the quality of life and health of those who donate their time; and research has found that older adults will benefit the most from volunteering. </p>
                <br>
                <p>Volunteering improves not only the communities in which one serves, but also the life of the individual who is providing help to the community.</p>
                <a href="{{ route('volunteer-register') }}" class="btn btn-mega mb-3">
                    Register as a Volunteer
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
