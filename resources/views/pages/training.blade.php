@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Contact Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Our Training Hub</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row contact-div p-4 my-2">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/workshop.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Workshop Objectives</h3>
                    <p style="opacity: 80%">In our comprehensive training program, you'll master the art of listing<br>
                        properties with cutting-edge strategies. You'll gain a deep  <br>
                        understanding of pricing, marketing, and negotiation techniques to stand  <br>
                        out in a competitive market. Building strong client relationships and  <br>
                        earning their trust is at the core of our program. You'll also explore  <br>
                        innovative marketing tactics to make your listings shine. We emphasize  <br>
                        pricing accuracy and guide you through the legal and ethical aspects of  <br>
                        listing practices, ensuring you navigate them with confidence and  precision.</p>
                </div>
            </div>
        </div>

        <div class="row contact-div p-4 my-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/highlights.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Workshop Highlights</h3>
                    <p style="opacity: 80%">Immerse yourself in an interactive learning journey filled with hands-on  <br>
                        activities, real-world case studies, and dynamic role-play scenarios.  <br>
                        Our seasoned experts with a proven track record in listing success will  <br>
                        guide you. Stay ahead with market insights on trends, technologies, and  <br>
                        innovative tools. Plus, network with fellow realtors to exchange ideas  <br>
                        and build a strong professional community.</p>
                </div>
            </div>
        </div>

        <div class="row contact-div p-4 my-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/benefits.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Benefits of the Workshop</h3>
                    <p style="opacity: 80%">Secure a significant competitive edge and elevate your professional  <br>
                        reputation in the real estate market. Unlock new income streams by  <br>
                        consistently securing more listings and exceed client expectations with <br>
                        client-centric service. Stay ahead of industry changes and emerging  <br>
                        trends, establishing yourself as a market leader.</p>
                </div>
            </div>
        </div>
    </div>


@endsection
