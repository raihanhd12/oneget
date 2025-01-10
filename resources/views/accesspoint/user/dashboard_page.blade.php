@extends('layouts.dashboard')

@section('title', 'ONEGET | Dashboard')

@section('navbar')
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center"
        style="height: 0; margin:0" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" style="padding-top: 2rem">
                <i class="bx fi fi-bs-bars-sort"></i>
            </a>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 order-0">
                <div class="card border-0 shadow-none" style="background: none;">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary" style="color: #000 !important; font-weight:700;">
                                    Dashboard</h5>
                                <p class="mb-4" id="tanggalSekarang">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4" style="padding: 0 30px;">
                <div class="card"
                    style="padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x); padding-top:0; box-shadow:none!important;background: var(--Neutral, #f9f8fd)!important;">
                    <div class="row g-0 row-dashboard-card" style="align-items: center; justify-content:center;">
                        <div class="col-md-8">
                            <h5 class="card-header h5-dashboard">Hello, {{ Auth::user()->firstName }}
                                {{ Auth::user()->lastName }}</h5>
                            <p class="card-body p-dashboard">Selamat datang di oneget! Solusi terpadu untuk menghubungkan,
                                mengelola, dan menganalisis seluruh jejaring sosial Anda.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body text-center">
                                <div>
                                    <img src="{{ asset('assets/user/images/dashboard_right.png') }}" class="img-fluid w-100"
                                        alt="Oneget">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-12 order-0">
            <div class="card border-0 shadow-none" style="background: none;">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary" style="color: #000 !important;">Koneksikan Akun Sosial Media
                                Anda untuk Integrasi Analisis</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4" style="padding: 0 20px;">
            <div class="card"
                style="padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x); padding-top:0; box-shadow:none!important;background: var(--Neutral, #f9f8fd)!important;">
                <div class="row">
                    <div class="col-md-4">
                        @if (count($instagram) == 0)
                            <a href="{{ route('instaRedirect') }}">
                                <div class="card sosmed-login">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0" style="font-size:16px; color:#000;">Masuk dengan Instagram</h6>
                                        <img src="{{ asset('assets/user/images/ig.png') }}" alt="Instagram" class="ms-auto"
                                            height="45" />
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('instaRedirect') }}">
                                <div class="card sosmed-login" style="background: var(--Success, #1ED875);">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0" style="font-size:16px; color:white">Sudah Ada Akun Terkoneksi
                                        </h6>
                                        <img src="{{ asset('assets/user/images/ig.png') }}" alt="Instagram" class="ms-auto"
                                            height="45" />
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (count($tiktok) == 0)
                            {{-- <a href="https://www.tiktok.com/v2/auth/authorize/?client_key={{ config('services.tiktok.client_id') }}"> --}}
                            <a href="{{ route('tiktokRedirect') }}">
                                <div class="card sosmed-login">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0" style="font-size:16px; color:#000;">Masuk dengan Tiktok</h6>
                                        <img src="{{ asset('assets/user/images/tiktok.png') }}" alt="Tiktok"
                                            class="ms-auto" height="45" />
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('tiktokRedirect') }}">
                                <div class="card sosmed-login" style="background: var(--Success, #1ED875);">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0" style="font-size:16px; color:white">Sudah Ada Akun Terkoneksi
                                        </h6>
                                        <img src="{{ asset('assets/user/images/tiktok.png') }}" alt="Tiktok"
                                            class="ms-auto" height="45" />
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (count($facebook) == 0)
                            <a href="{{ route('facebookRedirect') }}">
                                <div class="card sosmed-login">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0" style="font-size:16px; color:#000;">Masuk dengan Facebook</h6>
                                        <img src="{{ asset('assets/user/images/facebook.png') }}" alt="Facebook"
                                            class="ms-auto" height="45" />
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('facebookRedirect') }}">
                                <div class="card sosmed-login" style="background: var(--Success, #1ED875);">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0" style="font-size:16px; color:white">Sudah Ada Akun Terkoneksi
                                        </h6>
                                        <img src="{{ asset('assets/user/images/facebook.png') }}" alt="Facebook"
                                            class="ms-auto" height="45" />
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 order-0">
            @if (count($facebook) > 0 || count($instagram) > 0 || count($tiktok) > 0)
                <div class="card border-0 shadow-none" style="background: none;">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary" style="color: #000 !important;">Akun Sosial Media Anda
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card"
                style="padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x); padding-top:0; box-shadow:none!important;background: none;">
                <div class="row" style="padding: 0 20px;">
                    @foreach ($facebook as $fb)
                        <div class="col-md-3 my-2">
                            <a href="#">
                                <div class="card sosmed-username">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0 card-username">{{ $fb->username }}</h6>
                                        <img src="{{ asset('assets/user/images/facebook.png') }}" alt=""
                                            class="ms-auto" height="36" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @foreach ($instagram as $ig)
                        <div class="col-md-3 my-2">
                            <a href="">
                                <div class="card sosmed-username">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0 card-username">{{ $ig->username }}</h6>
                                        <img src="{{ asset('assets/user/images/ig.png') }}" alt=""
                                            class="ms-auto" height="36" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @foreach ($tiktok as $tt)
                        <div class="col-md-3 my-2">
                            <a href="#">
                                <div class="card sosmed-username">
                                    <div class="card-body d-flex align-items-center">
                                        <h6 class="mb-0 card-username">{{ $tt->username }}</h6>
                                        <img src="{{ asset('assets/user/images/tiktok.png') }}" alt=""
                                            class="ms-auto" height="36" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection
@section('js')
    <script>
        // Mendapatkan tanggal saat ini
        var tanggalSekarang = new Date();

        // Daftar nama hari dalam bahasa Indonesia
        var daftarHari = [
            "Minggu",
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jumat",
            "Sabtu",
        ];

        // Mendapatkan nama hari berdasarkan indeks hari
        var namaHari = daftarHari[tanggalSekarang.getDay()];

        // Format tanggal sebagai string
        var options = {
            year: "numeric",
            month: "long",
            day: "numeric"
        };
        var tanggalString = tanggalSekarang.toLocaleDateString("id-ID", options);

        // Menyisipkan tanggal dan nama hari ke dalam elemen paragraf
        document.getElementById("tanggalSekarang").textContent =
            namaHari + ", " + tanggalString;
    </script>
@endsection
