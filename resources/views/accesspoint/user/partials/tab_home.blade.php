@extends('accesspoint.user.analisis_page')
@section('tampilan')
    <div style="background: #ffffff94">

        <div class="tab-pane fade show active" id="navs-top-align-home">
            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4 mx-auto my-5 text-center">
                <div class="card position-relative"
                    style="padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x); padding-top: 0; box-shadow:none!important;background: none;">

                    <!-- Feedback.gif (Top Right) -->
                    <img src="{{ asset('assets/user/images/feedback.gif') }}" width="3%" alt="Oneget"
                        style="position: absolute; top: 0; right: 0;">
                    <!-- Video Badge.gif (Bottom Right) -->
                    <img src="{{ asset('assets/user/images/video-badge.gif') }}" width="3%" alt="Oneget"
                        style="position: absolute; bottom: 0; right: 0;">
                    <!-- Viewers.gif (Bottom Left) -->
                    <img src="{{ asset('assets/user/images/viewers.gif') }}" width="3%" alt="Oneget"
                        style="position: absolute; bottom: 0; left: 0;">
                    <!-- Filter.gif (Top Left) -->
                    <img src="{{ asset('assets/user/images/filter.gif') }}" width="3%" alt="Oneget"
                        style="position: absolute; top: 0; left: 0;">
                    <!-- Content in the center -->
                    <img src="{{ asset('assets/user/images/home-tab.png') }}" width="25%" alt="Homepage" class="mx-auto">

                    <!-- Time -->
                    <h1 style="font-size: 90px; color:#000000bd; font-weight:700" id="current-time"></h1>
                    <!-- Greeting -->
                    <h3 id="greeting" class="h5-dashboard" style="font-weight: 700; "></h3>
                    <!-- Motivational Quote -->
                    <i id="motivational-quote" style="color: #000"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
