@extends('layouts.dashboard')

@section('title', 'ONEGET | Hasil')

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
            <div class="col-lg-12 order-0">
                <div class="card" style="background: var(--Neutral, #F9F8FD); box-shadow:none;">
                    <div class="d-flex align-items-end row">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="card-body" style="padding-bottom: 0;">
                                    <h5 class="card-title text-primary mb-4" style="color: #000!important;">Hasil Laporan
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card-body d-flex justify-content-end align-items-center"
                                    style="padding-bottom: 0; padding-right: 0;">
                                    <a href="{{ route('addReportPage') }}" class="btn btn-primary d-flex" id="button-submit"
                                        type="button">
                                        <i class="fi fi-bs-plus"
                                            style="display: flex; align-items: center; font-size:12px; margin-right:10px;"></i>Tambah
                                        Laporan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 order-0">
                <div class="card" style="background: var(--Neutral, #F9F8FD); box-shadow:none;">
                    <div class="d-flex align-items-end row">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card-body" style="padding-bottom: 0;">
                                    <div class="mb-3">
                                        <div
                                            style="box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07);border-radius: 8px;">

                                            <div class="input-group input-group-merge"
                                                style="border-radius: 8px; border: 1px solid #FFF; backdrop-filter: blur(20px);">
                                                <span class="input-group-text border-0" id="basic-addon-search31"><i
                                                        class="bx bx-search"></i></span>
                                                <input type="text" class="form-control border-0" placeholder="Cari"
                                                    aria-label="Cari" aria-describedby="basic-addon-search31" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card-body px-0" style="padding-bottom: 0;">
                                    <div class="mb-3">
                                        <select id="defaultSelect" class="form-select"
                                            style="color:#000; border-radius: 8px; border: 1px solid #FFF; box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07); backdrop-filter: blur(20px);">
                                            <option>Semua Akun</option>
                                            <option value="1">Instagram</option>
                                            <option value="2">Facebook</option>
                                            <option value="3">TikTok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card-body px-0" style="padding-bottom: 0;">
                                    <div class="mb-3">
                                        <select id="defaultSelect" class="form-select"
                                            style="color:#000; border-radius: 8px; border: 1px solid #FFF; box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07); backdrop-filter: blur(20px);">
                                            <option>Terbaru</option>
                                            <option value="1">Terlama</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-4 order-1" style="width: 100%" id="content-box">
                <div class="row" style="padding-left: 3%; padding-right:3%;">
                    {{-- <div class="card overflow-hidden mb-4" style="height: 470px">
                        <div class="card-body" id="vertical-example"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div id="before_login"
                                style="display: flex; align-items: center; text-align: center; flex-direction: column;">
                                <i class="fi fi-bs-cloud-disabled" style="font-size: 110px; color:#0000007D"></i>
                                <h5 style="color: #0000007D">Anda Belum Memiliki Laporan</h5>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card overflow-hidden mb-4" style="height: 700px">
                        <div class="card-body" id="vertical-example">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th style="color: #000; font-weight:700;">Judul</th>
                                        <th style="color: #000; font-weight:700;">Sosial Media</th>
                                        <th style="color: #000; font-weight:700;">Format</th>
                                        <th style="color: #000; font-weight:700;">Periode</th>
                                        <th style="color: #000; font-weight:700;">Tanggal Dibuat</th>
                                        <th style="color: #000; font-weight:700;">Analytic Brief Status</th>
                                        <th style="color: #000; font-weight:700;">Pilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporans as $laporan)
                                        <tr>
                                            <td style="color: #000;">{{ $laporan->judul }}</td>
                                            <td style="color: #000;">
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    @if ($laporan->socialmedia_type == 'App\Models\Instagram')
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $socialMediaUsernames[$laporan->id] ?? 'N/A' }}">
                                                            <img src="{{ asset('assets/user/images/ig.png') }}"
                                                                alt="Instagram" class="rounded-circle">
                                                        </li>
                                                    @endif

                                                    @if ($laporan->socialmedia_type == 'App\Models\Tiktok')
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $socialMediaUsernames[$laporan->id] ?? 'N/A' }}">
                                                            <img src="{{ asset('assets/user/images/tiktok.png') }}"
                                                                alt="TikTok" class="rounded-circle">
                                                        </li>
                                                    @endif

                                                    @if ($laporan->socialmedia_type == 'App\Models\Facebooks')
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="{{ $socialMediaUsernames[$laporan->id] ?? 'N/A' }}">
                                                            <img src="{{ asset('assets/user/images/facebook.png') }}"
                                                                alt="Facebook" class="rounded-circle">
                                                        </li>
                                                    @endif
                                                </ul>
                                            </td>
                                            <td style="color: #000;">{{ $laporan->format }}</td>
                                            <td style="color: #000;">{{ $laporan->periode }}</td>
                                            <td style="color: #000;">
                                                @if ($laporan->created_at)
                                                    {{ $laporan->created_at->format('d/m/Y') }}
                                                @endif
                                            </td>
                                            <td style="color: #000;">{{ $statuses[$laporan->id] ?? 'NOT NEEDED' }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><img
                                                            src={{ asset('assets/user/images/document.gif') }}
                                                            height="30px;"></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" style="color:#000;"
                                                            href="javascript:void(0);"><i
                                                                class="bx bx-cloud-download me-1"></i>Download</a>
                                                        <a class="dropdown-item" style="color:#000;"
                                                            href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        new PerfectScrollbar(document.getElementById('vertical-example'), {
            wheelPropagation: false
        });
    </script>
@endsection
