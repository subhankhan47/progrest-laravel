@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Contact Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Mobile Application Development</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row p-4 my-2">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/mobileDev.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="px-3 remove-margin">
                    <h3 class="my-3">Mobile Application Development</h3>
                    <p style="opacity: 80%">Mobile App Development has become integral to modern society and<br>
                        business operations. In this digital era, mobile apps are pivotal in enhancing<br>
                        user experiences, providing convenience, and driving business growth. They have evolved<br>
                        from simple utility tools to complex platforms that cater to various<br>
                        needs. This article delves into<br>
                        the world of mobile app development, exploring <br>
                        its significance, evolution, and impact on today’s interconnected world.<br>
                        Get In touch</p>
                </div>
            </div>
        </div>

        <div class="row p-4 my-2">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="card card-services2 my-2">
                    <div class="card-body text-white">
                        <h3 class="card-title">Android</h3>
                        <p class="card-text">Android is the most widely used mobile operating system in the<br>
                            world, with over 2.5 billion active devices. It is an open-source<br>
                            platform that is based on Linux and developed by Google.<br>
                            Android offers a high degree of customization, flexibility, and<br>
                            compatibility for mobile app developers and users.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="card card-services2 my-2">
                    <div class="card-body text-white">
                        <h3 class="card-title">iOS</h3>
                        <p class="card-text">iOS is the world's second most popular mobile operating system, <br>
                            with over 1 billion active devices. It is a closed-source platform <br>
                            that is developed by Apple and runs exclusively on Apple devices, <br>
                            such as iPhone, iPad, iPod Touch, and Apple Watch. iOS offers a <br>
                            high-quality user experience, performance, and security for mobile <br>
                            app developers and users.
                        </p>
                    </div>
                </div>
            </div>
        </div>



    </div>


@endsection
