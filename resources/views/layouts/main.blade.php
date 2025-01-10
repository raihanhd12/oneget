<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/home/images/White Logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>@yield('title', 'Untitled')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/home/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/home.css') }}">
    @yield('css')

</head>

<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Include header -->
    @include('home.header')

    <!-- Konten dari halaman akan dimasukkan di sini -->
    @yield('content')

    <!-- Include footer -->
    @include('home.footer')

    <script src="{{ asset('assets/home/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/home/js/animation.js') }}"></script>
    <script src="{{ asset('assets/home/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/home/js/popup.js') }}"></script>
    <script src="{{ asset('assets/home/js/custom.js') }}"></script>
</body>

</html>
