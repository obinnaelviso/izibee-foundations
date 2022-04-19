@extends('layouts.main')
@section('title', 'Help Out Of School Children')
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
                    <img src="{{ asset('img/help-school-children.jpg') }}" alt="help-school-children" class="img-fluid text-center mb-3">
                </div>
                <h4 class="fw-bolder text-uppercase">
                    OUT-OF-SCHOOL CHILDREN PROGRAM
                </h4>
                <p>
                    It has been noticed and was stated that “10.5 million children are out of school in Nigeria, which is the highest rate in the world. The figure Izibee Hallmark Foundation as a non-governmental organization work to reduce the number of out-of-school children in our rural communities and improve their quality of life and education from early childhood to adolescence. indicates that one-third of Nigerian children are not in school, and one in five out-of-school children in the world is a Nigerian.” UNICEF. And millions of Nigerian children have never stepped their foot in a classroom.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    About the out of school children program
                </h4>
                <p>
                    The Out-of-School Children programbrings hope for education as it is aprogram that tends to locate and reintegrate out of school children. The process begins by visiting our rural communities; besides, statistics has shown that we have more out of school children living in our rural communities. We use diverse resources within our arsenal including education data, health data, surveys, and interviews to identify the number of children who do not attend school. The data is analyzed to create a detailed portrait of the children who do not attend school and the issues militating against them being in school. The issues are analyzed and taken into consideration on the best option to be use to reintegrate them back into school.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Implementation / Aim of the program
                </h4>
                <p>
                    The program implementation;
                </p>
                <p>
                    Locating children from low-income families that are unable to enroll their children for school due to circumstantial realities. These children are adopted as beneficiaries of Izibee Hallmark Foundation, where they will be placed on scholarship in our partner schools or schools close to them.
                </p>
                <p>
                    A comprehensive profile is then set up for the enrolled child on the IHF database. After which they are continuously followed up and provided with all educational tools throughout the school year.
                </p>
                <p>
                    The Project aims to address the barriers faced by the children through collaboration with local schools and NGOs, interacting with affected communities, and facilitating the establishment of alternative educational initiatives.
                </p>
                <p>
                    The goal of the initiative is to significantly and sustainably reduce the number of out of school children in our rural communities. The initiative works to ensure all children living in our rural communities have access to good education so they can unlock their God given potentials in order to be productive, responsible and to grow up to transform their immediate surrounding and in turn contribute to the development and economic growth of the nation.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Challenge
                </h4>
                <p>
                    Since the early 2000s, there has been significant increase of out of school children of primary and secondary school age and it is estimated to rise in the coming years. Gender discrimination, natural disasters, militancy, banditry, armed conflict, language challenges, household poverty, child labor, child marriage and some others are plagued with disabilities are some of the main barriers that keep children out of school.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Solution
                </h4>
                <p>
                    Reducing the number of out-of-school children in our rural communities has to be a multi-sectoral approach involving governments, the private sector, NGOs, the media, individuals and communities.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Cost
                </h4>
                <p>
                    It costs {{ config('app.currency') }}50,000 to enroll a child in school, which includes provision of scholarship, a schoolteacher/support, school supplies, for an academic year.
                </p>
                <div class="my-3 w-100">
                    <a href="{{ route('donation') }}" class="btn btn-primary w-100">CLICK TO DONATE NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
