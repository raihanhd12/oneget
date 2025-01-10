<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title', 'Untitled')</title>
    <link rel="icon" href="{{ asset('assets/home/images/White Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/login_register.css') }}">
</head>

<body style="margin: 0px;padding: 0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left"
                style="background: var(--Background, linear-gradient(216deg, rgba(101, 110, 234, 0.15) 34.86%, rgba(60, 199, 244, 0.15) 69.5%));padding-bottom: 0px;">
                <div class="carousel slide d-block" data-bs-ride="carousel" data-bs-interval="4000"
                    data-bs-pause="hover" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="img-fluid w-100 d-block"
                                data-bss-hover-animate="pulse" src="{{ asset('assets/auth/images/slide_1.svg') }}"
                                alt="Slide Image">
                            <h1 class="__carrousel-h1"><strong>Pahami Data Anda di Seluruh Platform Sosial
                                    Media</strong></h1>
                            <p class="__carousel-paragraph">Platform kami menyajikan solusi analisis data sosial media
                                terintegrasi untuk membantu Anda memahami, mengukur, dan mengoptimalkan kehadiran online
                                Anda.</p>
                        </div>
                        <div class="carousel-item"><img class="img-fluid w-100 d-block" data-bss-hover-animate="pulse"
                                src="{{ asset('assets/auth/images/slide_2.svg') }}" alt="Slide Image">
                            <h1 class="__carrousel-h1"><strong>Sosial Media yang Terpadu Hanya Dalam Hitungan
                                    Detik</strong></h1>
                            <p class="__carousel-paragraph">Maksimalkan kehadiran Anda di dunia digital dengan
                                mengintegrasikan semua akun media sosial dalam satu platform yang efisien dan mudah
                                digunakan.</p>
                        </div>
                        <div class="carousel-item"><img class="img-fluid w-100 d-block" data-bss-hover-animate="pulse"
                                src="{{ asset('assets/auth/images/slide_3.svg') }}" alt="Slide Image">
                            <h1 class="__carrousel-h1-slide3"><strong>Optimalkan Strategi Sosial Media dengan Laporan
                                    Terperinci</strong></h1>
                            <p class="__carousel-paragraph-slide3">Anda dapat sepenuhnya mengkustomisasi laporan Anda, memilih
                                dari beragam filter dan opsi yang tersedia untuk memastikan laporan sesuai dengan
                                kebutuhan Anda.</p>
                        </div>
                    </div>
                    <div class="carousel-indicator-box">
                        <div class="carousel-indicators">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="__custom-indicator @if ($i === 0) active @endif"></div>
                            @endfor
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 __col-right">
                @if ($errors->any())
                    <div class="alert alert-danger ">
                        @foreach ($errors->all() as $item)
                            {{ $item }}
                        @endforeach
                    </div>
                @endif
                @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show ">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/auth/js/bs-init.js') }}"></script>
</body>

</html>
