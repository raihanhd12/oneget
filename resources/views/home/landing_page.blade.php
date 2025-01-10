@extends('layouts.main')

@section('title', 'ONEGET | Landing Page')

@section('content')

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Satukan Semua Jejak Digital Anda dalam Satu Platform!</h2>
                                        <p>Hubungkan seluruh akun media sosial Anda, nikmati kemudahan, dan biarkan
                                            pesona beraksi. </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="{{ route('auth') }}">Coba Gratis</a>
                                        </div>
                                        <div class="white-button scroll-to-section">
                                            <a href="{{ route('howitwork') }}">Pelajari Lebih Lanjut </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('assets/home/images/slider-dec.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Fitur Terbaik Kami <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                viewBox="0 0 56 56" fill="none">
                                <path
                                    d="M24.0503 16.8465C25.5485 13.1115 26.2976 11.2441 27.5146 10.9852C27.8346 10.9172 28.1653 10.9172 28.4853 10.9852C29.7024 11.2441 30.4514 13.1115 31.9496 16.8465C32.8016 18.9705 33.2276 20.0325 34.0247 20.7548C34.2483 20.9574 34.491 21.1378 34.7494 21.2936C35.6707 21.8488 36.8207 21.9518 39.1209 22.1578C43.0147 22.5066 44.9616 22.6809 45.5561 23.791C45.6792 24.0209 45.763 24.2698 45.8038 24.5274C46.0009 25.7711 44.5696 27.0733 41.7071 29.6776L40.9122 30.4007C39.574 31.6183 38.9048 32.2271 38.5178 32.9868C38.2856 33.4426 38.1299 33.9334 38.057 34.4396C37.9354 35.2835 38.1313 36.1667 38.5232 37.933L38.6633 38.5641C39.366 41.7316 39.7174 43.3154 39.2788 44.0939C38.8848 44.7932 38.159 45.2409 37.3573 45.2792C36.4647 45.3218 35.2071 44.297 32.6918 42.2474C31.0346 40.8971 30.2061 40.2219 29.2862 39.9581C28.4457 39.7171 27.5543 39.7171 26.7137 39.9581C25.7939 40.2219 24.9653 40.8971 23.3081 42.2474C20.7929 44.297 19.5352 45.3218 18.6427 45.2792C17.8409 45.2409 17.1152 44.7932 16.7212 44.0939C16.2825 43.3154 16.6339 41.7316 17.3367 38.5641L17.4767 37.933C17.8686 36.1667 18.0645 35.2835 17.9429 34.4396C17.87 33.9334 17.7143 33.4426 17.4822 32.9868C17.0951 32.2271 16.426 31.6183 15.0877 30.4007L14.2928 29.6776C11.4303 27.0733 9.99906 25.7711 10.1962 24.5274C10.237 24.2698 10.3207 24.0209 10.4438 23.791C11.0384 22.6809 12.9853 22.5066 16.879 22.1578C19.1792 21.9518 20.3293 21.8488 21.2506 21.2936C21.509 21.1378 21.7517 20.9574 21.9753 20.7548C22.7723 20.0325 23.1983 18.9705 24.0503 16.8465Z"
                                    fill="url(#paint0_linear_728_169)" stroke="url(#paint1_linear_728_169)"
                                    stroke-width="2" />
                                <defs>
                                    <linearGradient id="paint0_linear_728_169" x1="45.8217" y1="10.9342" x2="8.67013"
                                        y2="12.8677" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#656EEA" />
                                        <stop offset="1" stop-color="#3CC7F4" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_728_169" x1="45.8217" y1="10.9342" x2="8.67013"
                                        y2="12.8677" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#656EEA" />
                                        <stop offset="1" stop-color="#3CC7F4" />
                                    </linearGradient>
                                </defs>
                            </svg></h4>
                        <img src="{{ asset('assets/home/images/heading-line-dec.png') }}" alt="">
                        <p class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Temukan bagaimana
                            setiap fitur kami dirancang untuk memudahkan dan meningkatkan pengalaman
                            Anda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item first-service wow lightSpeedIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="icon"></div>
                        <h5 class="h5-first">Analisis Instan</h5>
                        <p>Analitik instan mengubah data menjadi keputusan dalam sekejap, memberi kendali penuh atas
                            strategi Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item second-service wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="icon"></div>
                        <h5 class="h5-second">Expert Reporting</h5>
                        <p>Tampilkan kinerja dengan kejelasan yang memukau, mengungkap peluang pertumbuhan yang tak
                            terbatas.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item third-service wow lightSpeedIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                        <div class="icon"></div>
                        <h5 class="h5-third">Ide Generator</h5>
                        <p>Jelajahi ide-ide kreatif dengan lancar melalui fitur generator untuk meningkatkan kualitas
                            konten Anda</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="content" class="content-tables">
        <div class="container analisis-instan">
            <div class="row">
                <section class="py-lg-16 py-8">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center analisis-instan">
                            <!-- col -->
                            <div class="col-lg-6 mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="position-relative-analisis-instan wow fadeInLeft" data-wow-duration="1"
                                    data-wow-delay="1">
                                    <img src="{{ asset('assets/home/images/analisis-instan.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center py-5">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1"
                                    data-wow-delay="0.5s">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <!-- heading -->
                                    <h5 class=" mb-4">ANALISIS INSTAN</h5>
                                    <!-- heading -->
                                    <h1 class="pe-lg-10 mb-3">
                                        Lihat Bagaimana Konten Anda Terperforma</h1>
                                    <!-- para -->
                                    <p class="pe-lg-10 mb-5">Mempermudah analisis data sehingga bisa mengeksplorasi
                                        wawasan penting dengan lebih lancar.</p>
                                    <!-- btn -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h2>80<span>%</span></h2>
                                            <p>Kepuasan pengguna</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h2>+25<span>%</span></h2>
                                            <p>Peningkatan produktivitas</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h2>500,000</h2>
                                            <p>Jumlah Pengguna Aktif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <div id="content" class="content-tables">
        <div class="container export-mudah">
            <div class="row">
                <section class="py-lg-16 py-8">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center">

                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center py-5">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1"
                                    data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <!-- heading -->
                                    <h5 class=" mb-4">EXPORT DENGAN MUDAH</h5>
                                    <!-- heading -->
                                    <h1 class="pe-lg-10 mb-3">
                                        Dapatkan Laporan Sosial Media yang Akurat</h1>
                                    <!-- para -->
                                    <p class="pe-lg-10 mb-5">Raih keunggulan bersaing dengan informasi yang akurat
                                        tentang performa media sosial Anda.</p>
                                    <!-- btn -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18.5" cy="18.5" r="18.5" fill="#3CC7F4" />
                                                <g clip-path="url(#clip0_1229_3404)">
                                                    <path
                                                        d="M24 24.292V13.6938H26.9917L23.5957 10.3C23.4022 10.1069 23.1401 9.99847 22.8667 9.99847C22.5934 9.99847 22.3312 10.1069 22.1377 10.3L18.7417 13.6938H21.75V24.292H18.72L22.1295 27.697C22.2255 27.7931 22.3396 27.8694 22.4651 27.9214C22.5906 27.9735 22.7252 28.0002 22.8611 28.0002C22.997 28.0002 23.1315 27.9735 23.2571 27.9214C23.3826 27.8694 23.4967 27.7931 23.5927 27.697L27 24.292H24Z"
                                                        fill="white" />
                                                    <path
                                                        d="M9 12.25V18.25H17.25V10H11.25C10.6533 10 10.081 10.2371 9.65901 10.659C9.23705 11.081 9 11.6533 9 12.25V12.25ZM11.25 12.25H15V16H11.25V12.25Z"
                                                        fill="white" />
                                                    <path
                                                        d="M9 25.75C9 26.3467 9.23705 26.919 9.65901 27.341C10.081 27.7629 10.6533 28 11.25 28H17.25V19.75H9V25.75ZM11.25 22H15V25.75H11.25V22Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1229_3404">
                                                        <rect width="18" height="18" fill="white"
                                                            transform="translate(9 10)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <div class="content">
                                                <h2>Mudah Difilter</h2>
                                                <p>Laporan media sosial Anda bisa difilter sesuai keinginan.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18.5" cy="18.5" r="18.5" fill="#3CC7F4" />
                                                <g clip-path="url(#clip0_1229_3405)">
                                                    <path
                                                        d="M16.9065 13.2413L16.9237 24.2505H19.1737L19.1565 13.2548L21.2295 15.3255L22.8202 13.734L19.881 10.797C19.6372 10.5532 19.3479 10.3599 19.0294 10.2279C18.7109 10.096 18.3695 10.0281 18.0247 10.0281C17.68 10.0281 17.3386 10.096 17.0201 10.2279C16.7016 10.3599 16.4123 10.5532 16.1685 10.797L13.2292 13.7363L14.82 15.3255L16.9065 13.2413Z"
                                                        fill="white" />
                                                    <path
                                                        d="M24.75 21.9995V25.7495H11.25V21.9995H9V25.7495C9 26.3462 9.23705 26.9185 9.65901 27.3405C10.081 27.7624 10.6533 27.9995 11.25 27.9995H24.75C25.3467 27.9995 25.919 27.7624 26.341 27.3405C26.7629 26.9185 27 26.3462 27 25.7495V21.9995H24.75Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1229_3405">
                                                        <rect width="18" height="18" fill="white"
                                                            transform="translate(9 10)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <div class="content">
                                                <h2>Mudah Diunduh</h2>
                                                <p>Akun media sosial Anda bisa diunduh dengan mudah.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- col -->
                            <div class="col-lg-6 mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="position-relative-export-mudah wow fadeInLeft" data-wow-duration="1"
                                    data-wow-delay="1">
                                    <img src="{{ asset('assets/home/images/analisis-instan.png') }}" alt=""
                                        class="">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <div id="content" class="content-tables">
        <div class="container ide-generator">
            <div class="row">
                <section class="py-lg-16 py-8">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center ide-generator">
                            <!-- col -->
                            <div class="col-lg-6 mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="position-relative-ide-generator wow fadeInLeft" data-wow-duration="1"
                                    data-wow-delay="1">
                                    <img src="{{ asset('assets/home/images/analisis-instan.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center py-5">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1"
                                    data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <!-- heading -->
                                    <h5 class=" mb-4">IDE GENERATOR</h5>
                                    <!-- heading -->
                                    <h1 class="pe-lg-10 mb-3">
                                        Ide Brilian dengan Generator Terpadu</h1>
                                    <!-- para -->
                                    <p class="pe-lg-10 mb-5">Temukan ide kreatif yang sempurna untuk semua platform
                                        media sosial Anda dalam hitungan detik.</p>
                                    <!-- btn -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>90+</h2>
                                            <p>Berbagai Macam Tema</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>1,000,000+</h2>
                                            <p>Jumlah Kata Kunci Tersimpan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <div id="content" class="content-tables">
        <div class="container integrasi">
            <div class="row">
                <section class="py-lg-16 py-8">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center">

                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center py-5">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1" data-wow-delay="1">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <!-- heading -->
                                    <h5 class=" mb-4">INTEGRASI</h5>
                                    <!-- heading -->
                                    <h1 class="pe-lg-10 mb-3">
                                        Integrasi dengan Sosial Media Favoritmu</h1>
                                    <!-- para -->
                                    <p class="pe-lg-10 mb-5">Manfaatkan analitik dari media sosial favoritmu untuk
                                        mengoptimalkan peforma konten.</p>
                                    <!-- btn -->
                                </div>
                            </div>

                            <!-- col -->
                            <div class="col-lg-6 mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="position-relative-integrasi wow fadeInLeft" data-wow-duration="1"
                                    data-wow-delay="0.5">
                                    <div class="box-left">
                                        <img src="{{ asset('assets/home/images/tiktok-logo.png') }}" alt="">
                                        <div class="text-container">
                                            <h2>TikTok</h2>
                                            <h6>Kembangkan wawasan dengan integrasi TikTok yang dinamis.</h6>
                                        </div>
                                    </div>

                                    <div class="box-right">
                                        <div class="box-top">
                                            <img src="{{ asset('assets/home/images/logo-ig.png') }}" alt="">
                                            <div class="text-container mx-4">
                                                <h3>Instagram</h3>
                                                <h4>Kekuatan pemantauan dengan Instagram terintegrasi.</h4>
                                            </div>
                                        </div>


                                        <div class="box-bottom">
                                            <img src="{{ asset('assets/home/images/logo-fb.png') }}" alt="">
                                            <div class="text-container mx-4">
                                                <h3>Facebook</h3>
                                                <h4>Sambungkan Facebook untuk pemantauan efisien.</h4>
                                            </div>
                                        </div> <!-- Kotak bawah -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <div id="content" class="content-tables-end">
        <div class="container end">
            <div class="row">
                <h1>Mulai Integrasikan Sosial Media Anda Sekarang dan Nikmati Kemudahan dalam Satu Platform</h1>
                <div class="end-button"><a href="{{ route('auth') }}"> Mulai Sekarang</a></div>
            </div>
        </div>
    </div>

@endsection
