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
                            <h4>Top Home Staging Tips for a Quick Sale</h4>
                        </div>
                        <p style="opacity: 70%;">Discover effective home staging techniques to make your property stand out and sell faster.</p>
                        <div class="d-flex changeToDisplayBlock">
                            <button class="btn blog-button px-3 my-1 bg-white" style="color: #6941C6;" type="button">Design</button>
                            <button class="btn blog-button px-3 my-1 bg-white mx-2" style="color:#3538CD" type="button">Research</button>
                            <button class="btn blog-button px-3 my-1 bg-white" style="color: #C11574;" type="button">Presentation</button>
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
                            <h4>Navigating the First-Time Home Buying Process</h4>
                        </div>
                        <p style="opacity: 70%;">A comprehensive guide to help first-time buyers understand the steps and make informed decisions.</p>
                        <div class="d-flex changeToDisplayBlock">
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
                            <h4>Market Trends: What's Hot in Real Estate Right Now</h4>
                        </div>
                        <p style="opacity: 70%;">Stay updated with the latest real estate trends and insights to make smart buying and selling decisions.</p>
                        <div class="d-flex changeToDisplayBlock">
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
                    <h4>The Ultimate Checklist for Moving Day</h4>
                </div>
                <p style="opacity: 70%;">Ensure a smooth and stress-free move with our detailed moving day checklist.</p>
                <div class="d-flex changeToDisplayBlock">
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
                        <h4>How to Boost Your Home's Curb Appeal</h4>
                    </div>
                    <p style="opacity: 70%;">Learn simple yet effective ways to enhance your home's exterior and attract more buyers.</p>
                    <div class="d-flex changeToDisplayBlock">
                        <button class="btn blog-button px-3 bg-white my-1" style="color: #6941C6;" type="button">Leadership</button>
                        <button class="btn blog-button px-3 bg-white mx-2 my-1" style="color:#3538CD" type="button">Management</button>
                        <button class="btn blog-button px-3 bg-white my-1" style="color: #C11574;" type="button">Presentation</button>
                    </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                    <img src="{{ asset('images/blogPost6.png') }}" class="img-fluid">
                    <div class="my-2">
                        <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                        <h4>Understanding Mortgage Rates: What You Need to Know</h4>
                    </div>
                    <p style="opacity: 70%;">Get to grips with mortgage rates and how they impact your home buying journey.</p>
                    <div class="d-flex changeToDisplayBlock">
                        <button class="btn blog-button px-3 bg-white my-1" style="color: #6941C6;" type="button">Product</button>
                        <button class="btn blog-button px-3 bg-white mx-2 my-1" style="color:#3538CD" type="button">Research</button>
                        <button class="btn blog-button px-3 bg-white my-1" style="color: #C11574;" type="button">Frameworks</button>
                    </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                    <img src="{{ asset('images/blogPost7.png') }}" class="img-fluid">
                    <div class="my-2">
                        <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                        <h4>The Benefits of Working with a Real Estate Agent</h4>
                    </div>
                    <p style="opacity: 70%;">Explore the advantages of hiring a professional realtor for your buying or selling needs.</p>
                    <div class="d-flex changeToDisplayBlock">
                        <button class="btn blog-button px-3 bg-white my-1" style="color: #6941C6;" type="button">Design</button>
                        <button class="btn blog-button px-3 bg-white mx-2 my-1" style="color:#3538CD" type="button">Research</button>
                        <button class="btn blog-button px-3 bg-white my-1" style="color: #C11574;" type="button">Presentation</button>
                    </div>
            </div>

            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                <img src="{{ asset('images/blogPost8.png') }}" class="img-fluid">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>Investment Properties: What You Should Know Before Buying</h4>
                </div>
                <p style="opacity: 70%;">Key considerations and tips for investing in real estate properties.</p>
                <div class="d-flex changeToDisplayBlock">
                    <button class="btn blog-button px-3 bg-white my-1" style="color: #6941C6;" type="button">Design</button>
                    <button class="btn blog-button px-3 bg-white mx-2 my-1" style="color:#3538CD" type="button">Research</button>
                    <button class="btn blog-button px-3 bg-white my-1" style="color: #C11574;" type="button">Presentation</button>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                <img src="{{ asset('images/blogPost9.png') }}" class="img-fluid">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>Renovations That Add Value to Your Home</h4>
                </div>
                <p style="opacity: 70%;">Identify home improvement projects that offer the best return on investment</p>
                <div class="d-flex changeToDisplayBlock">
                    <button class="btn blog-button px-3 bg-white my-1" style="color: #6941C6;" type="button">Software Development</button>
                    <button class="btn blog-button px-3 bg-white mx-2 my-1" style="color:#3538CD" type="button">Tools</button>
                    <button class="btn blog-button px-3 bg-white my-1" style="color: #C11574;" type="button">SaaS</button>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-3">
                <img src="{{ asset('images/blogPost10.png') }}" class="img-fluid">
                <div class="my-2">
                    <h6 class="text-primary">Sunday, 1 Jan 2023</h6>
                    <h4>Common Home Selling Mistakes and How to Avoid Them</h4>
                </div>
                <p style="opacity: 70%;">Learn about frequent pitfalls in the home selling process and strategies to steer clear of them</p>
                <div class="d-flex changeToDisplayBlock">
                    <button class="btn blog-button px-3 bg-white my-1" style="color: #6941C6;" type="button">Podcasts</button>
                    <button class="btn blog-button px-3 bg-white mx-2 my-1" style="color:#3538CD" type="button">Customer Success</button>
                    <button class="btn blog-button px-3 bg-white my-1" style="color: #C11574;" type="button">Presentation</button>
                </div>
            </div>
        </div>

    </div>
@endsection
