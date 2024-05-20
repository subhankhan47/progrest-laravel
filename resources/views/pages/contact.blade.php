@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Contact Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Contact us</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row contact-div p-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3" style="background: #333333;">
                <div class="my-3">
                    <h4>Contact Information</h4>
                    <p style="opacity: 80%">Say something to start a live chat!</p>
                </div>

                <div class="my-4">
                    <div><img src="{{ asset('images/phone.png') }}" class="img-fluid my-2"><span class="mx-3">+1012 3456 789</span></div>
                    <div><img src="{{ asset('images/email.png') }}" class="img-fluid my-2"><span class="mx-3">demo@gmail.com</span></div>
                    <div><img src="{{ asset('images/location.png') }}" class="img-fluid my-2"><span class="mx-3">132 Dartmouth Street Boston,<br>
                        Massachusetts 02156 United States</span></div>
                </div>
                <div class="my-3">
                    <img src="{{ asset('images/dot.png') }}" class="img-fluid">
                    <img src="{{ asset('images/dot.png') }}" class="img-fluid mx-3">
                    <img src="{{ asset('images/dot.png') }}" class="img-fluid">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12  text-white  p-3">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="/contact" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-2"><label>First Name</label><br><input type="text" name="fName" placeholder="John" required/></div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-2"><label>Last Name</label><br><input type="text" name="lName" placeholder="Doe" required/></div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-2"><label>Email</label><br><input type="email" name="email" placeholder="john@gmail.com" required/></div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-2"><label>Phone Number</label><br><input type="text" name="number" placeholder="+1 012 123456788" required/></div>
                        </div>

                        <div class="my-2 ">
                            <p>Select Subject</p>
                            <div class="d-flex changeToDisplayBlock">
                                  <input type="radio" id="GeneralInquiry" name="fav_language" value="GeneralInquiry" checked class="w-auto">
                                  <label for="html">General Inquiry</label>
                                <input type="radio" id="GeneralInquiry" name="fav_language" value="GeneralInquiry" class="w-auto mx-2">
                                  <label for="html">General Inquiry</label>
                                <input type="radio" id="GeneralInquiry" name="fav_language" value="GeneralInquiry" class="w-auto mx-2">
                                  <label for="html">General Inquiry</label>
                                <input type="radio" id="GeneralInquiry" name="fav_language" value="GeneralInquiry" class="w-auto mx-2">
                                  <label for="html">General Inquiry</label><br>
                            </div>
                        </div>

                        <div class="my-2">
                            <p>Message</p>
                            <textarea name="message" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="my-2 text-end">
                            <button class="btn btn text-end text-dark bg-white" type="submit">Send Message</button>
                        </div>

                    </form>
            </div>
        </div>

    </div>


@endsection
