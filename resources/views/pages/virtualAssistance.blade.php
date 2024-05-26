@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Contact Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Elevating Your Business with Online Employees and Virtual Assistants</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row contact-div p-4 my-2">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/employeeServices.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Online Employee Services</h3>
                    <p style="opacity: 80%">Explore the benefits of Strong Hold Listing Online Employee Services, offering  <br>
                        diverse skill sets across various domains. These dedicated professionals  <br>
                        work remotely, providing flexibility and accessibility across different  <br>
                        time zones. Experience cost-efficiency without the overhead of  <br>
                        traditional hiring, and seamlessly scale your workforce as your business  <br>
                        demands change. Your success knows no boundaries with our exceptional  offering.</p>
                </div>
            </div>
        </div>

        <div class="row contact-div p-4 my-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/assistantServices.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="my-5 px-3 remove-margin">
                    <h3 class="my-3">Virtual Assistant Services</h3>
                    <p style="opacity: 80%">Strong Hold Listing Virtual Assistant Services offer professional support,  <br>
                        cost-efficiency, and flexibility. Our seasoned virtual assistants handle  <br>
                        a range of tasks, adapting to your evolving needs on a part-time,  <br>
                        full-time, or project basis. This enhanced productivity solution  <br>
                        empowers your business with a competitive edge in the digital realm,  <br>
                        reducing costs and streamlining operations. Tailored to meet your unique  <br>
                        requirements, our services transcend time zones and geographic  <br>
                        boundaries, ensuring global reach. Elevate your business with <br>
                        Strong Hold Listing and embark on a journey of digital excellence. <br>
                        Your success is our  mission.</p>
                </div>
            </div>
        </div>

    </div>


@endsection
