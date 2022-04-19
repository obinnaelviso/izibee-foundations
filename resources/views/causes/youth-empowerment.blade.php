@extends('layouts.main')
@section('title', 'Youth Empowerment and Skill Acquisition')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg-causes bg-cover d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white texted text-center mt-5">
                    <h1 class="display-6 text-white lh-1">
                        <a class="btn-link" href="{{ route('causes') }}">Our Programs</a> > @yield('title')
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
            <div class="col-md-10 m-auto text-align-justify">
                <div class="w-100 text-center">
                    <img src="{{ asset('img/web empowerment.jpg') }}" alt="youth-empowerment" class="img-fluid text-center mb-3">
                </div>
                <p>
                    Youth empowerment programs, are programs designed to support young people, increasing their opportunities to access better education, skills, financial empowerment etc.
                </p>
                <p>
                    Youth empowerment programs are one of the sophisticated tools used to enhance social and economic development of a society, bringing about the needed sustainability and stability.
                </p>
                <p>
                    Empowerment of youths would not only improve their living standards but would also enhance the economy of a nation. So empowering and equipping the youths with lifelong skills through real world social initiatives and programs is paramount for any nation's growth.
                </p>
                <div class="w-100 text-center">
                    <img src="{{ asset('img/fashion-empowerment.jpeg') }}" alt="fashion-empowerment" class="img-fluid text-center mb-3">
                </div>
                <div class="my-3 w-100">
                    <a href="{{ route('donation') }}" class="btn btn-primary w-100">CLICK TO DONATE NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
