@extends('layout')

@section('title', 'Home')

@section('content')
    <!--Main Banner Hero Image -->
    <div class="main-banner">
        <div class="text-center py-5">
            <div class="py-3">
                <h1>Leading Real Estate Cold</h1>
                <h1>CALLING & DIGITAL<br>
                    MARKETING SERVICES
                </h1>
                <p class="my-2">A leading real estate cold calling and digital marketing services agency that <br>empowers
                    realtors
                    to increase their sales.</p>
                <a class="nav-link" href="{{ url('/contact') }}"><button class="btn btn-start-now text-white my-3 px-4" type="button">Start Now</button></a>
            </div>
        </div>
    </div>

    <!-- Centralized container section -->
    <div class="section-details container p-2">
        <div class="row py-5 px-3">
            <!-- Services Cards -->
            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg1.png') }}" class="img-fluid mb-2">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Get your business known online <br>with Digital Marketing services</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg2.png') }}" class="img-fluid mb-2">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Our Website Development <br>team is e-marketing-aware of <br>coordinating.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg3.png') }}" class="img-fluid mb-2">
                        <h5 class="card-title">Cold Calling</h5>
                        <p class="card-text">Listing Canada is providing <br>Cold Calling for the realtors in <br>Canada.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <img src="{{ asset('images/cardImg3.png') }}" class="img-fluid mb-2">
                        <h5 class="card-title">Content Marketing</h5>
                        <p class="card-text">Professional content writing <br>service for your business and <br>blog</p>
                    </div>
                </div>
            </div>

            <!-- Explore Services Section -->
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-left text-white my-5 py-3 remove-margin">
                <div class="py-3 ">
                    <h1>Enjoy Full-Service Digital<br>Marketing Expertise</h1>
                    <p class="my-2" style="opacity:80%">A leading Real Estate services and digital marketing <br>solutions
                        company, that empowers realtors to increase
                        <br>their sales through digital strategies
                    </p>
                    <a class="nav-link" href="{{ url('/about') }}"> <button class="btn btn-start-now text-white my-3" type="button">Explore Our Services</button></a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-5 py-3 remove-margin text-end">
                <img src="{{ asset('images/homeFrame.png') }}" class="img-fluid w-100">
            </div>

            <!-- More Companies Section -->
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center my-3">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-3 col-lg-3 mb-2">
                            <img src="{{ asset('images/company1.png') }}" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 col-lg-2 mb-2">
                            <img src="{{ asset('images/company2.png') }}" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 col-lg-2 mb-2">
                            <img src="{{ asset('images/company3.png') }}" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 col-lg-2 mb-2">
                            <img src="{{ asset('images/company4.png') }}" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3 mb-2">
                            <img src="{{ asset('images/company5.png') }}" class="img-fluid">
                        </div>
                    </div>
            </div>

        </div>

        <!-- Best Marketing section -->
        <div class="row bestMarketing text-left p-5 remove-padding">
                <h1 class="text-white text-center mb-2">Introducing Best Digital Marketing  <br>Services for Real Estate Business</h1>
                <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-services my-2">
                        <div class="card-body text-white">
                            <img src="{{ asset('images/cardImg1.png') }}" class="img-fluid mb-2">
                            <h5 class="card-title">Cold Calling</h5>
                            <p class="card-text">Listing Canada is providing cold calling <br>service for the realtors in Canada.
                                <br>Leads collected through our system <br>
                                have the maximum possibility of turning <br>into a deal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-services my-2">
                        <div class="card-body text-white">
                            <img src="{{ asset('images/cardImg2.png') }}" class="img-fluid mb-2">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">Digital Marketing has become an <br>important part of major businesses in <br>
                                Canada. Listing Canada specialize in <br>understanding customer’s journey and <br>
                                in-depth analysis of competition.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-services my-2">
                        <div class="card-body text-white">
                            <img src="{{ asset('images/cardImg3.png') }}" class="img-fluid mb-2">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Our Website Development team is e-<br>marketing-aware of coordinating  <br>
                                multi-channel marketing programs <br>within the client organization, including <br>online and offline campaigns.
                            </p>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Exclusive Section -->
        <div class="row p-5 remove-padding">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-5 remove-margin text-center">
                <img src="{{ asset('images/homeFrame2.png') }}" class="img-fluid pt-5">
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-left text-white my-5 remove-margin">
                <div class="row exclusiveMarketing text-left">
                    <h3 class="text-white text-center mb-2">Grow Your Business with Real <br>EstateDigital Marketing</h3>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="card card-services my-2">
                            <div class="card-body text-white">
                                <h5 class="card-title">PPC Advertising</h5>
                                <p class="card-text">Target your ideal search <br>
                                    phrases and get found at <br>the top of
                                    search results. <br>PPC allows you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="card card-services my-2">
                            <div class="card-body text-white">
                                <h5 class="card-title">Web  Development</h5>
                                <p class="card-text">Your website has to impress <br>your visitors within just a <br>few seconds. If it runs slow, <br>if it feels outdated.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="card card-services my-2">
                            <div class="card-body text-white">
                                <h5 class="card-title">Media Managment</h5>
                                <p class="card-text">Create, publish, and <br>promote engaging content <br>
                                    to generate and build a <br>dedicated community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="card card-services my-2">
                            <div class="card-body text-white">
                                <h5 class="card-title">Keyword Research</h5>
                                <p class="card-text">We select themed keywords <br>based on user-intent to <br>solidify rankings </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pricing Plan section -->
        <div class="row pricingPlan text-left p-5 remove-padding" id="Pricing">
            <h1 class="text-white text-center mb-2">Flexible Pricing Plans</h1>
            <h4 class="text-white text-center mb-2">We have experience working with large and small businesses and are ready to <br>
                develop a targeted strategy and plan that’s just right for you.</h4>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <div class="my-2">
                            <span class="d-flex my-1">
                                <h3 class="card-title">Starter</h3>
                                <button class="btn btn-start-now text-white mx-3" type="button">Best Deal</button>
                            </span>
                            <p class="card-text">For Individuals and Small Teams</p>
                           <span class="d-flex my-2"><h3 class="card-title"><sup>$</sup>10<sub style="font-size: small;">per month</sub></h3></span>
                            <button class="btn btn-square text-white my-2" type="button">Current Plan</button>
                        </div>
                        <div class="my-2">
                            <h6>Include</h6>
                            <p class="card-text">Everything you get in this plan</p>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>50 Page Unlock</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>10 GB Storage</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>6 Team Members</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Unlimited Book Mark</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Unlimited basic feature</span></div>
                        </div>
                        <button class="btn btn-square text-white my-2 w-100" type="button">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <div class="my-2">
                            <span class="d-flex my-1">
                                <h3 class="card-title">Professional</h3>
                            </span>
                            <p class="card-text">For Individuals and Small Teams</p>
                           <span class="d-flex my-2"><h3 class="card-title"><sup>$</sup>20<sub style="font-size: small;">per month</sub></h3></span>
                            <button class="btn btn-square text-white my-2" type="button">Upgrade Plan</button>
                        </div>
                        <div class="my-2">
                            <h6>Include</h6>
                            <p class="card-text">Everything you get in this plan</p>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>100 Page Unlock</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>23 GB Storage</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>7 Team Members</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Unlimited Book Mark</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Unlimited basic feature</span></div>
                        </div>
                        <button class="btn btn-square text-white my-2 w-100" type="button">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">
                <div class="card card-services my-2">
                    <div class="card-body text-white">
                        <div class="my-2">
                            <span class="d-flex my-1">
                                <h3 class="card-title">Business</h3>
                            </span>
                            <p class="card-text">For Individuals and Small Teams</p>
                           <span class="d-flex my-2"><h3 class="card-title"><sup>$</sup>Custom<sub style="font-size: small;">per month</sub></h3></span>
                            <button class="btn btn-square text-white my-2" type="button">Contact Us</button>
                        </div>
                        <div class="my-2">
                            <h6>Include</h6>
                            <p class="card-text">Everything you get in this plan</p>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Custom Page Unlock</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Custom Storage</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Custom Members</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Unlimited Book Mark</span></div>
                            <div><img src="{{ asset('images/tick.png') }}" class="img-fluid mx-2"><span>Unlimited basic feature</span></div>
                        </div>
                        <button class="btn btn-square text-white my-2 w-100" type="button">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Journey section -->
        <div class="row journey text-center m-5">
            <div class="col-12 p-4">
                <h1 class="text-white mb-2">Start your journey now</h1>
                <h4 class="text-white mb-2" style="opacity: 80%">A data dashboard is a tool that collects and analyzes data, including key performance <br>indicators (KPI), metrics, and other data points that monitor progress over time. </h4>
                <div class="d-flex justify-content-center my-2 text-center">
                    <button class="btn btn-email text-white" type="button">Your email address</button>
                    <button class="btn btn-start-now text-white mx-2" type="button">Learn More</button>
                </div>
            </div>
        </div>

    </div>
@endsection
