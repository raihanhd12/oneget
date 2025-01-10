@extends('layouts.login_register')

@section('title', 'ONEGET | Login')

@section('content')
    <div class="d-flex flex-column justify-content-center mw-100 __login-all">

        <div class="py-4">
            <a href="{{ route('auth') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_1111_4910)">
                        <path
                            d="M16.0411 24L6.53406 14.48C5.87993 13.8228 5.5127 12.9333 5.5127 12.006C5.5127 11.0787 5.87993 10.1892 6.53406 9.532L16.0521 0L18.1701 2.121L8.65206 11.652C8.55833 11.7458 8.50567 11.8729 8.50567 12.0055C8.50567 12.1381 8.55833 12.2652 8.65206 12.359L18.1581 21.879L16.0411 24Z"
                            fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1111_4910">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <div class="text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                    <path
                        d="M79.1668 33.3318V29.7943C79.1668 22.0588 76.0939 14.6402 70.6241 9.17039C65.1543 3.70059 57.7356 0.627686 50.0002 0.627686C42.2647 0.627686 34.846 3.70059 29.3762 9.17039C23.9064 14.6402 20.8335 22.0588 20.8335 29.7943V33.3318H8.3335V87.4984C8.3335 90.8136 9.65046 93.993 11.9947 96.3372C14.3389 98.6814 17.5183 99.9984 20.8335 99.9984H79.1668C82.482 99.9984 85.6615 98.6814 88.0057 96.3372C90.3499 93.993 91.6668 90.8136 91.6668 87.4984V33.3318H79.1668ZM33.3335 29.7943C33.3335 25.374 35.0894 21.1348 38.2151 18.0092C41.3407 14.8836 45.5799 13.1277 50.0002 13.1277C54.4204 13.1277 58.6597 14.8836 61.7853 18.0092C64.9109 21.1348 66.6668 25.374 66.6668 29.7943V33.3318H33.3335V29.7943ZM20.8335 87.4984V45.8318H79.1668V87.4984H20.8335Z"
                        fill="url(#paint0_linear_1111_4909)" />
                    <path d="M58.3336 58.332H41.667V70.832H58.3336V58.332Z" fill="url(#paint1_linear_1111_4909)" />
                    <defs>
                        <linearGradient id="paint0_linear_1111_4909" x1="91.6668" y1="0.627732" x2="4.72614"
                            y2="4.28401" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#656EEA" />
                            <stop offset="1" stop-color="#3CC7F4" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_1111_4909" x1="58.3336" y1="58.332" x2="40.9923"
                            y2="59.4916" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#656EEA" />
                            <stop offset="1" stop-color="#3CC7F4" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
        <h1 class="__login-heading" style="font-weight: bold;">Kesulitan Login?</h1>
        <p class="__login-paragraph">Masukkan alamat email dan kami akan mengirimi Anda tautan untuk kembali ke akun Anda.
        </p>


        <form action="{{ route('forget') }}" method="POST">
            @csrf
            <div class="__paragraph-google">
                <p style=" padding-top:15px;"><strong>Email*</strong></p>
                <input style="" type="email" name="email" class="__input-email"
                    placeholder="Enter your email address here">
            </div>

            <button class="btn __button-login" data-bss-hover-animate="pulse" type="submit"
                style="padding-top: 10px;padding-bottom: 10px;margin-top: 40px; ">Kirim Tautan Masuk</button>
        </form>
@endsection
