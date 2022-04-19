@extends('layouts.main')
@section('title', 'Support The Less Privileged')
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
                    <img src="{{ asset('img/help-less-privileged.jpg') }}" alt="help-less-privileged" class="img-fluid text-center mb-3">
                </div>
                <p>
                    In our society today there are people from poor homes, who have not been privileged to live a better life, some may have never seen or known their parents, and among those are orphans and less privileged children. These set of less privileged children suffer from malnutrition, ill treatment from their environment, no proper care, no basic education, nor access to good health care, as well as other basic needs. These children suffer a lot from a very tender age and if not addressed, may turn out to be deviants in society.
                </p>
                <p>
                    We have the aged and elderly, who probably have been abandoned by family members for one reason or the other. These elderly people struggle to survive on daily basis with no means of income, good food, clothes and eventually they die from deadly diseases.
                </p>
                <p>
                    There are equally the physically challenged people among which some beg on the streets for a living just to keep on surviving.
                </p>
                <p>
                    In addition to all the challenges our society is faced with, we have our youthful population who have gotten frustrated from unemployment to the point of engaging themselves in different manners of evil vices, ranging from internet fraud, drug abuse, theft, prostitution, just to make a living, while others due to hardship, embark on dangerous journeys in search for greener pastures.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    About the support the less privileged program
                </h4>
                <p>
                    The support the less privileged program fundamentally addresses the issues of non-inclusion and neglect of less privileged and underserved persons in our rural communities. The method begins by visiting our rural communities and interacting with them to understand their plights and needs. These needs are then put into consideration by Izibee Hallmark Foundation, funds are then raised through kind donations, and several awareness campaigns to bring both government, private and other institutions attention to the needs of those living in the rural community.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Implementation/ Aim of the program
                </h4>
                <p>
                    The program implementation;
                </p>
                <p>
                    We at Izibee Hallmark Foundation seek to provide empowerment for indigent and less privileged persons and to cater for the less privilege via health care facility, education, and scholarships. We interact with community leaders, key stake holders, arrange town hall meetings, and reach out to families and individuals through interviews.  After these steps are taken our data is collated and they are adopted as beneficiaries of Izibee Hallmark Foundation, where they will benefit from the initiative. A comprehensive profile is then set up for them for future initiatives on the IHF database. After which they are continuously followed up and provided with basic essentials from time to time.
                </p>
                <p>
                    This initiative/program aims to address the issues of non-inclusion and neglect from existing authorities, so through collaboration with locals, private sector, and NGOs, the less privileged in our rural communities, can feel loved and experience inclusion in the scheme of things.
                </p>
                <p>
                    The goal and aim of the program is to maintain and build a better society. We as an organization through Skills Acquisition and Entrepreneur Development, Human Capacity Building, Research, and other Initiatives, try to address issues which confront less privileged children, women, youths, elderly and the physically challenged who are unable to fend for themselves in order to be productive, responsible and to transform their immediate surrounding and in turn contribute to the economic growth of the nation.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Challenges
                </h4>
                <p>
                    Our challenges are diverse and even with the constant awareness creation of needs of those living in our rural communities, there is consistent struggle to gain acceptance from these communities. The rural communities lack education, language barriers, traditional beliefs, lack of technological infrastructure, lack of funding, insecurity and on some occasions, volunteers are not allowed into the communities. These are some of the issues which plague the initiative.
                </p>
                <h4 class="fw-bolder text-uppercase">
                    Solution
                </h4>
                <p>
                    Reaching the less privileged in our rural communities has to be a multi-sectoral approach involving governments, the private sector, NGOs, the media, individuals and communities.
                </p>
                <div class="my-3 w-100">
                    <a href="{{ route('donation') }}" class="btn btn-primary w-100">CLICK TO DONATE NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
