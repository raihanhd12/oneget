@extends('layouts.login_register')

@section('title', 'ONEGET | Login')

@section('content')
    <div class="d-flex flex-column justify-content-center mw-100 __login-all">

        <h1 class="__login-heading" style="font-weight: bold;">Reset Password Anda</h1>
        <p class="__login-paragraph">Masukkan password baru untuk mengganti password lama Anda.
        </p>

        <form action="{{ route('resetPost') }}" method="POST">
            @csrf
            <input type="text" name="token" hidden value="{{ $token }}">
            <div class="__paragraph-google">
                <input hidden type="text" name="email" class="__input-email"
                    placeholder="Enter your email address here" value="{{ $emailReset }}">
            </div>
            <div class="__paragraph-password">
                <p style=" padding-top:15px;"><strong>Enter New Password*</strong></p>
                <div class="input-group">
                    <input type="password" name="password" class="__input-password" id="password"
                        placeholder="Enter your new password here">
                    <div class="input-group-append">
                        <span class="input-group-text" id="toggle-password">
                            <i class="bi bi-eye-slash" id="password-toggle-icon"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="__paragraph-password">
                <p style=" padding-top:15px;"><strong>Confirm Password*</strong></p>
                <div class="input-group">
                    <input type="password" name="password_confirmation" class="__input-password" id="password2"
                        placeholder="Enter your new password here">
                    <div class="input-group-append">
                        <span class="input-group-text" id="toggle-password2">
                            <i class="bi bi-eye-slash" id="password-toggle-icon2"></i>
                        </span>
                    </div>
                </div>
            </div>

            <button class="btn __button-login" data-bss-hover-animate="pulse" type="submit"
                style="padding-top: 10px;padding-bottom: 10px;margin-top: 40px; ">Submit</button>
        </form>
    @endsection
