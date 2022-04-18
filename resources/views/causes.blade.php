@extends('layouts.main')
@section('title', 'Our Programs')
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
                <p>{{ config('app.name') }} seeks to ameliorate the suffering of those living in our rural communities. We are focused on Development of women, Children, Youths deprived of education, Street children, persons with disabilities. Discrimination and exploitation of vulnerable groups and the homeless, Child rights, Education, Urban poverty, HIV/AIDS, Emergencies, Globalization, Human Rights, Social Research, etc. As an NGO we are volunteer-driven and we work with ready volunteers who are willing to make a change and have passion to help the most vulnerable in society. We engage communities through dialogues and understand the best sustainable solution to provide them with their basic needs. These include Education, Healthcare, Skills Development, and Infrastructure. We do through our programs and partnership with the government, private sector, NGOs, donations to improve the living standards in these communities.</p>
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
                            The team of Izibee Hallmark Foundation Officials visited Igili Secondary School, Umutu which over 50 students and several teachers attended.  We sensitized the students on peer influence and peer pressure in our learning environment.
                        </p>
                        <a href="{{ route('causes.sensitization-campaign') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/izi-88.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">Help Out of School Children</h5>
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
            <div class="col-md-4">
                <div class="card">
                    <img src="img/izi-88.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">Support the Less Privileged</h5>
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
            <div class="col-md-4">
                <div class="card">
                    <img src="img/izi-88.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">Youth Empowerment and Skill Acquisition program</h5>
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
