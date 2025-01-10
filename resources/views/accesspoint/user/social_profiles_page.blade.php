@extends('layouts.dashboard')

@section('title', 'ONEGET | Social Profiles')

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
                        <div class="col">
                            <div class="card-body" style="padding-left: 0;">
                                <h5 class="card-title text-primary " style="color: #000 !important; font-weight:700">Social
                                    Profiles</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-4" style="background: none; box-shadow:none;">
                            <div class="card-body" style="padding-left:10px; padding-bottom:0">
                                <form id="formAccountSettings" method="POST" onsubmit="return false">
                                    <div class="row">
                                        <div class="mb-3 col-9"
                                            style="border-radius: 8px;border: 1px solid #FFF;background: #FFF;box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07);backdrop-filter: blur(20px); height:100%; padding:7px;">
                                            <div class="input-group ">
                                                <span class="input-group-text" style="border:none"><i
                                                        class="fi fi-bs-search"></i></span>
                                                <input id="searchInput" style="border: none" type="text"
                                                    class="form-control ps-1 ps-sm-2" placeholder="Cari" aria-label="Cari"
                                                    onkeyup="searchProfiles()" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-3" style="padding-right:0;">
                                            <div class="btn-group">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary d-flex align-items-center justify-content-between"
                                                        style="border-radius: 8px; font-size:14px; padding:15px;"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fi fi-bs-plus fs-tiny mx-2"></i>
                                                            Tambah Akun
                                                        </div>
                                                        <i class="fi fi-bs-angle-down fs-tiny mx-2"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item custom-a"
                                                                style="border-bottom: 1px solid #00000033;"
                                                                href="{{ route('facebookRedirect') }}">Facebook</a></li>
                                                        <li><a class="dropdown-item custom-a"
                                                                style="border-bottom: 1px solid #00000033;"
                                                                href="{{ route('instaRedirect') }}">Instagram</a></li>
                                                        <li><a class="dropdown-item custom-a"
                                                                href="{{ route('tiktokRedirect') }}">Tiktok</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card overflow-hidden mb-4" style="height: 678px">
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-md-7">
                                    <h5 class="card-header" style="color: #000; font-size: 17px;">Daftar Akun</h5>
                                </div>
                                <!-- Right Column -->
                                <div class="col-md-5 text-end">
                                    <div class="dropdown">
                                        <button style="color: #000; font-weight:500; font-size:17px; padding:20px;"
                                            class="btn" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span id="selectedAccount"></span>
                                            <i class="fi fi-bs-angle-down fs-tiny mx-2"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="changeAccount('Semua Akun')">Semua Akun</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="changeAccount('Facebook')">Facebook</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="changeAccount('Instagram')">Instagram</a></li>
                                            <li><a class="dropdown-item" href="#"
                                                    onclick="changeAccount('TikTok')">TikTok</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if (count($instagram) > 0 || count($facebook) > 0 || count($tiktok) > 0)
                                <div class="card-body" id="vertical-example">
                                @else
                                    <div class="card-body" id="vertical-example"
                                        style="display: flex; align-items:center; justify-content:center;">
                            @endif
                            @if (count($instagram) > 0 || count($facebook) > 0 || count($tiktok) > 0)
                                <div class="col">
                                    <div class="card" style="box-shadow: none;">
                                        <div id="tiktokAccounts" class="profile-section">
                                            @foreach ($tiktok as $tt)
                                                <hr>
                                                <div class="card-body pb-0">
                                                    <!-- Social Accounts -->
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <div class="rounded-circle position-relative"
                                                                style="width: 40px; height: 40px; overflow: visible;">
                                                                <img src="{{ asset('assets/user/images/facebook.png') }}"
                                                                    alt="facebook" class="w-100 h-100" />
                                                                <img src="{{ asset('assets/user/images/tiktok.png') }}"
                                                                    alt="small-icon"
                                                                    class="position-absolute bottom-0 end-0"
                                                                    style="width: 14px; height: 14px;">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 row">
                                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2"
                                                                style="padding-left:5%;">
                                                                <h6 class="mb-1">{{ $tt->username }}</h6>
                                                                <small class="py-1 px-2"
                                                                    style="border-radius: 8px; background: #E6F2F6; color: var(--Second-B, #3CC7F4); font-size: 9px; letter-spacing: 0.36px;">TIKTOK
                                                                    PROFILE</small>
                                                            </div>
                                                            <div class="col-4 col-sm-5 text-end">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline-dark w-50">
                                                                    <span class="me-2">Sign Out</span>
                                                                    <i class="fi fi-bs-exit"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Social Accounts -->
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="instagramAccounts" class="profile-section">
                                            @foreach ($instagram as $ig)
                                                <hr>
                                                <div class="card-body pb-0">
                                                    <!-- Social Accounts -->
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <div class="rounded-circle position-relative"
                                                                style="width: 40px; height: 40px; overflow: visible;">
                                                                <img src="{{ asset('assets/user/images/facebook.png') }}"
                                                                    alt="facebook" class="w-100 h-100" />
                                                                <img src="{{ asset('assets/user/images/ig.png') }}"
                                                                    alt="small-icon"
                                                                    class="position-absolute bottom-0 end-0"
                                                                    style="width: 14px; height: 14px;">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 row">
                                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2"
                                                                style="padding-left:5%;">
                                                                <h6 class="mb-1">{{ $ig->username }}</h6>
                                                                <small class="py-1 px-2"
                                                                    style="border-radius: 8px; background: #E9EAFE; color: var(--Primary, #656EEA);font-size:9px; letter-spacing: 0.36px;">INSTAGRAM
                                                                    PROFILE</small>
                                                            </div>
                                                            <div class="col-4 col-sm-5 text-end">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline-dark w-50">
                                                                    <span class="me-2">Sign Out</span>
                                                                    <i class="fi fi-bs-exit"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Social Accounts -->
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="facebookAccounts" class="profile-section">
                                            @foreach ($facebook as $fb)
                                                <hr>
                                                <div class="card-body account-element account-Facebook">
                                                    <!-- Social Accounts -->
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <div class="rounded-circle position-relative"
                                                                style="width: 40px; height: 40px; overflow: visible;">
                                                                <img src="{{ asset('assets/user/images/facebook.png') }}"
                                                                    alt="facebook" class="w-100 h-100" />
                                                                <img src="{{ asset('assets/user/images/facebook.png') }}"
                                                                    alt="small-icon"
                                                                    class="position-absolute bottom-0 end-0"
                                                                    style="width: 14px; height: 14px;">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 row">
                                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2"
                                                                style="padding-left:5%;">
                                                                <h6 class="mb-1">{{ $fb->username }}</h6>
                                                                <small class="py-1 px-2"
                                                                    style="border-radius: 8px; background: #F9EFED; color: var(--Second-A, #FFA12E);font-size:9px; letter-spacing: 0.36px;">FACEBOOK
                                                                    PROFILE</small>
                                                            </div>
                                                            <div class="col-4 col-sm-5 text-end">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline-dark w-50">
                                                                    <span class="me-2">Sign Out</span>
                                                                    <i class="fi fi-bs-exit"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Social Accounts -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div id="before_login"
                                    style="display: flex; align-items: center; text-align: center; flex-direction: column;">
                                    <i class="fi fi-bs-cloud-disabled" style="font-size: 110px; color:#0000007D"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-4 order-1" style="padding-top: 8.5%">
        <!-- Account -->
        <div class="card border-0"
            style="box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07);
