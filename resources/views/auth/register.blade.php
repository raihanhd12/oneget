@extends('layouts.login_register')

@section('title', 'ONEGET | Register')

@section('content')
    <div class="d-flex flex-column justify-content-center mw-100 __login-all">
        <h1 class="__login-heading" style="font-weight: bold;">Daftarkan Akun Anda</h1>
        <p class="__login-paragraph">Mulailah Integrasi Sosial Media Anda. Ayo Bergabung!</p>
        <form action="{{ route('registration') }}" method="POST" class="mx-sm-3">
            @csrf
            <div>
                <div class="row flex-column-mobile">
                    <div class="col col-sm-6">
                        <p style="padding-top:15px;"><strong>First Name*</strong></p>
                        <input type="text" name="firstName" class="__input-name p-lg-3" style=""
                            placeholder="Enter your first name here" value="{{ old('firstName') }}">
                    </div>
                    <div class="col col-sm-6">
                        <p style="padding-top:15px;"><strong>Last Name*</strong></p>
                        <input type="text" name="lastName" class="__input-name p-lg-3"
                            placeholder="Enter your last name here" value="{{ old('lastName') }}">
                    </div>
                </div>
                <div class="__paragraph-google">
                    <p style=" padding-top:15px;"><strong>Email*</strong></p>
                    <input style="" type="email" name="email" class="__input-email"
                        placeholder="Enter your email address here" value="{{ old('email') }}">
                </div>
                <div class="__paragraph-password">
                    <p style=" padding-top:15px;"><strong>Password*</strong></p>
                    <div class="input-group">
                        <input type="password" name="password" class="__input-password" id="password"
                            placeholder="Enter your password here" @error('password') is-invalid @enderror type="password"
                            required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="toggle-password">
                                <i class="bi bi-eye-slash" id="password-toggle-icon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <button class="btn __button-login" data-bss-hover-animate="pulse" type="submit"
                    style="padding-top: 10px;padding-bottom: 10px;margin-top: 40px; ">Daftar
                    Sekarang</button>
        </form>
    </div>

    <p class="__paragraph-account"><span style="font-weight: normal !important;">Sudah punya
            akun?&nbsp;</span><a class="__to-register" href="{{ route('auth') }}">Masuk di
            Sini</a></p>
@endsection
