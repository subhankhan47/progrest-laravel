@extends('layout')

@section('title', 'Home')

@section('content')
    <!--Main Banner Hero Image -->
    <div class="main-banner slider">
        <div class="slide" style="background-image: url('/images/overlay-gray.png'), url('/images/hero-image.png');">
           @include('partials.main-banner-content')
        </div>
        <div class="slide" style="background-image: url('/images/overlay-gray.png'), url('/images/hero-image2.png');">
            @include('partials.main-banner-content')
        </div>
        <div class="slide" style="background-image: url('/images/overlay-gray.png'), url('/images/hero-image3.png');">
            @include('partials.main-banner-content')
        </div>
    </div>

    <!-- Centralized container section -->
    <div class="section-details container p-2">
        <div class="row div-stats px-3 mx-3 my-4 text-center">
            <div class="col-12 col-md-2 col-lg-2 col-sm-12">
                <strong><h3 class="text-white pt-3">600+</h3></strong>
                <p class="text-secondary">Realter Served</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-12">
                <strong><h3 class="text-white pt-3">+6M</h3></strong>
                <p class="text-secondary">Spend on Ads
                    and Cold calling</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-12">
                <strong><h3 class="text-white pt-3">4.5/5</h3></strong>
                <p class="text-secondary">Reviews</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-12">
                <strong><h3 class="text-white pt-3">1200+</h3></strong>
                <p class="text-secondary">Listings every
                    month</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-12">
                <strong><h3 class="text-white pt-3">6000+</h3></strong>
                <p class="text-secondary">Listing Appointments
                    every month</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-12">
                <strong><h3 class="text-white pt-3">7+</h3></strong>
                <p class="text-secondary">Years of experience
                    with proud</p>
            </div>
        </div>

        <div class="row p-3">
            <!-- Explore Services Section -->
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-left text-white my-5 py-3 remove-margin">
                <div class="py-3 ">
                    <h1>Revolutionizing Real Estate <br>Lead Generation for <br>Unparalleled Results</h1>
                    <p class="my-3" style="opacity:80%">Real estate lead generation involves the identification <br>and
                        nurturing of
                        prospective clients interested in <br>property transactions.
                        To generate leads <br>successfully, it is crucial to implement targeted <br>marketing campaigns.
                    </p>
                    <a class="nav-link" href="{{ url('/about') }}">
                        <button class="btn btn-start-now text-white" type="button">Explore Our Services</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-5 remove-margin text-end">
                <img src="{{ asset('images/homeFrame.png') }}" class="img-fluid">
            </div>


            <!-- Services Cards -->
            <div class="my-3" id="qualityServices">
                <h6 class="text-white text-center">Here is how we Generate your Appointment.</h6>
                <h3 class="text-white text-center mb-2">Quality Services</h3>
            </div>

            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card new-service-card my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg1.png') }}" class="img-fluid mb-2 w-100">
                        <div class="container">
                            <h5 class="card-title">Inbound and Outbound<br>
                                Calling Department</h5>
                            <p class="card-text">Our Cold Calling and Marketing Department go <br>beyond the initial
                                contact.
                                We believe in the power <br>of personalization. Our team creates effective <br>marketing
                                campaigns
                                tailored to your target <br>audience, making those all-important cold calls <br>that
                                transform leads into
                                solid appointments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card new-service-card my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg2.png') }}" class="img-fluid mb-2 w-100">
                        <div class="container">
                            <h5 class="card-title">Appointment Setting<br>
                                department</h5>
                            <p class="card-text">The Appointment Confirmation Department is all <br>about ensuring that
                                the appointments
                                we <br>generate are not only set but also confirmed. We <br>
                                understand that a confirmed appointment is a <br>significant step toward a successful
                                real estate <br>deal, and we leave no room for uncertainties.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card new-service-card my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg3.png') }}" class="img-fluid mb-2 w-100">
                        <div class="container">
                            <h5 class="card-title">Quality and Validation<br>
                                Department</h5>
                            <p class="card-text">Our Quality and Validation Department play a <br>
                                critical role in maintaining the highest standards.<br>
                                Every lead generated undergoes a thorough <br>
                                assessment and validation process. This rigorous <br>quality
                                assurance ensures that the appointment <br>we provide meet your specific criteria
                                and are <br>genuinely interested in your services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card new-service-card my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg4.png') }}" class="img-fluid mb-2 w-100">
                        <div class="container"><h5 class="card-title">Digital marketing & SEO</h5>
                            <p class="card-text">A leading Real Estate services and digital <br>marketing solutions
                                company, that empowers <br>realtors to
                                increase their sales through digital <br>strategies With our powerful online and digital
                                marketing <br>solutions,
                                we assist potential customers to find an <br>exclusive listing leads </p></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card new-service-card my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg5.png') }}" class="img-fluid mb-2 w-100">
                        <div class="container"><h5 class="card-title">Client Advocacy/Dedicated<br>
                                Assistance</h5>
                            <p class="card-text">"Your 'Client Advocate' is your personal helper, and <br>
                                we're proud to introduce this innovative concept in<br>
                                real estate. They ensure you receive top-notch <br>
                                support, offering details about appointments and<br>
                                comprehensive insights about sellers. If you have <br>
                                questions or need to make changes, they're just a call away. </p></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card new-service-card my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg6.png') }}" class="img-fluid mb-2 w-100">
                        <div class="container"><h5 class="card-title">Accounts Department</h5>
                            <p class="card-text">Account Management is the dynamic hub where <br>
                                creativity meets strategy, ensuring our brand's <br>
                                presence resonates across diverse channels. Our <br>team meticulously curates and
                                distributes content,
                                leveraging the power <br>of visual and written communication to engage audiences
                                effectively. </p></div>
                    </div>
                </div>
            </div>


            <!-- More Companies Section -->
            {{--            <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center my-3">--}}
            {{--                    <div class="row justify-content-center">--}}
            {{--                        <div class="col-6 col-md-3 col-lg-3 mb-2">--}}
            {{--                            <img src="{{ asset('images/company1.png') }}" class="img-fluid">--}}
            {{--                        </div>--}}
            {{--                        <div class="col-6 col-md-2 col-lg-2 mb-2">--}}
            {{--                            <img src="{{ asset('images/company2.png') }}" class="img-fluid">--}}
            {{--                        </div>--}}
            {{--                        <div class="col-6 col-md-2 col-lg-2 mb-2">--}}
            {{--                            <img src="{{ asset('images/company3.png') }}" class="img-fluid">--}}
            {{--                        </div>--}}
            {{--                        <div class="col-6 col-md-2 col-lg-2 mb-2">--}}
            {{--                            <img src="{{ asset('images/company4.png') }}" class="img-fluid">--}}
            {{--                        </div>--}}
            {{--                        <div class="col-6 col-md-3 col-lg-3 mb-2">--}}
            {{--                            <img src="{{ asset('images/company5.png') }}" class="img-fluid">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--            </div>--}}

        </div>

        <!-- Best Marketing section -->
    {{--        <div class="row bestMarketing text-left p-5 remove-padding">--}}
    {{--            <h1 class="text-white text-center mb-2">Introducing Best Digital Marketing <br>Services for Real Estate--}}
    {{--                Business</h1>--}}
    {{--            <div class="col-12 col-lg-4 col-md-4 col-sm-12">--}}
    {{--                <div class="card card-services my-2">--}}
    {{--                    <div class="card-body text-white">--}}
    {{--                        <img src="{{ asset('images/cardImg1.png') }}" class="img-fluid mb-2">--}}
    {{--                        <h5 class="card-title">Cold Calling</h5>--}}
    {{--                        <p class="card-text">Listing Canada is providing cold calling <br>service for the realtors in--}}
    {{--                            Canada.--}}
    {{--                            <br>Leads collected through our system <br>--}}
    {{--                            have the maximum possibility of turning <br>into a deal.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-12 col-lg-4 col-md-4 col-sm-12">--}}
    {{--                <div class="card card-services my-2">--}}
    {{--                    <div class="card-body text-white">--}}
    {{--                        <img src="{{ asset('images/cardImg2.png') }}" class="img-fluid mb-2">--}}
    {{--                        <h5 class="card-title">Digital Marketing</h5>--}}
    {{--                        <p class="card-text">Digital Marketing has become an <br>important part of major businesses in--}}
    {{--                            <br>--}}
    {{--                            Canada. Listing Canada specialize in <br>understanding customer’s journey and <br>--}}
    {{--                            in-depth analysis of competition.--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-12 col-lg-4 col-md-4 col-sm-12">--}}
    {{--                <div class="card card-services my-2">--}}
    {{--                    <div class="card-body text-white">--}}
    {{--                        <img src="{{ asset('images/cardImg3.png') }}" class="img-fluid mb-2">--}}
    {{--                        <h5 class="card-title">Web Development</h5>--}}
    {{--                        <p class="card-text">Our Website Development team is e-<br>marketing-aware of coordinating <br>--}}
    {{--                            multi-channel marketing programs <br>within the client organization, including <br>online--}}
    {{--                            and offline campaigns.--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    <!-- Exclusive Section -->
        <h4 class="text-white text-center mt-3">GET A CONFIRMED AND HOT EXCLUSIVE LISTING APPOINTMENT</h4>
        <div class="row py-5 remove-padding">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 remove-margin text-center">
                <img src="{{ asset('images/homeFrame2.png') }}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-left text-white my-5 remove-margin">
                <div class="exclusiveMarketing text-left my-3">
                    <div>
                        <img src="{{ asset('images/tick2.png') }}"
                             class="img-fluid"><span class="mx-2">Roller coaster income</span>
                        <p class="px-4 text-secondary">Your income is inconsistent. Some months are greater than others because you don’t
                            have a predictable, consistent system of getting new qualified leads. You're either relying
                            on referrals
                            and SOI or getting shared buyer leads that are unqualified, ready in 9-12 months out and
                            zero “now business” for listings.</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/tick2.png') }}"
                             class="img-fluid"><span class="mx-2">Most of your clients are buyers</span>
                        <p class="px-4 text-secondary">You’d love to shift your buyer/seller ratio to work less while  making more but most of
                            your clients seem to be buyers. If only you  could stop driving around for 9 months to then learn they bought with
                            the listing agent.</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/tick2.png') }}"
                             class="img-fluid"><span class="mx-2">Burnt by lead gen companies</span>
                        <p class="px-4 text-secondary">Do you feel like you’re hoping from one lead gen company to another  hearing the same
                            false promises again and again, only to be left with  unqualified leads and a company that won’t give you your money back?</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/tick2.png') }}"
                             class="img-fluid"><span class="mx-2">Tired of cold calling and door knocking</span>
                        <p class="px-4 text-secondary">You realize in 2024 these methods are less effective than online  video marketing and feel like there must be a better way than to bang  out 4 hours a day of cold calling FSBO and expired listings.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pricing Plan section -->
        <div class="row pricingPlan text-left p-5 remove-padding" id="Pricing">
            <h1 class="text-white text-center mb-2">Flexible Pricing Plans</h1>
            <h4 class="text-white text-center mb-2">We have experience working with large and small businesses and are
                ready to <br>
                develop a targeted strategy and plan that’s just right for you.</h4>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <div class="my-2">
                            <span class="d-flex my-1">
                                <h3 class="card-title">Basic</h3>
                            </span>
                            <p class="card-text mb-3">start toward achieving your goals.</p>
                            <span class="d-flex my-4"><h1 class="card-title"><strong><sup>$</sup> 2,999<sub
                                            style="font-size: small;"> /3 months</sub></strong></h1></span>
                        </div>
                        <div class="my-2">
                            <p class="card-text">Kickstart your journey with rapid
                                momentum</p>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>33 appointments</span></div>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>11 appointments / each month</span></div>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>Upfront</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Recurring $ </span>
                            </div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Assigned account manager</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Basic support</span>
                            </div>
                        </div>
                        <a class="nav-link" href="{{ url('/contact') }}"><button class="btn btn-square text-white my-2 w-100" type="button">Buy Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <div class="my-2">
                            <span class="d-flex my-1">
                                <h3 class="card-title">Standard</h3>
                            </span>
                            <p class="card-text">Accelerate your success with our<br>
                                innovative solutions</p>
                            <span class="d-flex my-2"><h1 class="card-title"><strong>
                                        <sup>$</sup> 5,999<sub
                                            style="font-size: small;"> /6 months</sub>
                                    </strong></h1></span>
                        </div>
                        <div class="my-2">
                            <p class="card-text">Secure your highest achievements
                                seamlessly</p>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>65 appointments</span></div>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>13 appointments / each month</span></div>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>Upfront</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Recurring $ </span>
                            </div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Assigned account manager</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Basic support</span>
                            </div>
                        </div>
                        <a class="nav-link" href="{{ url('/contact') }}"> <button class="btn btn-square text-white my-2 w-100" type="button">Buy Now</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <div class="my-2">
                            <span class="d-flex my-1">
                                <h3 class="card-title">Premium</h3>
                            </span>
                            <p class="card-text">Elevate your experience with a touch<br>
                                of class and top-tier excellence.</p>
                            <span class="d-flex my-2"><h1 class="card-title">
                                    <strong><sup>$</sup> 8,499<sub
                                            style="font-size: small;"> /9 months</sub></strong></h1></span>
                        </div>
                        <div class="my-2">
                            <p class="card-text">Supercharge your success with
                                premium excellence</p>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>110 appointments</span></div>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>13 appointments / each month</span></div>
                            <div><img src="{{ asset('images/tick.png') }}"
                                      class="img-fluid mx-2"><span>Upfront</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Recurring $ </span>
                            </div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Assigned account manager</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Basic support</span>
                            </div>
                        </div>
                        <a class="nav-link" href="{{ url('/contact') }}"> <button class="btn btn-square text-white my-2 w-100" type="button">Buy Now</button></a>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