backdrop-filter: blur(20px);">
            <div class="d-flex align-items-start row">
                <div class="col">
                    <div class="card-body" style="padding-bottom: 0;">
                        <h5 class="card-title text-primary"
                            style="color: #000 !important; font-weight:700; font-size:20px;">Profil Akun Web</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-start row">
                <div class="col">
                    <div class="card-body">
                        <div class="row" style="padding-left: 10px">
                            <div class="col-sm-2 align-items-center justify-content-center d-flex"
                                style="border-radius: 8px; background: #E6F2F6;">
                                <h4 class="m-0" style="color:#3CC7F4;">{{ $firstInitial . $lastInitial }}</h4>
                            </div>
                            <div class="col-sm-10">
                                <h4 class="mb-3 " style="color: #00000080; font-size:9px; font-weight:700;">PROFIL
                                    KAMU
                                </h4>
                                <h4 class="mb-1" style="color: var(--Second-B, #3CC7F4); font-size:14px; ">
                                    {{ $user->firstName . ' ' . $user->lastName }}</h4>
                                <h4 class="mb-0" style="color:#000; font-size:14px; font-weight:700;">
                                    {{ $user->email }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body" style="padding-top: 0">
                <form style="padding-bottom: 3%" action="{{ route('socialProfilesPost') }}" id="formAccountSettings"
                    method="POST">
                    @csrf
                    <div class="row">
                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="firstName" class="form-label"
                                style="text-transform: none; font-size:13px; color: rgba(0, 0, 0, 0.70);">First
                                Name*</label>
                            <input class="form-control" style="color: #000; font-weight:500;" type="text"
                                id="firstName" name="firstName" value="{{ $user->firstName }}" />
                        </div>
                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="lastName" class="form-label"
                                style="text-transform: none; font-size:13px; color: rgba(0, 0, 0, 0.70);">Last
                                Name*</label>
                            <input class="form-control" style="color: #000; font-weight:500;" type="text"
                                name="lastName" id="lastName" value="{{ $user->lastName }}" />
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label"
                                style="text-transform: none; font-size:13px; color: rgba(0, 0, 0, 0.70);">E-mail*</label>
                            <input class="form-control" style="color: #000; font-weight:500;" type="text"
                                id="email" name="email" value="{{ $user->email }}"
                                placeholder="{{ $user->email }}" />
                        </div>
                        <!-- Old Password -->
                        <div class="form-password-toggle mb-3">
                            <label class="form-label" for="oldPassword"
                                style="text-transform: none; font-size:13px; color: rgba(0, 0, 0, 0.70);">Old
                                Password*</label>
                            <div class="input-group input-group-merge">
                                <input style="color: #000; font-weight:500;" type="password" name="oldPassword"
                                    class="form-control" id="oldPassword"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password2" />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <!-- New Password -->
                        <div class="form-password-toggle mb-3">
                            <label class="form-label" for="newPassword"
                                style="text-transform: none; font-size:13px; color: rgba(0, 0, 0, 0.70);">New
                                Password*</label>
                            <div class="input-group input-group-merge">
                                <input style="color: #000; font-weight:500;" type="password" name="newPassword"
                                    class="form-control" id="newPassword"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password2" />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <!-- Confirm Password -->
                        <div class="form-password-toggle mb-3">
                            <label class="form-label" for="confirmPassword"
                                style="text-transform: none; font-size:13px; color: rgba(0, 0, 0, 0.70);">Confirm
                                Password*</label>
                            <div class="input-group input-group-merge">
                                <input style="color: #000; font-weight:500;" type="password" name="confirmPassword"
                                    class="form-control" id="confirmPassword"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password2" />
                                <span id="basic-default-password2" class="input-group-text cursor-pointer"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-100 py-2">Edit Profile</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- /Account -->
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
        window.onload = function() {
            // Set nilai default ke "Semua Akun"
            changeAccount('Semua Akun');
        };

        function changeAccount(accountName) {
            // Set nilai dalam <span> ke accountName
            document.getElementById('selectedAccount').textContent = accountName;

            // Sembunyikan atau tampilkan elemen yang sesuai dengan akun yang dipilih
            var dropdownItems = document.querySelectorAll('.dropdown-item');
            for (var i = 0; i < dropdownItems.length; i++) {
                var item = dropdownItems[i];
                if (item.textContent === accountName) {
                    item.style.display = 'none';
                } else {
                    item.style.display = 'block';
                }
            }

            // Sembunyikan atau tampilkan daftar akun Facebook dan Instagram sesuai dengan akun yang dipilih
            var facebookAccounts = document.getElementById('facebookAccounts');
            var instagramAccounts = document.getElementById('instagramAccounts');
            var tiktokAccounts = document.getElementById('tiktokAccounts');

            if (accountName === 'Semua Akun') {
                facebookAccounts.style.display = 'block';
                instagramAccounts.style.display = 'block';
                tiktokAccounts.style.display = 'block';
            } else if (accountName === 'Facebook') {
                facebookAccounts.style.display = 'block';
                instagramAccounts.style.display = 'none';
                tiktokAccounts.style.display = 'none';
            } else if (accountName === 'Instagram') {
                facebookAccounts.style.display = 'none';
                instagramAccounts.style.display = 'block';
                tiktokAccounts.style.display = 'none';
            } else if (accountName === 'TikTok') {
                facebookAccounts.style.display = 'none';
                instagramAccounts.style.display = 'none';
                tiktokAccounts.style.display = 'block';
            }
        }
    </script>
    <script>
        function searchProfiles() {
            var query = document.getElementById('searchInput').value.toLowerCase();

            // Get the account selected in the dropdown
            var selectedAccount = document.getElementById('selectedAccount').textContent;

            // Get all the profile elements
            var profileElements = document.querySelectorAll('.profile-section');

            profileElements.forEach(function(profile) {
                // Check if the profile contains the search query and matches the selected account
                var profileText = profile.textContent.toLowerCase();
                if (profileText.includes(query) && (selectedAccount === 'Semua Akun' || profileText.includes(
                        selectedAccount.toLowerCase()))) {
                    profile.style.display = 'block';
                } else {
                    profile.style.display = 'none';
                }
            });
        }
    </script>


@endsection
