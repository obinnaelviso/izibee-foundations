@extends('layouts.main')
@section('title', 'Provide Clean Portable Water')
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
                    <img src="{{ asset('img/water.jpg') }}" alt="provide-clean-water" class="img-fluid text-center mb-3">
                </div>
                <p>
                    Water is an essential commodity and clean drinking water is essential to keeping your body functioning properly and feeling healthy. Nearly all of your body's major systems depend on water to function and survive. Although in some of our rural communities they lack sources of good drinkable water. This project seeks to install good and drinkable water systems in our rural communities. These communities and villages are very poor and majority of the children in such communities suffer from water borne diseases because of the non-availability of clean drinking water, the people of these villages are suffering from widespread occurrence of water and sanitation related diseases. Women also go to the stream for washing clothes and dish washing.
                </p>
                <p>
                    They lack basic essentials of life. Most of the community members are involved in farming of their small landholdings but recently due to circumstantial realities their lively hoods have been threatened by disasters like, oil spillages, flooding, oil spillage banditry and a whole lot of others. The target population to be benefited from the proposed project Women, Children, and youths in these rural villages.
                </p>
                <p>
                    The literacy ratio of these areas is low as compared to the urban areas, a
                    lot of work in education sector is needed to achieve better results as education directly
                    influences the life standards and living standards of the community. The basic needs of daily
                    life is non-existent in the village due to less intervention of government and non-governmental agencies.
                </p>
                <p>
                    A very small section of the project area is getting water from few open wells (Dangerous source
                    of Water Supply) while some portions of the community are fetching water from the stream.  Women and girls go through difficult path to get water for drinking and other domestic uses.
                    With this Izibee Hallmark Foundation has opted to provide clean portable water for our local communities.
                </p>
                <div class="my-3 w-100">
                    <a href="{{ route('donation') }}" class="btn btn-primary w-100">SUPPORT THIS CAMPAIGN</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
