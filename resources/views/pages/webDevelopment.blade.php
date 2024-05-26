@extends('layout')

@section('title', 'Home')

@section('content')

    <!--Contact Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Web Development</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2 my-5">
        <!-- Journey section -->
        <div class="row p-4 my-2">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3">
                <div class="my-3">
                    <img class="img-fluid" src="{{ asset('images/web1.png') }}">
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="px-3 remove-margin">
                    <h3 class="my-3">The Role of a Website Development Company</h3>
                    <p style="opacity: 80%">In  2021, e-commerce startup companies valued at one billion U.S. dollars  <br>
                        or more – which grants them ‘unicorn’ status – made up an industry of  <br>
                        almost 114 billion U.S. dollars. The  Web development companies create and manage websites for clients.<br>
                        They offer services such as design, content, security, and optimization. They  <br>
                        use technologies such as HTML, CSS, JavaScript, PHP, Apps, and others. <br>
                        They also use terms such as SEO, UX, UI, API, and CMS.<br><br>
                        Contact us now if you are looking for a website development company.</p>
                </div>
            </div>
        </div>

        <div class="row p-4 my-4">
            <div class="col-12 col-lg-5 col-md-5 col-sm-12 text-white p-3 my-5 remove-margin">
                <div class="my-5 remove-margin">
                    <h3 class="my-3">Understanding the Web Development Company</h3>
                    <p style="opacity: 80%"> We at Alright Tech is a team of professionals with diverse expertise in<br>
                        web design, front-end, and back-end development, database management, and<br>
                        more. We collaborate to create websites and web applications tailored to<br>
                        meet the specific needs of our clients. From small businesses to large<br>
                        corporations we cater to a wide range of clients, each with unique goals<br>
                        and requirements. Here are the services we can help you with in website development.<br>
                        - Custom Website Development<br>
                        - Frontend / Backend development<br>
                        - UI / UX Design<br>
                        - Maintenance Services </p>
                </div>
            </div>

            <div class="col-12 col-lg-7 col-md-7 col-sm-12 my-5 remove-margin text-white p-3">
                <div class="px-3 remove-margin">
                    <img class="img-fluid" src="{{ asset('images/web2.png') }}">
                </div>
            </div>
        </div>

    </div>


@endsection
