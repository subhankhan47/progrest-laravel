<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Progrest</title>
</head>
<body>

<!-- Main Div -->
<div class="main-div">
    <!-- Nav bar -->
    @include('partials.navbar')
    <!-- Center Content -->
    @yield('content')
    <!-- Footer -->
    @include('partials.footer')
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->

<script>
    const cards = document.querySelectorAll('.card');
    function animateCards() {
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            const screenHeight = window.innerHeight;
            if (rect.top < screenHeight && rect.bottom >= 0) {
                if (!card.classList.contains('animated')) {
                    card.classList.add('animated');
                    setTimeout(() => {
                        card.classList.remove('animated');
                    }, 5000);
                }
            }
        });
    }

    window.addEventListener('scroll', animateCards);
    animateCards();
</script>

</body>
</html>
