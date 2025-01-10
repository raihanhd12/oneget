@extends('layouts.login_register')

@section('title', 'ONEGET | Login')

@section('content')
    <div class="d-flex flex-column justify-content-center mw-100 __login-all">
        <h1 class="__login-heading" style="font-weight: bold;">Mulai Sesi Login Anda</h1>
        <p class="__login-paragraph">Jadikan Hidupmu Lebih Mudah. Akses Sekarang!</p>
        <a data-bss-hover-animate="pulse" class="btn btn-outline-secondary __button-google py-3" href="{{ route('redirect') }}"
            style=";"><strong><i class="bi bi-google __icon-google fa-lg"></i> &nbsp;&nbsp; Login dengan
                Google</strong></a>
        <div class="__div-google"><span class="__span-google">Atau dengan Email</span></div>
        <form action="{{ route('auth') }}" method="POST">
            @csrf
            <div class="__paragraph-google">
                <p style=" padding-top:15px;"><strong>Email*</strong></p>
                <input style="" type="email" name="email" class="__input-email"
                    placeholder="Enter your email address here">
            </div>
            <div class="__paragraph-password">
                <p style=" padding-top:15px;"><strong>Password*</strong></p>
                <div class="input-group">
                    <input type="password" name="password" class="__input-password" id="password"
                        placeholder="Enter your password here">
                    <div class="input-group-append">
                        <span class="input-group-text" id="toggle-password">
                            <i class="bi bi-eye-slash" id="password-toggle-icon"></i>
                        </span>
                    </div>
                </div>
            </div>

            <button class="btn __button-login" data-bss-hover-animate="pulse" type="submit"
                style="padding-top: 10px;padding-bottom: 10px;margin-top: 40px; ">Masuk
                Sekarang</button>
        </form>
    </div>
    <a class="__paragraph-account2" style="text-decoration: none"  href="{{ route('forget') }}" style="">Lupa kata sandi?</a>
    <p class="__paragraph-account"><span style="font-weight: normal !important;">Belum punya
            akun?&nbsp;</span><a class="__to-register" href="{{ route('registration') }}">Daftar di
            Sini</a></p>
@endsection
