@extends('layouts.dashboard')

@section('title', 'ONEGET | Analisis')

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

    @if (count($facebook) > 0 || count($instagram) > 0 || count($tiktok) > 0)
        <div class="container-xxl flex-grow-1 container-p-y" style="background-color: #ffff">
            <div class="card" style="background-color:#F9F8FD;">
                <div class="nav-align-top">
                    <ul class="nav nav-tabs" role="tablist" style="background-color: #ffff;">
                        <li class="nav-item">
                            <a href="{{ route('analisis') }}"
                                class="nav-link {{ Request::is('analisis') ? ' active' : '' }}"
                                style="background-color:#fffeff">Home</a>
                        </li>
                        <button id="addTabBtn" class="btn btn-primary" onclick="addNewTab()">
                            <i class="bx bx-plus"></i>
                        </button>
                        @foreach ($tabs as $tab)
                            <li class="nav-item ps-2">
                                <a href="{{ route('tab.details', ['slug' => $tab->slug]) }}"
                                    class="nav-link border-0 {{ Request::is('tabs/t/' . $tab->slug) ? ' active' : '' }}"style="background-color:#fffeff">
                                    {{ $tab->title }}
                                </a>
                            </li>
                            <button class="btn btn-primary border-0 px-2"
                                style="background: #fffeff; box-shadow:none; border-radius:0"
                                onclick="deleteTab('{{ $tab->slug }}')">
                                <i class="fi fi-bs-cross-circle" style="color: #00000099"></i>
                            </button>
                        @endforeach
                    </ul>
                    @yield('tampilan')
                </div>
            </div>
        </div>
    @else
        <div
            class="container-xxl flex-grow-1 container-p-y d-flex flex-column align-items-center text-center justify-content-center">
            <i class="fi fi-bs-cloud-disabled" style="font-size: 110px; color:#0000007D"></i>
            <h5 style="color: #0000007D">Anda Belum Login ke Akun Sosial Media</h5>
            <div class="col-12">
                <div class="card mb-4" style="background: none; box-shadow:none">
                    <div class="card-body">
                        <!-- Left-aligned but right in large screen -->
                        <div class="btn-group me-3">
                            <button type="button" class="btn btn-primary dropdown-toggle px-5 py-2"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true"
                                aria-expanded="false">
                                Mulai Sekarang
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item custom-a" style="border-bottom: 1px solid #00000033; "
                                        href="{{ route('facebookRedirect') }}">Facebook</a></li>
                                <li><a class="dropdown-item custom-a" style="border-bottom: 1px solid #00000033; "
                                        href="{{ route('instaRedirect') }}">Instagram</a></li>
                                <li><a class="dropdown-item custom-a" href="{{ route('tiktokRedirect') }}">Tiktok</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('js')
    <script>
        // Function to update the current time
        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();

            // Pad single-digit minutes with a leading zero
            minutes = minutes < 10 ? '0' + minutes : minutes;

            // Display the time
            document.getElementById('current-time').innerText = hours + ':' + minutes;

            // Update greeting based on the time
            var greeting = 'Good ';
            if (hours >= 5 && hours < 12) {
                greeting += 'Morning';
            } else if (hours >= 12 && hours < 17) {
                greeting += 'Afternoon';
            } else if (hours >= 17 && hours < 24) {
                greeting += 'Evening';
            } else {
                greeting += 'Night';
            }
            document.getElementById('greeting').innerText = greeting +
                ', {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}';
        }

        // Function to update the motivational quote
        function updateMotivationalQuote() {
            var quotes = [
                "If you never did, you should. These things are fun and fun is good.",
                "The only way to do great work is to love what you do.",
                "Success is not final, failure is not fatal: It is the courage to continue that counts.",
                "Believe you can and you're halfway there.",
                "Your time is limited, don't waste it living someone else's life."
            ];

            // Get a random quote
            var randomIndex = Math.floor(Math.random() * quotes.length);
            var randomQuote = quotes[randomIndex];

            // Display the quote
            document.getElementById('motivational-quote').innerText = '"' + randomQuote + '"';
        }

        // Update the time every second
        setInterval(updateTime, 1000);

        // Update the motivational quote every 5 seconds
        setInterval(updateMotivationalQuote, 300000);

        // Initial calls to set the time and quote immediately
        updateTime();
        updateMotivationalQuote();
    </script>
@endsection
