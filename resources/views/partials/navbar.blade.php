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
                    <a class="nav-link" href="{{ url('/about') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/faq') }}">FAQ's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#Pricing">Pricing</a>
                </li>
            </ul>
            <a class="nav-link" href="{{ url('/contact') }}"> <button class="btn btn-get-started" type="button" >Get Started</button></a>
        </div>
    </div>
</nav>
