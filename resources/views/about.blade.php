@extends('layouts.main')
@section('title', 'About Us')
@section('content')
<!-- START HALF HEADER SECTION -->
<section class="mb-5">
    <div class="halfheader half-bg bg-cover d-flex align-items-center">
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
<section class="info mt-5 mb-5">
    <div class="container">
        <div class="row m-1 col-md-12">
            <p class="head fs-2 mt-3">WHO WE ARE</p>

            <p>
                We are a non-governmental, not-for-profit, and a non-partisan organization set up in the interest of the people because of the growing rate of poverty, Inequality, and moral decadence in society. Our foundation was founded to address the holistic needs of all vulnerable and socially excluded groups in society which include, Children, Women, Youths, the elderly and physically challenged who have been neglected. Those who are not privileged enough to cater or survive on their own without the basic skills or knowledge of how to survive in a society with the continuous rise in poverty, crime, unemployment, and lack of adequate social amenities.
            </p>

            <p>
                We as an organization see the less privileged people as part of our society in which they have significant roles to play in our country’s future, so helping them achieve their dreams and aspiration becomes important for all of us. We believe that when issues of the less privileged are addressed, it has a ripple effect at the local, state, and national level, which in turn brings stability in society.
            </p>

            <p>
                These less privileged people in society may have lost hope but giving them a sense of belonging is what we as an organization are passionate about. We try our best to give a listening ear to those in society who want to be heard by advocating on their behalf. IZIBEE HALLMARK FOUNDATION uses the instrument of Social Street Working and Research as its main technique in identifying vulnerable individuals and groups in society.
            </p>

            {{-- <ul>
                <li>
                    Anti-discriminatory practices and
                    are unprejudiced in our
                    approach
                </li>

                <li>
                    Have value for discretion and
                    confidentiality
                </li>

                <li>
                    Adapting constantly to changing
                    circumstances
                </li>

                <li>
                    Tend to act swiftly where and
                    when our attention is need
                </li>
            </ul> --}}

            <p class="head fs-2 mt-3">OUR MISSION</p>

            <p>
                To encourage and promote humanitarian services, giving care and support to underprivileged children, Women, Youths, the
                elderly and the physically challenged in deprived communities to improve their living standard by empowering them
                through real-world social initiatives and programs for a sustainable society.
            </p>

            <p class="head fs-2 mt-3">OUR AIMS/OBJECTIVES</p>

            <ul>
                <li>
                    To care and support orphans,
                    physically challenged and aged
                    persons.
                </li>

                <li>
                    To advocate for the well-being of
                    children and the protection of
                    their rights.
                </li>

                <li>
                    To care and support persons
                    living with chronic/debilitating
                    diseases, cancer, renal disorder
                    HIV/AIDS etc.
                </li>

                <li>
                    To cater for less privilege via
                    health care facility, education,
                    and scholarships.
                </li>

                <li>
                    To collaborate with international
                    and national agencies with
                    respect to developmental
                    activities in Nigeria, Africa, and
                    the world.
                </li>

                <li>
                    To provide effective voice to the
                    government on behalf of the
                    people, individuals,
                    communities, academic and
                    other non-profit organizations
                    etc.
                </li>
            </ul>

            <p class="head fs-2 mt-3">VALUES</p>

            <p>
                We at IZIBEE HALLMARK
                FOUNDATION believe in a better
                society where every man is able to
                reach their God given potentials. We
                pride ourselves with values that help in
                maintaining a friendly environment
                while keeping alive the vision and
                mission of our course.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <p class="display-4 mt-3 text-center">OUR CORE VALUES</p>

                <div class="row cards ms-1 g-4 fs-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/integrity.png" alt="" class="">
                            </div>
                            INTEGRITY
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/equality.png" alt="" class="">
                            </div>
                            EQUALITY
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/teamwork.png" alt="" class="">
                            </div>
                            TEAMWORK
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/commitment.png" alt="" class="">
                            </div>
                            COMMITMENT
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/respect.png" alt="" class="">
                            </div>
                            RESPECT
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/communication.png" alt="" class="">
                            </div>
                            COMMUNICATION
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/inclusiveness.png" alt="" class="">
                            </div>
                            INCLUSIVENESS
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/tranparency.png" alt="" class="">
                            </div>
                            TRANSPARENCY
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card p-4 text-center">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="img/accountability.png" alt="" class="">
                            </div>
                            ACCOUNTABILITY
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END INFO SECTION -->

<!-- START BOARD SECTION -->
<section class="board mt-5 mb-5">
    <div class="container">
        <div class="row">
            <p class="display-4 text-center">OUR BOARD MEMBERS</p>
        </div>

        <div class="row">
            <div class="cards">
                <div class="slider">
                    <div class="item">
                        <div class="item-inner">
                            <img src="img/board3.jpg" alt="" class="img-fluid">
                            <h4 class="mt-2 mb-2">ZITIMIYOLA IZIBENOUA</h4>
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <p class="mt-2">A Seasoned Administrator, Entrepreneur, Philanthropist and Founder Izibee Hallmark Foundation.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <img src="img/board1.jpg" alt="" class="img-fluid">
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <h4 class="mt-2 mb-2">ZITIMIYOLA ARMSTRONG W.</h4>
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <p class="mt-2">Business Development Expert and GMD ALPHA SPHINX GROUP</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <img src="img/board2.jpg" alt="" class="img-fluid">
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <h4 class="mt-2 mb-2">OJUGBELI JENNIFER CHINWE</h4>
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <p class="mt-2">Social Reformer, Entrepreneur and Community Development Advocate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BOARD SECTION -->

<!-- START TEAM MEMBERS SECTION -->
<section class="team">
    <div class="container">
        <div class="row">
                <p class="display-4 mt-3 text-center">OUR TEAM MEMBERS</p>
        </div>

        <div class="container mt-3">
            <div class="row cards g-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team1.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">ZITIMIYOLA FANMEME D.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team2.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">BARR. AZUBUIKE BRIGHT G.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team3.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">HAMLET ALABO</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team4.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">MIEDE FOSTER I.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team5.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">OJUGBELI VICTORY O.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team6.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">AWUSE PRUDENT N.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team7.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">GOLDEN ONEN O.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="img/team8.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <p class="mt-3 text-center fs-5">BLESSING JOSHUA M.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TEAM MEMBERS SECTION -->

<!-- START PARTNER SECTION -->
<section class="partners mt-5 mb-5">
    <div class="container">
        <div class="container">
            <div class="row">
                <p class="display-4 mt-3 text-center">OUR PARTNERS AND SPONSORS</p>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <img src="img/partner1.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-md-4">
                    <img src="img/partner2.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-md-4">
                    <img src="img/partner3.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PARTNER SECTION -->
@endsection
