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

                <a href="{{ route('volunteer-register') }}" class="btn btn-mega mb-3" target="_blank">
                    Register as a Volunteer
                    <i class="bi bi-arrow-right"></i>
                </a>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit recusandae atque ad aliquid sit perferendis harum corporis blanditiis similique impedit nobis ex fuga iure odit deserunt rerum et, itaque omnis.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscipit corporis necessitatibus praesentium eveniet officiis excepturi sapiente iste cumque incidunt?</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis similique soluta eum numquam aperiam natus ratione illo sint provident necessitatibus consectetur nemo aspernatur reiciendis voluptates illum, labore nostrum? Temporibus rem suscipit sed, molestiae eligendi reprehenderit ex. Odio eaque quasi voluptatibus veniam quae non ipsa hic est nulla fugiat. Ipsum corporis, nam vel quidem ab aliquam ullam voluptates blanditiis sed nostrum! Facere, possimus ipsa maxime ex doloribus explicabo veniam necessitatibus eum! Eum quo unde porro omnis, deleniti, odit id, nemo recusandae harum enim nostrum explicabo at nisi voluptatibus! Voluptatem consectetur aut iusto cupiditate quos? Aliquam impedit iste eum ea vero a?</p>

                <a href="{{ route('volunteer-register') }}" class="btn btn-mega mb-3" target="_blank">
                    Register as a Volunteer
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
