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
                            <div class="col-sm-12">
                                <div class="card-body" style="padding-bottom: 0;">
                                    <a href="{{ route('hasil') }}" class="card-link">
                                        <h5 class="card-title text-primary mb-4" style="color: #000!important;">
                                            <i class="fi fi-bs-angle-left pe-4"
                                                style="vertical-align: middle; font-size:20px;"></i> Buat
                                            Laporan
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-4 order-1" style="width: 100%" id="content-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <h5 class="card-header" style="color: #000;">Judul Laporan dan Format</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <form id="formAccountSettings" action="{{ route('addReport') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <div class="mb-3">
                                                <label for="judul" class="form-label"
                                                    style="text-transform: none; font-size:13px;">Judul*</label>
                                                <input class="form-control" type="text" id="judul" name="judul"
                                                    placeholder="Tulis judul laporan Anda di sini" autofocus />
                                            </div>
                                            <div class="mb-3">
                                                <label for="formatRadio" class="form-label"
                                                    style="text-transform: none; font-size:13px;">Format*</label>
                                                <div class="col-md">
                                                    <div class="form-check form-check-inline mt-3">
                                                        <input class="form-check-input" type="radio" name="formatRadio"
                                                            id="pdfRadio" value="pdf" />
                                                        <label class="form-check-label"
                                                            style="font-size:13px; font-weight:600;"
                                                            for="pdfRadio">PDF</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formatRadio"
                                                            id="xlsRadio" value="xls" />
                                                        <label class="form-check-label"
                                                            style="font-size:13px; font-weight:600;"
                                                            for="xlsRadio">XLS</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="card-header ps-0" style="color: #000;">Pengaturan Laporan</h5>
                                            <div class="mb-3">
                                                <label for="emailRadio" class="form-label"
                                                    style="text-transform: none; font-size:13px;">Kirim ke Email*</label>
                                                <div class="col-md">
                                                    <div class="form-check form-check-inline mt-3">
                                                        <input class="form-check-input" type="radio" name="emailRadio"
                                                            id="yaRadio" value="ya" />
                                                        <label class="form-check-label"
                                                            style="font-size:13px; font-weight:600;"
                                                            for="yaRadio">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="emailRadio"
                                                            id="tidakRadio" value="tidak" />
                                                        <label class="form-check-label"
                                                            style="font-size:13px; font-weight:600;"
                                                            for="tidakRadio">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="analyticBriefsRadio" class="form-label"
                                                    style="text-transform: none; font-size:13px;">Mendapatkan Analytic
                                                    Brief*</label>
                                                <div class="col-md">
                                                    <div class="form-check form-check-inline mt-3">
                                                        <input class="form-check-input" type="radio"
                                                            name="analyticBriefsRadio" id="yaRadio" value="ya" />
                                                        <label class="form-check-label"
                                                            style="font-size:13px; font-weight:600;"
                                                            for="yaRadio">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="analyticBriefsRadio" id="tidakRadio" value="tidak" />
                                                        <label class="form-check-label"
                                                            style="font-size:13px; font-weight:600;"
                                                            for="tidakRadio">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="dateRangePicker" class="form-label"
                                                    style="text-transform: none; font-size:13px;">Periode*</label>
                                                <div class="mb-3 input-group">
                                                    <div class="input-group-prepend"
                                                        style="display: flex; align-items:center justify-content:center;">
                                                        <span
                                                            style="border-right:0; border-radius:0; display: flex; align-items:center justify-content:center;"
                                                            class="input-group-text "><i
                                                                style="color:#000; display:flex; align-items:center justify-content:center;"
                                                                class="fi fi-rr-calendar fs-6"
                                                                style="color:#000; font-size:10px;"></i></span>
                                                        <!-- Ikon kalender di paling kiri -->
                                                    </div>
                                                    <input
                                                        style="font-size:13px;display:flex; align-items:center justify-content:center; color:
                                                                #000; font-weight: 500; border-left:0; border-right:0;"
                                                        class="form-control" type="text" id="dateRangePicker"
                                                        name="dateRange" />
                                                    <div class="input-group-append"
                                                        style="display:flex; align-items:center justify-content:center;">
                                                        <span class="input-group-text"
                                                            style="border-left:0; border-radius:0; display:flex; align-items:center justify-content:center;"><i
                                                                class="fi fi-bs-angle-down fs-6"
                                                                style="color:#636363;display:flex; align-items:center justify-content:center;"></i></span>
                                                        <!-- Ikon angle down di paling kanan -->
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label" style="text-transform: none;">Pilih
                                                Sosial Media*</label>
                                            <div class="card overflow-hidden mb-4"
                                                style="height: 300px; border-radius: 8px; border: 1px solid rgba(0, 0, 0, 0.25); box-shadow: none;">
                                                <div class="card-header">
                                                    <div
                                                        style="border-radius: 16px;box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07);">

                                                        <div class="input-group input-group-merge"
                                                            style="border-radius: 16px; border: 1px solid #FFF; background: #FFF; backdrop-filter: blur(20px);">
                                                            <span class="input-group-text border-0"
                                                                style="border-radius: 16px;" id="basic-addon-search31">
                                                                <i class="bx bx-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control border-0"
                                                                style="border-radius: 16px;" placeholder="Cari"
                                                                aria-label="Cari"
                                                                aria-describedby="basic-addon-search31" />
                                                            <span class="input-group-text border-0"
                                                                style="border-radius: 16px; cursor: pointer; color: var(--Primary, #656EEA); font-weight: 600;"
                                                                id="select-all">Filter</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body" id="vertical-example">
                                                    @foreach ($tiktok as $tt)
                                                        <div
                                                            class="form-check d-flex justify-content-between align-items-center">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-shrink-0 position-relative pe-3">
                                                                        <div class="rounded-circle position-relative"
                                                                            style="width: 40px; height: 40px; overflow: visible;">
                                                                            <img src="{{ asset('assets/user/images/tiktok.png') }}"
                                                                                alt="tiktok" class="w-100 h-100" />
                                                                            {{-- <img src="{{ asset('assets/user/images/tiktok.png') }}"
                                                                                        alt="small-icon"
                                                                                        class="position-absolute bottom-0 end-0"
                                                                                        style="width: 14px; height: 14px;"> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="col mb-sm-0 mb-2">
                                                                            <h6 class="mb-1">
                                                                                {{ $tt->username }}</h6>
                                                                            <small class="py-1 px-2"
                                                                                style="border-radius: 8px; background: #E6F2F6; color: var(--Second-B, #3CC7F4); font-size: 9px; letter-spacing: 0.36px;">TIKTOK
                                                                                PROFILE</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <input class="form-check-input checkbox" type="checkbox"
                                                                value="{{ $tt->id }}" id="defaultCheck1"
                                                                name="select-tiktok"
                                                                onclick="handleCheckboxSelection(this)" />
                                                            <input type="hidden" name="socialmedia_id"
                                                                value="{{ $tt->id }}">
                                                        </div>
                                                    @endforeach
                                                    @foreach ($instagram as $ig)
                                                        <div
                                                            class="form-check d-flex justify-content-between align-items-center">
                                                            <label class="form-check-label" for="defaultCheck2">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-shrink-0 position-relative pe-3">
                                                                        <div class="rounded-circle position-relative"
                                                                            style="width: 40px; height: 40px; overflow: visible;">
                                                                            <img src="{{ asset('assets/user/images/ig.png') }}"
                                                                                alt="facebook" class="w-100 h-100" />
                                                                            {{-- <img src="{{ asset('assets/user/images/tiktok.png') }}"
                                                                                        alt="small-icon"
                                                                                        class="position-absolute bottom-0 end-0"
                                                                                        style="width: 14px; height: 14px;"> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="col mb-sm-0 mb-2">
                                                                            <h6 class="mb-1">
                                                                                {{ $ig->username }}</h6>
                                                                            <small class="py-1 px-2"
                                                                                style="border-radius: 8px; background: #E6F2F6; color: var(--Second-B, #656EEA ); font-size: 9px; letter-spacing: 0.36px;">INSTAGRAM
                                                                                PROFILE</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <input class="form-check-input checkbox" type="checkbox"
                                                                value="{{ $ig->id }}" id="defaultCheck2"
                                                                name="select-instagram"
                                                                onclick="handleCheckboxSelection(this)" />
                                                            <input type="hidden" name="socialmedia_id"
                                                                value="{{ $ig->id }}">
                                                        </div>
                                                    @endforeach
                                                    @foreach ($facebook as $fb)
                                                        <div
                                                            class="form-check d-flex justify-content-between align-items-center">
                                                            <label class="form-check-label" for="defaultCheck3">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-shrink-0 position-relative pe-3">
                                                                        <div class="rounded-circle position-relative"
                                                                            style="width: 40px; height: 40px; overflow: visible;">
                                                                            <img src="{{ asset('assets/user/images/facebook.png') }}"
                                                                                alt="facebook" class="w-100 h-100" />
                                                                            {{-- <img src="{{ asset('assets/user/images/tiktok.png') }}"
                                                                                        alt="small-icon"
                                                                                        class="position-absolute bottom-0 end-0"
                                                                                        style="width: 14px; height: 14px;"> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="col mb-sm-0 mb-2">
                                                                            <h6 class="mb-1">
                                                                                {{ $fb->username }}</h6>
                                                                            <small class="py-1 px-2"
                                                                                style="border-radius: 8px; background: #E6F2F6; color: var(--Second-B, #FFA12E); font-size: 9px; letter-spacing: 0.36px;">FACEBOOK
                                                                                PROFILE</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <input class="form-check-input checkbox" type="checkbox"
                                                                value="{{ $fb->id }}" id="defaultCheck3"
                                                                name="select-facebook"
                                                                onclick="handleCheckboxSelection(this)" />
                                                            <input type="hidden" name="socialmedia_id"
                                                                value="{{ $fb->id }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-end align-items-end">
                                        <button type="submit" class="btn btn-primary me-2">Buat Laporan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /Account -->
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
    <script>
        // Fungsi untuk mengatur pemilihan ganda pada elemen checkbox
        function handleCheckboxSelection(checkbox) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(item) {
                // Nonaktifkan semua checkbox kecuali yang sedang dipilih
                if (item !== checkbox) {
                    item.disabled = checkbox.checked;
                }
            });
        }
    </script>
    </script>

    <script type="text/javascript">
        $(function() {
            var start = moment(); // menggunakan moment.js untuk mendapatkan tanggal saat ini
            var end = moment(); // ini akan sama dengan tanggal saat ini, tapi Anda bisa menyesuaikannya jika perlu

            function cb(start, end) {
                $('#dateRangePicker').val(start.format('DD MMM YYYY') + ' - ' + end.format('DD MMM YYYY'));
            }

            $('#dateRangePicker').daterangepicker({
                startDate: start,
                endDate: end,
                locale: {
                    format: 'DD MMM YYYY'
                }
            }, cb);

            // Setel nilai awal
            cb(start, end);
        });
    </script>


@endsection
