@extends('layouts.main')
@section('title', 'Causes')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg-causes bg-cover d-flex align-items-center">
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
            <div class="col-md-12 mb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus dicta distinctio sed repellat, quaerat sunt a, aut accusamus officia reiciendis iure dolore adipisci facere ad quod molestiae ipsam dolor suscipit repellendus dignissimos nesciunt. Dolore asperiores, exercitationem aut sequi voluptas quo aliquam cum! Quo mollitia dolore accusantium repudiandae excepturi magnam?</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/izi-88.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">Sensitization Campaign</h5>
                        <div class="col-lg-12">
                            <div class="section-divider"></div>
                        </div>
                        <p class="card-text p-2">
                            Help cater for less privilege via
                            health care facility, education,
                            and scholarships.
                        </p>
                        <a href="{{ route('causes.sensitization-campaign') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
