@extends('layout')

@section('title', 'Home')

@section('content')

    <!--About Banner Text-->
    <div class="about-banner">
        <div class="text-center py-5">
            <div class="py-5 text-white">
                <h3 class="py-5">Blogs</h3>
            </div>
        </div>
    </div>


    <!-- Centralized container section -->
    <div class="section-details container p-2">

        <div class="row py-3 px-4 text-left text-white my-3">
            <h4 class="text-white">Recent blog posts</h4>
            <!-- Recent Blog Section -->
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                    <div class="">
                        <img src="{{ asset('images/blogPost1.png') }}" class="img-fluid">
                        <div class="my-2">
                            <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                            <h4>UX review presentations</h4>
                        </div>
                        <p style="opacity: 70%;">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
                        <div class="d-flex">
                            <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Design</button>
                            <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                            <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">Presentation</button>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-2">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ asset('images/blogPost2.png') }}" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="my-2">
                            <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                            <h4>Migrating to Linear 101</h4>
                        </div>
                        <p style="opacity: 70%;">Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get...</p>
                        <div class="d-flex">
                            <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Design</button>
                            <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ asset('images/blogPost3.png') }}" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="my-2">
                            <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                            <h4>Building your API Stack</h4>
                        </div>
                        <p style="opacity: 70%;">The rise of RESTful APIs has been met by a rise in tools for creating, testing, and manag...</p>
                        <div class="d-flex">
                            <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Design</button>
                            <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('images/blogPost4.png') }}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>Grid system for better Design User Interface</h4>
                </div>
                <p style="opacity: 70%;">A grid system is a design tool used to arrange content on a webpage. It is a series of vertical and horizontal lines that create a matrix of intersecting points, which can be used to align and organize page elements. Grid systems are used to create a consistent look and feel across a website, and can help to make the layout more visually appealing and easier to navigate.</p>
                <div class="d-flex">
                    <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Design</button>
                    <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Interface</button>
                </div>
            </div>
        </div>

        <div class="row my-5 text-white">
            <h4 class="text-white">All blog posts</h4>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                    <img src="{{ asset('images/blogPost5.png') }}" class="img-fluid">
                    <div class="my-2">
                        <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                        <h4>Bill Walsh leadership lessons</h4>
                    </div>
                    <p style="opacity: 70%;">Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning Dynasty?</p>
                    <div class="d-flex">
                        <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Leadership</button>
                        <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Management</button>
                        <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">Presentation</button>
                    </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                    <img src="{{ asset('images/blogPost6.png') }}" class="img-fluid">
                    <div class="my-2">
                        <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                        <h4>PM mental models</h4>
                    </div>
                    <p style="opacity: 70%;">Mental models are simple expressions of complex processes or relationships.</p>
                    <div class="d-flex">
                        <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Product</button>
                        <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                        <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">Frameworks</button>
                    </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                    <img src="{{ asset('images/blogPost7.png') }}" class="img-fluid">
                    <div class="my-2">
                        <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                        <h4>What is Wireframing?</h4>
                    </div>
                    <p style="opacity: 70%;">Introduction to Wireframing and its Principles. Learn from the best in the industry.</p>
                    <div class="d-flex">
                        <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Design</button>
                        <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                        <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">Presentation</button>
                    </div>
            </div>

            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                <img src="{{ asset('images/blogPost8.png') }}" class="img-fluid">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>How collaboration makes us better designers</h4>
                </div>
                <p style="opacity: 70%;">Collaboration can make our teams stronger, and our individual designs better.</p>
                <div class="d-flex">
                    <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Design</button>
                    <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                    <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">Presentation</button>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                <img src="{{ asset('images/blogPost9.png') }}" class="img-fluid">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>Our top 10 Javascript frameworks to use</h4>
                </div>
                <p style="opacity: 70%;">JavaScript frameworks make development easy with extensive features and functionalities.</p>
                <div class="d-flex">
                    <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Software Development</button>
                    <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Tools</button>
                    <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">SaaS</button>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                <img src="{{ asset('images/blogPost10.png') }}" class="img-fluid">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>Podcast: Creating a better CX Community</h4>
                </div>
                <p style="opacity: 70%;">Starting a community doesn’t need to be complicated, but how do you get started?</p>
                <div class="d-flex">
                    <button class="btn blog-button px-3 bg-white" style="color: #6941C6;" type="button">Podcasts</button>
                    <button class="btn blog-button px-3 bg-white mx-2" style="color:#3538CD" type="button">Customer Success</button>
                    <button class="btn blog-button px-3 bg-white" style="color: #C11574;" type="button">Presentation</button>
                </div>
            </div>
        </div>

    </div>
@endsection
