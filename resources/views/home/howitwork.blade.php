@extends('layouts.main')

@section('title', 'ONEGET | How It Works')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/howitwork/css/howitwork.css') }}">
@endsection
@section('content')


    <div class="main-banner wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="mb-4">
                    <div class="icon-container">
                        <img class="sparkling-icon" src="{{ asset('assets/howitwork/img/sparkling.svg') }}" alt="">
                    </div>
                    <h2><span class="black-font">Tinggal</span>
                        <span class="color-font">Selangkah Lagi</span>
                        <span class="black-font">Menuju</span>
                        <span class="color-font">Integrasi</span>
                        <span class="black-font">Sosial Media yang</span>
                        <span class="color-font">Lebih Mudah</span>
                    </h2>
                </div>
                <div class="title-border">
                    <img src="{{ asset('assets/howitwork/img/line.svg') }}" alt="">
                </div>
            </div>
        </div>

    </div>
    <div class="content wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <div class="container">
            <div class="step step-first wow zoomInDown" data-wow-duration="0.8s" data-wow-delay="0.5s">
                <img class="number" src="{{ asset('assets/howitwork/img/number-1.svg') }}" alt="">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="mb-5">Buat Akun Anda</h4>
                        <p>Mulailah dengan masuk atau mendaftar untuk mengakses semua fitur integrasi sosial media dalam
                            satu platform yang luar biasa.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/howitwork/img/step-1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="step step-second wow zoomInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <img class="number-right" src="{{ asset('assets/howitwork/img/number-2.svg') }}" alt="">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/howitwork/img/step-2.png') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h4 class="mb-5">Pilih Sosial Media Favoritmu</h4>
                        <p>Pilih platform sosial media mana yang ingin Anda integrasikan dengan mudah dan cepat. Cukup
                            satu kali klik!</p>
                    </div>
                </div>
            </div>
            <div class="step step-third wow zoomInDown" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <img class="number" src="{{ asset('assets/howitwork/img/number-3.svg') }}" alt="">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="mb-5">Lihat Integrasi Sosial Media yang Memukau</h4>
                        <p>Lihat statistik dan laporan yang komprehensif untuk mengukur kinerja akun sosial media Anda
                            dan buat perubahan yang tepat waktu.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/howitwork/img/step-3.png') }}" alt="">
                    </div>
                </div>
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
