@extends('layouts.main')

@section('title', 'Analisis Page')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/feature/css/feature.css') }}">
@endsection

@section('content')

    <div class="main-banner wow fadeIn header-text wow" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="title mb-4">
                <h4><span class="black-font">Temukan</span>
                    <span class="color-font">Ide Unik</span>
                    <span class="black-font">dan</span>
                    <span class="color-font">Brilian</span>
                    <span class="black-font">dengan Bantuan</span>
                    <span class="color-font">Ide Generator</span>
                    <span class="black-font">yang Cerdas</span>
                </h4>
            </div>
            <div class="desc mb-5">
                <p>Jelajahi beragam ide yang tak terbatas untuk proyek Anda, dengan fitur generator yang selalu siap
                    membantu.</p>
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
                <img src="{{ asset('assets/feature/img/ide-generator-feature.png') }}" alt="">
            </div>
        </div>
    </div>
    <div id="content" class="content-tables-no-margin">
        <div class="container usage-1">
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
                                    <img src="{{ asset('assets/feature/img/ide-usage-1.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col-lg-6 d-flex justify-content-center">
                                <div class="position-relative wow fadeInRight" data-wow-duration="1" data-wow-delay="0.5">
                                    <div class="opacity-box"></div> <!-- Kotak dengan opacity -->
                                    <h1 class="pe-lg-10 mb-3">
                                        <span class="color-font">Ide Brilian</span>
                                        <span class="black-font">dengan Bantuan</span>
                                        <span class="color-font">Teknologi AI</span>
                                        <span class="black-font">Kami</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">Ide-ide brilian dengan bantuan teknologi AI kami muncul secara
                                        otomatis, menginspirasi kemajuan konten Anda dengan cepat dan efisien.

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
        <div class="container usage-2">
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
                                        <span class="color-font">Kreativitas</span>
                                        <span class="black-font">Tanpa Batas dengan</span>
                                        <span class="color-font">Ide Generator</span>
                                        <span class="black-font">AI</span>
                                    </h1>
                                    <!-- para -->
                                    <p class="pe-lg-10">
                                        Anda dapat dengan mudah menyimpan, mengelola, dan mengatur semua ide yang dihasilkan
                                        oleh generator sesuai kebutuhan Anda.</p>
                                    <!-- btn -->
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col mb-6 mb-lg-0">
                                <!-- images -->
                                <div class="image-usage wow fadeInLeft" data-wow-duration="1" data-wow-delay="1">
                                    <img src="{{ asset('assets/feature/img/ide-usage-2.png') }}" alt=""
                                        class="">
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
