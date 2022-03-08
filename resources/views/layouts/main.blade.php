<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/css/fancybox.css') }}" data-fancybox="gallery">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icofont/icofont.css') }}">
    <link rel="icon" href="{{ asset('img/Izibee editable file LOGO.png') }}">
    @stack('css')
    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>
</head>

<body>
    <!-- START TOP NAV -->
    <div class="top-nav text-light" id="home">
        <div class="container">
            <div class="row justify-content-between navvy">
                <div class="col-auto">
                    <p>
                        <i class="icofont-phone"></i>
                        <span>{{ config('app.phone1') }}</span>&nbsp<span>{{ config('app.phone2') }}</span>
                    </p>
                    <p>
                        <i class="icofont-email"></i>
                        <span>{{ config('mail.from.address') }}</span>
                    </p>
                </div>

                <div class="col-auto socials">
                    <a href="https://facebook.com/izibeehallmarkfoundation" target="_blank"><i class="icofont-facebook"></i></a>
                    <a href="https://www.twitter.com/ihfoundation_" target="_blank"><i class="icofont-twitter"></i></a>
                    <a href="https://www.instagram.com/ihfoundation_" target="_blank"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP NAV -->

    @include('layouts.navbar')

    @yield('content')

    <!-- START FOOTER SECTION -->
    <footer>
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-md-3 mb-5">
                    <h2 class="mb-4">About Us</h2>
                    <p class="lh-lg">We are a non-governmental, non-for-profit, and a non-partisan organization set up in
                        the interest of the people because
                        of the growing rate of poverty, Inequality, and moral decadence in society.</p>
                    <p><a href="about.html">Learn More <i class="icofont-arrow-right"></i></a></p>
                </div>

                <div class="col-md-3 mb-5">
                    <h2 class="mb-4">Organization</h2>

                    <p class="lh-lg">Address: Plot X53, Close7, Elekahia Housing
                        Estate, Port-Harcourt, Rivers State,
                        Nigeria
                    </p>

                    <p>
                        <i class="icofont-phone"></i>
                        <span>{{ config('app.phone1') }}</span>
                    </p>
                    <p class="fs-6">
                        <i class="icofont-email"></i> <br>
                        <span>{{ config('mail.from.address') }}</span>
                    </p>
                </div>

                <div class="col-md-3 mb-5 links">
                    <h2 class="mb-4">Quick Links</h2>
                    <ul class="list-unstyled footer-link">
                        <li><a href="about.html">About us</a></li>
                        <!-- <li><a href="#">Services</a></li> -->
                        <li><a href="volunteer.html">Team</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="donation.html">Support</a></li>
                    </ul>
                </div>

                <div class="col-md-3 social">
                    <h2 class="mb-4">Social Media</h2>
                    <ul class="list-unstyled footer-link">
                        <a href="https://facebook.com/izibeehallmarkfoundation" target="_blank"><i
                                class="icofont-facebook"></i></a>
                        <a href="https://www.twitter.com/ihfoundation_" target="_blank"><i class="icofont-twitter"></i></a>
                        <a href="https://www.instagram.com/ihfoundation_" target="_blank"><i
                                class="icofont-instagram"></i></a>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <div class="col-12 text-center">
                    <p>Copyright Reserved By {{ config('app.name') }} &#169; {{ date('Y') }}
                        <span class="year"></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->



    <script src="{{ asset('plugins/fancybox/js/fancybox.umd.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.j') }}s"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('plugins/slick-carousel/js/slick.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>

</html>
