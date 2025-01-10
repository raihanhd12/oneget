@extends('layouts.main')

@section('title', 'Analisis Page')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/feature/css/feature.css') }}">
@endsection

@section('content')

    <div class="main-banner wow fadeIn header-text wow" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="title mb-4">
                <h4><span class="black-font">Dengan</span>
                    <span class="color-font">Satu Klik</span><span class="black-font">,</span>
                    <span class="color-font">Unduh Laporan</span>
                    <span class="black-font">Insight dari Semua Platform</span>
                    <span class="color-font">Sosial Media</span>
                </h4>
            </div>
            <div class="desc mb-5">
                <p>Dengan fitur unduh interaktif kami, Anda dapat mengambil insight sosial media Anda dalam sekejap.</p>
            </div>
            <div class="btn-bg">
                <a class="btn" href="#" role="button">Mulai Sekarang</a>
            </div>
        </div>
    </div>
    <div class="container feature">
        <div class="image-banner">
            <div class="sparkling-icon wow zoomIn" data-wow-duration="2" data-wow-delay="2">
                <img src="{{ asset('assets/feature/img/sparkling.svg') }}" alt="">
            </div>
            <div class="col arrow wow zoomIn" data-wow-duration="2" data-wow-delay="2">
                <img src="{{ asset('assets/feature/img/arrow.svg') }}" alt="">
            </div>
            <div class="col cover wow fadeIn" data-wow-duration="2" data-wow-delay="2">
                <img src="{{ asset('assets/feature/img/report-feature.png') }}" alt="">
            </div>
        </div>
    </div>
    <div id="content" class="content-tables-no-margin">
        <div class="container usage-3">
            <div class="row">
                <section class="py-lg-8 py-4">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center row-usage">
                            <!-- col -->
                            <div class="col mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="image-usage wow fadeInLeft" data-wow-duration="1" data-wow-delay="1">
                                    <img src="{{ asset('assets/feature/img/report-usage-1.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1" data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <h1 class="pe-lg-10 mb-3">
                                        <span class="color-font">Unduh</span>
                                        <span class="black-font">Insight Sosial Media Anda dalam</span>
                                        <span class="color-font">Hitungan Detik</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">Kemampuan unduh hasil laporan yang mudah digunakan, memberikan
                                        Anda kontrol penuh untuk analisis yang cepat dan efisien.

                                    </p>
                                    <!-- btn -->
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <div class="icon-arrow d-block position-relative wow zoomIn" data-wow-duration="2" data-wow-delay="2">
        <img src="{{ asset('assets/feature/img/icon-arrow.svg') }}" alt="">
    </div>
    <div id="content" class="content-tables">
        <div class="container usage-1">
            <div class="row">
                <section class="py-lg-16 py-8">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center row-usage">
                            <!-- col -->
                            <div class="col-lg-6 d-flex ms-3 justify-content-center">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1" data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <h1 class="pe-lg-10 mb-3">
                                        <span class="color-font">Ekspor</span>
                                        <span class="black-font">Laporan Sosial Media Anda dalam</span>
                                        <span class="color-font">Berbagai Format</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">
                                        Pilih dari berbagai format ekspor untuk menyajikan hasil analisis sosial media Anda
                                        sesuai dengan kebutuhan Anda.</p>
                                    <!-- btn -->
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="image-usage wow fadeInLeft" data-wow-duration="1" data-wow-delay="1">
                                    <img src="{{ asset('assets/feature/img/report-usage-2.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="icon-arrow-2 d-block position-relative wow zoomIn" data-wow-duration="2" data-wow-delay="2">
        <img src="{{ asset('assets/feature/img/icon-arrow.svg') }}" alt="">
    </div>
    <div id="content" class="content-tables">
        <div class="container usage-2">
            <div class="row">
                <section class="py-lg-16 py-8">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row align-items-center row-usage">
                            <!-- col -->
                            <div class="col mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="image-usage wow fadeInLeft" data-wow-duration="1" data-wow-delay="1">
                                    <img src="{{ asset('assets/feature/img/report-usage-3.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1" data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <h1 class="pe-lg-10 mb-3">
                                        <span class="color-font">Kontrol</span>
                                        <span class="black-font">Hasil Laporan Anda dengan</span>
                                        <span class="color-font">Rentang Tanggal</span>
                                        <span class="black-font">Tertentu</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">Tingkatkan efisiensi Anda dengan interaktivitas. Pilih periode
                                        waktu, unduh hasil laporan, dan terus berinovasi,
                                    </p>
                                    <!-- btn -->
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
