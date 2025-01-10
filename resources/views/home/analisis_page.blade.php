@extends('layouts.main')

@section('title', 'Analisis Page')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/feature/css/feature.css') }}">
@endsection

@section('content')

    <div class="main-banner wow fadeIn header-text wow" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="title mb-4">
                <h4><span class="black-font">Ketahui</span>
                    <span class="color-font">Lebih Banyak</span>
                    <span class="black-font">dengan</span>
                    <span class="color-font">Analisis Sosial Media</span>
                    <span class="black-font">Terpadu</span>
                </h4>
            </div>
            <div class="desc mb-5">
                <p>Tingkatkan kinerja sosial Anda dengan integrasi terpadu & analisis yang mendalam. Mulailah sekarang!</p>
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
                <img src="{{ asset('assets/feature/img/analisis-feature.png') }}" alt="">
            </div>
        </div>
        <div class="caption mb-5">
            <div class="title mb-4">
                <h2>Temukan Insight Mendalam dari Berbagai Platform Sosial Media</h2>
            </div>
            <div class="desc">
                <p>Pantau pertumbuhan dan interaksi dengan statistik yang dapat disesuaikan sesuai kebutuhan Anda.</p>
            </div>
        </div>
        <div class="row sosmed justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-12 icon-social m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <img src="{{ asset('assets/feature/img/icon-tiktok.svg') }}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 con-count m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <div class="row align-items-end">
                    <div class="col pe-0">
                        <div class="count-icon mb-2 d-flex align-items-center">
                            <img src="{{ asset('assets/feature/img/icon-peng.svg') }}" alt="">
                            <h6>Pengikut</h6>
                        </div>
                        <h4>19.087</h4>
                        <div class="count-desc d-flex align-items-end justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('assets/feature/img/small-up.svg') }}" alt="">
                                <h5> &nbsp;3.7%&nbsp;</h5>
                                <h6>dari 5 hari terakhir</h6>
                            </div>
                            <div class="up p-0">
                                <img src="{{ asset('assets/feature/img/up.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 icon-social m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <img src="{{ asset('assets/feature/img/logo-ig.svg') }}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 con-count m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <div class="row align-items-end">
                    <div class="col pe-0">
                        <div class="count-icon mb-2 d-flex align-items-center">
                            <img src="{{ asset('assets/feature/img/icon-suka.svg') }}" alt="">
                            <h6>Suka</h6>
                        </div>
                        <h4>35.890</h4>
                        <div class="count-desc d-flex align-items-end justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('assets/feature/img/small-up.svg') }}" alt="">
                                <h5> &nbsp;2.8%&nbsp;</h5>
                                <h6>dari 5 hari terakhir</h6>
                            </div>
                            <div class="up p-0">
                                <img src="{{ asset('assets/feature/img/up.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12 icon-social m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <img src="{{ asset('assets/feature/img/logo-fb.svg') }}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 con-count m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <div class="row align-items-end">
                    <div class="col pe-0">
                        <div class="count-icon mb-2 d-flex align-items-center">
                            <img src="{{ asset('assets/feature/img/icon-play.svg') }}" alt="">
                            <h6>Ditonton</h6>
                        </div>
                        <h4>205.7K</h4>
                        <div class="count-desc d-flex align-items-end justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('assets/feature/img/small-up.svg') }}" alt="">
                                <h5> &nbsp;3.7%&nbsp;</h5>
                                <h6>dari 5 hari terakhir</h6>
                            </div>
                            <div class="up p-0">
                                <img src="{{ asset('assets/feature/img/up.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 con-count m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <div class="row align-items-end">
                    <div class="col pe-0">
                        <div class="count-icon mb-2 d-flex align-items-center">
                            <img src="{{ asset('assets/feature/img/icon-comments.svg') }}" alt="">
                            <h6>Komentar</h6>
                        </div>
                        <h4>15.007</h4>
                        <div class="count-desc d-flex align-items-end justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('assets/feature/img/small-up.svg') }}" alt="">
                                <h5> &nbsp;3.7%&nbsp;</h5>
                                <h6>dari 5 hari terakhir</h6>
                            </div>
                            <div class="up p-0">
                                <img src="{{ asset('assets/feature/img/up.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 con-count m-2 wow fadeInUp" data-wow-duration="1" data-wow-delay="1">
                <div class="row align-items-end">
                    <div class="col pe-0">
                        <div class="count-icon mb-2 d-flex align-items-center">
                            <img src="{{ asset('assets/feature/img/icon-post.svg') }}" alt="">
                            <h6>Postingan</h6>
                        </div>
                        <h4>1.090</h4>
                        <div class="count-desc d-flex align-items-end justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('assets/feature/img/small-down.svg') }}" alt="">
                                <h4> &nbsp;2.8%&nbsp;</h4>
                                <h6>dari 5 hari terakhir</h6>
                            </div>
                            <div class="up p-0">
                                <img src="{{ asset('assets/feature/img/down.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
                                <div class="position-relative wow fadeInRight" data-wow-duration="1"
                                    data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <h1 class="pe-lg-10 mb-3">
                                        <span class="black-font">Lihat Data Sosial Media Anda dalam</span>
                                        <span class="color-font">Grafik Visual</span>
                                        <span class="black-font">yang Elegan</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">
                                        Lihat hasil analisis data dari berbagai platform media sosial dalam satu tampilan
                                        grafik yang jelas dan informatif.</p>
                                    <!-- btn -->
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="image-usage wow fadeInLeft" data-wow-duration="1" data-wow-delay="1">
                                    <img src="{{ asset('assets/feature/img/usage-1.png') }}" alt=""
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
                                    <img src="{{ asset('assets/feature/img/usage-2.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1"
                                    data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <h1 class="pe-lg-10 mb-3">
                                        <span class="black-font">Identifikasi</span>
                                        <span class="color-font">Komentar Positif</span>
                                        <span class="black-font">dan</span>
                                        <span class="color-font">Negatif</span>
                                        <span class="black-font">Secara Otomatis</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">Dengan kemampuan analisis komentar positif dan negatif, Anda dapat
                                        mengukur sejauh mana pesan Anda diterima oleh audiens.
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
