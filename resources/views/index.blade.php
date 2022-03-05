@extends('layouts.main')
@section('title', 'Welcome')
@section('content')
<!-- START INTRO SLIDER -->
<div class="slider-wrapper owl-carousel owl-theme" id="hero-slider">
    <div class="slide1 bg-cover d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white texted text-center mt-5">
                    <p class="fs-5">Let’s give hope to our future generations</p>
                    <h1 class="display-3 text-white lh-1">Bright hope <br> for the future generation</h1>
                    <button class="btn btn-large btn-block mt-3">
                        <a href="donation.html">
                            SUPPORT THIS CAMPAIGN
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="slide2 bg-cover d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white text-center texted mt-5">
                    <p class="fs-5">A world where every child can access good and quality education</p>
                    <h1 class="display-3 text-white lh-1">A world where every <br> child is catered for.</h1>
                    <button class="btn btn-large btn-block mt-3">
                        <a href="donation.html">
                            SUPPORT THIS CAMPAIGN
                        </a>
                    </button>
                </div>
            </div>
      </div>
    </div>

    <!-- <div class="slide3 bg-cover d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white texted text-center mt-5">
                    <p class="fs-5">Sadness turned into happiness</p>
                    <h1 class="display-3 text-white lh-1">A place where every <br> child gets
                        education.</h1>
                    <button class="btn btn-large btn-block mt-3">
                        <a href="donation.html">
                            DONATE NOW
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- END INTRO SLIDER -->

<!-- START WHAT WE CAN DO -->
<section class="what h-auto">
    <div class="container">
        <div class="row">
            <p class="section-title mt-3 mb-3">
                What We do
            </p>

            <h3 class="display-6 col-md-6 mb-3">
                With your help We can <br>
                touch More Lives
            </h3>

            <p class="fs-6 col-md-6">
                We encourage and promote
                humanitarian services, giving care and
                support to underprivileged children,
                Women, Youths, the elderly and the
                physically challenged in deprived
                communities to improve their living
                standard by empowering them through
                real-world social initiatives and
                programs for a sustainable society.
            </p>
        </div>

        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="intro-item mb-5 mb-lg-0">
                    <div class="img">
                        <img src="img/1.jpg" alt="" class="img-fluid w-100">
                        <!-- <div class="overlay"></div> -->
                    </div>
                    <h4 class="mt-4 mb-3">Get inspired</h4>
                    <p>
                    We are an organization United by our passion for humanity, our causes motivate us to make a lasting impact on society.
                    We hope to create a better society by helping the less privileged and underserved.
                    </p>

                    <a href="about.html" class="btn text-white p-2">ABOUT US</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="intro-item mb-5 mb-lg-0">
                    <div class="img">
                        <img src="img/2.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="mt-4 mb-3">Support Our Campaign</h4>
                    <p>
                        Alone we can do little, but with your support, we can do more. We have amazing sponsors, partners and donors who admire
                        our causes. You could also be part of them. Let's make more impact with your help.
                    </p>

                    <a href="donation.html" class="btn text-white p-2">SUPPORT</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <div class="intro-item mb-5 mb-lg-0">
                        <div class="img">
                            <img src="img/volunteer.jpg" alt="" class="img-fluid w-100" style="height: 175px;">
                        </div>
                        <h4 class="mt-4 mb-3">Become a Volunteer</h4>
                        <p>
                        Identify with a cause you believe in and are passionate about. Get actively and directly involved to provide services
                        that seeks to address matters affecting society. Then it should lead to the Volunteer page.
                        </p>

                            <a href="volunteer.html" class="btn text-white p-2">BE A VOLUNTEER</a>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="intro-item mb-5 mb-lg-0">
                    <div class="img">
                        <img src="img/3.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="mt-4 mb-3">Help Out Of School Children</h4>
                    <p>
                        Children in our rural areas are unable to acquire and afford basic education due to their circumstantial realities but
                        with your help we can reintegrate children back into schools.
                    </p>

                    <a href="causes.html" class="btn text-white p-2">CAUSES</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END WHAT WE CAN DO -->

<!-- START VIDEO/COUNTER -->
<section class="video">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="video-content mb-5 mb-lg-0">
                    <h2 class="display-4 mt-5 mb-5 position-relative text-lg text-white">We can Make a Change <br> in their Lives</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 vid">
                <img src="img/3.jpg" alt="img" class="img-fluid">
                <i class="icofont-play-alt-1" data-bs-toggle="modal" data-bs-target="#play-video"></i>
            </div>
        </div>

        <div class="row counter">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0 pt-5">
                    <span class="display-1 count">1</span>
                    <p class="fs-5">Years of Experience</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0 pt-5">
                    <span class="display-1 count">23</span>
                    <p class="fs-5">Operational Volunteers</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0 pt-5">
                    <span class="display-1 count">5</span>
                    <p class="fs-5">States Reached</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0 pt-5">
                    <span class="display-1 count">306</span>
                    <p class="fs-5">People Helped</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="play-video">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <video width="100%" controls>
                        <source src="video/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div> -->
</section>
<!-- END VIDEO/COUNTER -->

<!-- START GALLERY -->
<section class="gallery">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="text-center">
                    <p class="section-title">Gallery</p>
                    <!-- <p class="mt-3 mb-5 position-relative fs-4">
                        We connect with people across different platforms. <br> We cater for our young ones.
                    </p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="gallery-wrap mb-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-1.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-1.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-2.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-2.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-3.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-3.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-4.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-4.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-5.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-5.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-6.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-6.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-7.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-7.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-8.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-8.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="gallery-item">
                        <a href="img/izi-9.jpg" class="fancybox" data-fancybox="gallery">
                            <img src="img/izi-9.jpg" alt="img" class="img-fluid w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END GALLERY -->

<!-- START SECTION DIVIDER -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-divider"></div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION DIVIDER -->

<!-- START DONATE SECTION -->
<!-- <div class="donate donate-bg bg-cover d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-12 text-white texted text-center mt-5">
                <i class="icofont-diamond"></i>
                <h1 class="display-3 text-white lh-1">Help us make the world a better <br> place for the kids</h1>
                <button class="btn btn-large btn-block mt-3">
                    <a href="donation.html">
                        DONATE NOW
                    </a>
                </button>
                <a href="donation.html" class="btn text-white p-2">DONATE NOW</a>
            </div>
        </div>
    </div>
</div> -->
<!-- END DONATE SECTION -->

<!-- START EVENTS -->
<section class="events">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="text-center">
                    <p class="section-title">Latest Events</p>
                    <p class="mt-3 mb-5 position-relative fs-4">
                       Our recent causes
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row cards g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/izi-99.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title p-2">Support Less Privileged Kids</h5>
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <p class="card-text p-2">
                            Care and support orphans and less privileged children in our rural communities.
                            </p>
                            <a href="donation.html" class="btn text-white p-2">SUPPORT THIS CAMPAIGN</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/water.jpg" alt="image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title p-2">Provide Clean Portable Water</h5>
                            <div class="col-lg-12">
                                <div class="section-divider"></div>
                            </div>
                            <p class="card-text p-2">
                                Support rural communities with drinkable water. We hope to install water facilities in rural communities.
                            </p>
                            <a href="donation.html" class="btn text-white p-2">SUPPORT THIS CAMPAIGN</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
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
                            <a href="causes.html" class="btn text-white p-2">CAUSES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END EVENTS -->
@endsection
