@extends('layout')

@section('title', 'Home')

@section('content')

    <!--About Banner Text-->
<div class="about-banner">
    <div class="text-center py-5">
        <div class="py-5 text-white">
            <h3 class="py-5">About us</h3>
        </div>
    </div>
</div>


    <!-- Centralized container section -->
    <div class="section-details container p-2">
        <div class="row py-3 px-4">
            <!-- Mission Section -->
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-left text-white my-3 p-4 remove-margin">
                <div class="p-3 mt-3 remove-margin">
                    <h1>Our Mission</h1>
                    <p class="my-2" style="opacity:80%">Our mission is to transform and simplify the real estate <br>
                        industry through innovative appointment booking solutions.<br>
                        We empower real estate professionals by enhancing efficiency<br>
                        and driving exceptional success. Our cutting-edge tools are<br>
                        designed to streamline operations, improve client <br>
                        interactions, and optimize scheduling processes. By leveraging <br>
                        our advanced technology, real estate professionals can focus <br>
                        more on their core business, achieve higher productivity,<br>
                        and provide superior service to their clients. We are committed <br>
                        to delivering unparalleled solutions that foster growth and success in the real estate sector.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-3 py-3 remove-margin">
                <img src="{{ asset('images/about-homeFrame.png') }}" class="img-fluid w-100">
            </div>
        </div>

        <!-- Best Marketing section -->
        <div class="row about-bestMarketing text-left p-5 remove-padding">
            <h1 class="text-white text-center mb-3">Introducing Best Digital Marketing  <br>Services for Real Estate Business</h1>
            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2 text-left">
                    <div class="card-body text-white">
                        <h5 class="card-title "><span class="numbering">01</span> Leads Screening</h5>
                        <p class="card-text">Every single generated lead is called by our marketing executive to obtain consent.</p>
                    </div>
                    <button class="btn btn-get-started text-white text-center m-3" type="button">Learn More</button>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2 text-left">
                    <div class="card-body text-white">
                        <h5 class="card-title "><span class="numbering">02</span> Setting
                            Appointments</h5>
                        <p class="card-text">All you need to do is focus on closing the deal, while we setup qualified listing appointments.</p>
                    </div>
                    <button class="btn btn-get-started text-white text-center m-3" type="button">Learn More</button>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2 text-left">
                    <div class="card-body text-white">
                        <h5 class="card-title "><span class="numbering">03</span> Assign to Realtor</h5>
                        <p class="card-text">All of the confirmed listing appointments from your chosen area are assigned to you in our web portal.</p>
                    </div>
                    <button class="btn btn-get-started text-white text-center m-3" type="button">Learn More</button>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-3 col-sm-12">
                <div class="card card-services my-2 text-left">
                    <div class="card-body text-white">
                        <h5 class="card-title "><span class="numbering">04</span> Support Till Conversion</h5>
                        <p class="card-text">We provide 24/7 technical support until you get the deal.</p>
                    </div>
                    <button class="btn btn-get-started text-white text-center m-3" type="button">Learn More</button>
                </div>
            </div>

        </div>

        <!-- Exclusive Section -->
        <div class="row p-4 remove-padding">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 remove-margin text-center">
                <img src="{{ asset('images/about-homeFrame.png') }}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-left text-white remove-margin">
                <div class="row exclusiveMarketing text-left text-white my-5">
                    <h1 class="mb-2">Work with a dedicated <br>
                        and leading real estate <br>
                        services and digital <br>
                        marketing agency</h1>
                    <h5 style="opacity: 80%">A leading Real Estate services and digital <br>marketing solutions company,  that empowers <br>realtors to increase their sales through digital <br>strategies</h5>
                </div>
            </div>
        </div>


        <!-- Pricing Plan section -->
{{--        <div class="row pricingPlan text-left p-5 text-center remove-padding">--}}
{{--            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">--}}
{{--                <div class="my-2">--}}
{{--                    <img src="{{ asset('images/round1.png') }}" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">--}}
{{--                <div class="my-2">--}}
{{--                    <img src="{{ asset('images/round2.png') }}" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-4 col-md-4 col-sm-12 my-3">--}}
{{--                <div class="my-2">--}}
{{--                    <img src="{{ asset('images/round3.png') }}" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

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
