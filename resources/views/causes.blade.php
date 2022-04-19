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
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/izi-88.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">
                            <a href="{{ route('causes.sensitization-campaign') }}" class="btn-link">Sensitization Campaign</a>
                        </h5>
                        <div class="col-lg-12">
                            <div class="section-divider"></div>
                        </div>
                        <p class="card-text p-2">
                            The team of {{ config('app.name') }} Officials visited Igili Secondary School, Umutu which over 50 students and several teachers attended.  We sensitized the students on peer influence and peer pressure in our learning environment.
                        </p>
                        <a href="{{ route('causes.sensitization-campaign') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/help-school-children.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">
                            <a href="{{ route('causes.help-school-children') }}" class="btn-link">Help Out of School Children</a>
                        </h5>
                        <div class="col-lg-12">
                            <div class="section-divider"></div>
                        </div>
                        <p class="card-text p-2">
                            {{ config('app.name') }} as a non-governmental organization work to reduce the number of out-of-school children in our rural communities and improve their quality of life and education from early childhood to adolescence.
                        </p>
                        <a href="{{ route('causes.help-school-children') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/help-less-privileged.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">
                            <a href="{{ route('causes.support-less-privileged') }}" class="btn-link">Support the Less Privileged</a>
                        </h5>
                        <div class="col-lg-12">
                            <div class="section-divider"></div>
                        </div>
                        <p class="card-text p-2">
                            In our society today there are people from poor homes, who have not been privileged to live a better life, some may have never seen or known their parents, and among those are orphans and less privileged children.
                        </p>
                        <a href="{{ route('causes.support-less-privileged') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/fashion-empowerment.jpeg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">
                            <a href="{{ route('causes.youth-empowerment') }}" class="btn-link">Youth Empowerment and Skill Acquisition program</a>
                        </h5>
                        <div class="col-lg-12">
                            <div class="section-divider"></div>
                        </div>
                        <p class="card-text p-2">
                            Youth empowerment programs are one of the sophisticated tools used to enhance social and economic development of a society, bringing about the needed sustainability and stability.
                        </p>
                        <a href="{{ route('causes.youth-empowerment') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/water.jpg" alt="image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title p-2">
                            <a href="{{ route('causes.provide-clean-water') }}" class="btn-link">Provide Clean Portable Water</a>
                        </h5>
                        <div class="col-lg-12">
                            <div class="section-divider"></div>
                        </div>
                        <p class="card-text p-2">
                            This project seeks to install good and drinkable water systems in our rural communities. These communities and villages are very poor and majority of the children in such communities suffer from water borne diseases because of the non-availability of clean drinking water.
                        </p>
                        <a href="{{ route('causes.provide-clean-water') }}" class="btn-link">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
