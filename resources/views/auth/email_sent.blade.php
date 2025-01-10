@extends('layouts.login_register')

@section('title', 'ONEGET | Login')

@section('content')
    <div class="d-flex flex-column justify-content-center mw-100 __login-all">

        <div class="py-4">

            <div class="text-center">
                <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="62.5" cy="62.5" r="62.5" fill="url(#paint0_linear_1111_4833)" />
                    <path
                        d="M49.7252 91.1677C48.7082 91.1682 47.7011 90.968 46.7616 90.5786C45.8221 90.1892 44.9687 89.6184 44.2502 88.8987L27.3354 71.9931L33.7899 65.5417L49.7252 81.477L91.2104 39.9917L97.6649 46.4431L55.2002 88.8987C54.4816 89.6184 53.6282 90.1892 52.6887 90.5786C51.7492 90.968 50.7421 91.1682 49.7252 91.1677Z"
                        fill="white" />
                    <defs>
                        <linearGradient id="paint0_linear_1111_4833" x1="125" y1="5.84998e-05" x2="-5.31396"
                            y2="6.53508" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#656EEA" />
                            <stop offset="1" stop-color="#3CC7F4" />
                        </linearGradient>
                    </defs>
                </svg>


            </div>
        </div>
        <h1 class="__login-heading" style="font-weight: bold;">Email Terkirim</h1>
        <p class="__login-paragraph">Kami mengirimkan email ke <span class="__text-email-sent-gmail">{{ $resetEmail }}</span> beserta tautan untuk kembali ke akun Anda.
        </p>
        <a href="{{ route('auth') }}" class="btn __button-login" data-bss-hover-animate="pulse" type="submit"
            style="padding-top: 10px;padding-bottom: 10px;margin-top: 40px; ">OK</a>

    @endsection
