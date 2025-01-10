<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/user') }}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/home/images/White Logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/css/pages/page-misc.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('assets/user/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/user/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <!-- Error -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">@yield('code') Page @yield('message') :(</h2>
        <p class="mb-4 mx-2">Oops! 😖 The requested URL was @yield('message') on this server.</p>
        <a href="/" class="btn btn-primary">Back to home</a>
            <div class="mt-3">
                @php
                    $code = trim(View::yieldContent('code'));
                    $imagePath = "assets/user/img/illustrations/{$code}.png";
                    $darkImagePath = "assets/user/img/illustrations/{$code}-dark.png";
                    $lightImagePath = "assets/user/img/illustrations/{$code}-light.png";
                @endphp
                <img src="{{ asset($imagePath) }}" alt="Oneget" width="500" class="img-fluid" data-app-dark-img="{{ asset($darkImagePath) }}" data-app-light-img="{{ asset($lightImagePath) }}" />
            </div>
      </div>
    </div>
    <!-- /Error -->

    <!-- / Content -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >FAQ</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/user/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/user/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
