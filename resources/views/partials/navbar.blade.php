<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" class="img-fluid"></a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#qualityServices">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#Pricing">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/faq') }}">FAQ's</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlock" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownBlock">
                        <a class="dropdown-item" href="{{ url('/onlineMarketing') }}">Online Marketing</a>
                        <a class="dropdown-item" href="{{ url('/training') }}">Training workshops</a>
                        <a class="dropdown-item" href="{{ url('/virtualAssistance') }}">Online employees and <br>Virtual Assistants</a>
                        <a class="dropdown-item" href="{{ url('/webDevelopment') }}">Web Development</a>
                        <a class="dropdown-item" href="{{ url('/mobileDevelopment') }}">Mobile Development</a>
                    </div>
                </li>
            </ul>
            <a class="nav-link" href="{{ url('/contact') }}"> <button class="btn btn-get-started" type="button" >Get Started</button></a>
        </div>
    </div>
</nav>
