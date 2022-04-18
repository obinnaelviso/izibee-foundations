@extends('layouts.main')
@section('title', 'Sensitization Campaign')
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
                    <img src="{{ asset('img/izi-88.jpg') }}" alt="sensitization-campaign" class="img-fluid text-center mb-3">
                </div>
                <h4 class="fw-bolder text-uppercase">
                    SENSITIZATION PROGRAM AIMS TO CREATE A SAFER LEARNING ENVIRONMENT IN OUR SCHOOLS.
                </h4>
                <p>
                    The team of Izibee Hallmark Foundation Officials visited Igili Secondary School, Umutu which over 50 students and several teachers attended.  We sensitized the students on peer influence and peer pressure in our learning environment.
                    On speaking to them, they were urged to report any form of bulling or actions taken on them by their fellow students for not wanting to engage in activities not inclined with their moral teachings.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Aim of the program
                </h4>
                <p>
                    The speaker of the day was Miss Ojugbeli Jennifer Chinwe, Chief Executive Officer, Izibee Hallmark Foundation. She spoke on peer influence and pressure, which she defined the terms, negative effects of peer influence/pressure in education and how to channel it to positivity.
                </p>
                <p>
                    The sensitization and awareness campaign were targeted for our children in secondary schools with the hopes to positively impact the prerequisite mindset for our upcoming leaders.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Program activities
                </h4>
                <p>
                    The campaign stated with the introduction of the of the Team of Izibee Hallmark Foundation to the students and teachers by the school’s Principal. The team took center stage to introduce the topic.
                </p>
                <p>
                    After exhaustively discussing the topic a question-and-answer session was arranged where students are given the opportunity to air their views and to tell the team scenarios which they encounter in and out of the school environment. This was to enable the team to relate with the children at a level which they were comfortable to share their experiences.
                </p>
                <p>
                    After the teaching and open discussions, the Team stayed back for hours giving individual students private sessions to engage them on the numerous challenges they were facing in school, which we proffered solution and those we were unable to handle, we reached out to the school authorities to help such students. Lastly, group photos were taken with the staff and students at the school.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Program feedback
                </h4>
                <p>
                    At the end of the day before the Team left a vote of thanks was given to the team on behalf of the staff and students by the principal. The expression of joy and happiness from the staff and students showed that we have positively impacted in their lives, and they appealed that such activities be done more frequent in their school.
                </p>
                <p>
                    Izibee Hallmark Foundation is planning to organize such activities in several other schools to create a safer learning environment in our schools.
                </p>
                <div class="my-3 w-100">
                    <a href="{{ route('donation') }}" class="btn btn-primary w-100">CLICK TO DONATE NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
