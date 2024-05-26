@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Contact Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Online marketing</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row contact-div p-4 my-2">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/digitalMarketing.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Digital Marketing</h3>
                    <p style="opacity: 80%">Digital marketing empowers us to books listing appointments for  <br>
                        realtors, it increase our online visibility, help us engage with a<br>
                        targeted audience, and nurture client relationships. By leveraging  <br>
                        content marketing, social media, email campaigns, and data analytics,  <br>
                        the company can efficiently attract and serve real estate professionals,  <br>
                        establishing trust and building a reputable brand in the competitive  market.</p>
                </div>
            </div>
        </div>

        <div class="row contact-div p-4 my-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/seo.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Search Engine Optimization <br>(SEO)</h3>
                    <p style="opacity: 80%">We specialize in booking listing appointments for realtors. By  <br>
                        optimizing the website for search engines, we ensures enhanced  <br>
                        visibility, targeted traffic, credibility, and trust among real estate  <br>
                        professionals. Additionally, our SEO offers a competitive edge, local  <br>
                        outreach, improved user experience, data-driven analytics, and  <br>
                        cost-effective marketing, making it an indispensable component of Royal  <br>
                        RoXn's digital marketing strategy in the real estate industry.</p>
                </div>
            </div>
        </div>

        <div class="row contact-div p-4 my-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/ppc.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">PPC (Pay-Per-Click) <br>Advertising</h3>
                    <p style="opacity: 80%">PPC campaigns allow Royal RoXn to instantly appear at the top of search  <br>
                        engine results and social media platforms. It allows the company to  <br>
                        control its budget, precisely target its audience, and test different ad  <br>
                        variations. Detailed analytics provide insights for optimization. The  <br>
                        geographic reach of PPC is valuable in the real estate industry, and it  <br>
                        provides a competitive advantage</p>
                </div>
            </div>
        </div>
    </div>


@endsection
