@extends('accesspoint.user.analisis_page')
@section('tampilan')
    @if ($relatedSocialMedia)
        @if ($socialmediatype == 'App\Models\Instagram')
            @include('accesspoint.user.partials.instagram')
        @elseif($socialmediatype == 'App\Models\Facebook')
            @include('accesspoint.user.partials.facebook')
        @else
            @include('accesspoint.user.partials.tiktok')
        @endif
    @else
        <div>
            <div class="tab-pane fade show active" id="navs-top-align-tambah-akun-{{ $tab->slug }}">
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4 mx-auto my-5" style="padding: 0 20px;">
                    <div class="card"
                        style="padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x); padding-top: 0; box-shadow:none!important;background: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('instaRedirect') }}">
                                    <div class="card sosmed-login">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/user/images/ig.png') }}" alt="Instagram"
                                                height="45" class="mb-3" />
                                            <h6 class="mb-0" style="font-size: 16px; color: #000;">Masuk
                                                dengan
                                                Instagram</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('tiktokRedirect') }}">
                                    <div class="card sosmed-login">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/user/images/tiktok.png') }}" alt="Tiktok"
                                                class="mb-3" height="45" />
                                            <h6 class="mb-0" style="font-size:16px; color:#000;">Masuk dengan
                                                Tiktok</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('facebookRedirect') }}">
                                    <div class="card sosmed-login">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/user/images/facebook.png') }}" alt="Facebook"
                                                class="mb-3" height="45" />
                                            <h6 class="mb-0" style="font-size:16px; color:#000;">Masuk
                                                dengan
                                                Facebook</h6>
                                        </div>
                                    </div>
                                </a>
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
                                        <h5 class="card-title text-primary" style="color: #000 !important;">
                                            Akun
                                            Sosial Media Anda
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

                            @foreach ($instagram as $ig)
                                <div class="col-md-3 my-2">
                                    <a href="{{ route('tab.instagram.page', ['slug' => $tab->slug, 'username' => $ig->username]) }}"
                                        class="load-page">
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
                                    <a
                                        href="{{ route('tab.tiktok.page', ['slug' => $tab->slug, 'username' => $tt->username]) }}">
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
                            @foreach ($facebook as $fb)
                                <div class="col-md-3 my-2">
                                    <a
                                        href="{{ route('tab.facebook.page', ['slug' => $tab->slug, 'username' => $fb->username]) }}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
