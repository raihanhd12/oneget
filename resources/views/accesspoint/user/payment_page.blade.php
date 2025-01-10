@extends('layouts.dashboard')

@section('title', 'ONEGET | Payments')

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

    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="row">
            <div class="col-lg-12 order-0">
                <div class="card" style="background: none; box-shadow:none;">
                    <div class="d-flex align-items-end row">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-body" style="padding-bottom: 0; padding-left:0">
                                    <h5 class="card-title text-primary mb-4" style="color: #000!important;">Paket dan
                                        Langganan
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 mb-4" id="content-box">
                <div class="card text-center" style="border: 1px solid rgba(0, 0, 0, 0.20);">
                    <div class="card-header py-2" style="font-weight: 500;font-size: 24px;color: #000;">
                        Diskon 30%
                    </div>
                    <hr class="my-0" style="border: 1px solid rgba(0, 0, 0, 0.20);">
                    <div class="card-body">
                        <h4 class="card-title"
                            style="background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%));background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 30px;">
                            Standard</h4>
                        <h5 class="card-title" style="font-size: 15px;font-weight: 500; color: rgba(0, 0, 0, 0.80);">
                            Eksplorasi awal yang
                            memadai untuk analisis.</h5>
                        <p class="mb-0"><s>Rp 63.700 /Bln</s></p>
                        <h5 class="card-title" style="font-weight: 700; color: rgba(0, 0, 0, 0.80);">
                            <span style="font-weight: 400; font-size: 20px; vertical-align: middle;">Rp</span>
                            <span style="font-size: 40px; vertical-align: middle;">49.900</span>
                            <span style="font-weight: 400; font-size: 20px; vertical-align: middle;">/Bln</span>
                        </h5>
                        {{-- TODO bisa pake anchor atau button biasa --}}
                        <a href="" class="btn btn-primary p-2 mb-2 pay-button"
                            data-url="{{ route('paymentHandler', '1') }}"
                            style="width: 50%; background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; border-radius: 8px; border: 1px solid rgba(0, 0, 0, 0.20)!important; font-weight: 600;">
                            Pilih Paket
                        </a>
                        <div class="card-footer text-muted" style="font-size: 11px; padding-top:0">
                            Rp. 190.000/bln saat perpanjangan layanan
                        </div>
                    </div>
                    <div class="p-5 pt-0"
                        style="display: flex; flex-direction: column; align-items: flex-start; color:#000;">
                        <div>
                            <h5 class="card-title"
                                style="font-size: 15px; font-weight: 500; color: rgba(0, 0, 0, 0.80); margin-right: 10px;">
                                Sosial Media
                            </h5>
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">1</span> Akun Facebook
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">1</span> Akun Instagram
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">1</span> Akun TikTok
                        </div>
                    </div>
                    <div class="p-5 pt-0" style="display: flex; flex-direction: column; align-items: flex-end; color:#000;">
                        <div style="margin-right: auto;">
                            <h5 class="card-title"
                                style="font-size: 15px; font-weight: 500; color: rgba(0, 0, 0, 0.80); margin-right: 10px;">
                                Fitur Unggulan
                            </h5>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <div>
                                <i class="fi-ss-cross-circle" style="color:#FF3D40; margin-right: 5px;"></i>
                                <span style="font-weight: 600;">Gratis</span> Download Hasil Analitik
                            </div>
                            <!-- Tooltip on top -->
                            <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                title="Fitur Analisis Sosial Media menyediakan pandangan komprehensif tentang kinerja Anda di media sosial dalam satu platform, membantu Anda memahami data, tren, dan interaksi dengan mudah."
                                style="display: flex; align-items: flex-end;">
                                <i class="fi fi-rr-interrogation"></i>
                            </span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <div>
                                <i class="fi-ss-cross-circle" style="color:#FF3D40; margin-right: 5px;"></i>
                                <span style="font-weight: 600;">Gratis</span> Download Ide Generator
                            </div>
                            <!-- Tooltip on top -->
                            <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                title="Fitur Ide Generator adalah fitur yang membantu Anda dengan cepat menghasilkan ide kreatif untuk konten media sosial Anda, membantu Anda tetap terinspirasi dan terhubung dengan audiens dengan mudah."
                                style="display: flex; align-items: flex-end;">
                                <i class="fi fi-rr-interrogation"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4" id="content-box">
                <div class="card text-center" style="border: 1px solid rgba(0, 0, 0, 0.20);">
                    <div class="card-header py-2" style="font-weight: 500;font-size: 24px;color: #000;">
                        Diskon 40%
                    </div>
                    <hr class="my-0" style="border: 1px solid rgba(0, 0, 0, 0.20);">
                    <div class="card-body">
                        <h4 class="card-title"
                            style="background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%));background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 30px;">
                            Premium</h4>
                        <h5 class="card-title" style="font-size: 14px;font-weight: 500; color: rgba(0, 0, 0, 0.80);">
                            Dapatkan wawasan terperinci dengan fitur lanjutan.</h5>
                        <p class="mb-0"><s>Rp 139.900 /Bln</s></p>
                        <h5 class="card-title" style="font-weight: 700; color: rgba(0, 0, 0, 0.80);">
                            <span style="font-weight: 400; font-size: 20px; vertical-align: middle;">Rp</span>
                            <span style="font-size: 40px; vertical-align: middle;">99.900</span>
                            <span style="font-weight: 400; font-size: 20px; vertical-align: middle;">/Bln</span>
                        </h5>
                        <a href="" class="btn btn-primary p-2 mb-2 pay-button"
                            data-url="{{ route('paymentHandler', '2') }}"
                            style="width: 50%; background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%)); box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07); backdrop-filter: blur(20px); border-radius: 8px; font-weight: 600;"
                            disabled>Pilih Paket</a>
                        <div class="card-footer text-muted" style="font-size: 11px; padding-top:0">
                            Rp. 190.000/bln saat perpanjangan layanan
                        </div>
                    </div>
                    <div class="p-5 pt-0"
                        style="display: flex; flex-direction: column; align-items: flex-start; color:#000;">
                        <div>
                            <h5 class="card-title"
                                style="font-size: 15px; font-weight: 500; color: rgba(0, 0, 0, 0.80); margin-right: 10px;">
                                Sosial Media
                            </h5>
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">3</span> Akun Facebook
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">3</span> Akun Instagram
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">3</span> Akun TikTok
                        </div>
                    </div>
                    <div class="p-5 pt-0"
                        style="display: flex; flex-direction: column; align-items: flex-end; color:#000;">
                        <div style="margin-right: auto;">
                            <h5 class="card-title"
                                style="font-size: 15px; font-weight: 500; color: rgba(0, 0, 0, 0.80); margin-right: 10px;">
                                Fitur Unggulan
                            </h5>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <div>
                                <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                                <span style="font-weight: 600;">Gratis</span> Download Hasil Analitik
                            </div>
                            <!-- Tooltip on top -->
                            <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                data-bs-html="true"
                                title="Fitur Analisis Sosial Media menyediakan pandangan komprehensif tentang kinerja Anda di media sosial dalam satu platform, membantu Anda memahami data, tren, dan interaksi dengan mudah."
                                style="display: flex; align-items: flex-end;">
                                <i class="fi fi-rr-interrogation"></i>
                            </span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <div>
                                <i class="fi-ss-cross-circle" style="color:#FF3D40; margin-right: 5px;"></i>
                                <span style="font-weight: 600;">Gratis</span> Download Ide Generator
                            </div>
                            <!-- Tooltip on top -->
                            <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                data-bs-html="true"
                                title="Fitur Ide Generator adalah fitur yang membantu Anda dengan cepat menghasilkan ide kreatif untuk konten media sosial Anda, membantu Anda tetap terinspirasi dan terhubung dengan audiens dengan mudah."
                                style="display: flex; align-items: flex-end;">
                                <i class="fi fi-rr-interrogation"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4" id="content-box">
                <div class="card text-center" style="border: 1px solid rgba(0, 0, 0, 0.20);">
                    <div class="card-header py-2"
                        style="background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%));font-weight: 500;font-size: 24px;color: #ffffff;">
                        Diskon 50%
                    </div>
                    <hr class="my-0" style="border: 1px solid rgba(0, 0, 0, 0.20);">
                    <div class="card-body">
                        <h4 class="card-title"
                            style="background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%));background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 30px;">
                            Exclusive</h4>
                        <h5 class="card-title" style="font-size: 14px;font-weight: 500; color: rgba(0, 0, 0, 0.80);">
                            Dapatkan kontrol penuh dan analisis tingkat lanjut.</h5>
                        <p class="mb-0"><s>Rp 223.500 /Bln</s></p>
                        <h5 class="card-title" style="font-weight: 700; color: rgba(0, 0, 0, 0.80);">
                            <span style="font-weight: 400; font-size: 20px; vertical-align: middle;">Rp</span>
                            <span style="font-size: 40px; vertical-align: middle;">149.900</span>
                            <span style="font-weight: 400; font-size: 20px; vertical-align: middle;">/Bln</span>
                        </h5>
                        <a href="" class="btn btn-primary p-2 mb-2 pay-button"
                            data-url="{{ route('paymentHandler', '3') }}"
                            style="width: 50%; background: var(--Brand, linear-gradient(267deg, #656EEA 0%, #3CC7F4 99.52%)); box-shadow: 0px 8px 16px 0px rgba(62, 19, 77, 0.07); backdrop-filter: blur(20px); border-radius: 8px; font-weight: 600;"
                            disabled>Pilih Paket</a>
                        <div class="card-footer text-muted" style="font-size: 11px; padding-top:0">
                            Rp. 190.000/bln saat perpanjangan layanan
                        </div>
                    </div>
                    <div class="p-5 pt-0"
                        style="display: flex; flex-direction: column; align-items: flex-start; color:#000;">
                        <div>
                            <h5 class="card-title"
                                style="font-size: 15px; font-weight: 500; color: rgba(0, 0, 0, 0.80); margin-right: 10px;">
                                Sosial Media
                            </h5>
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">Unlimited</span> Akun Facebook
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">Unlimited</span> Akun Instagram
                        </div>
                        <div>
                            <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                            <span style="font-weight: 600;">Unlimited</span> Akun TikTok
                        </div>
                    </div>
                    <div class="p-5 pt-0"
                        style="display: flex; flex-direction: column; align-items: flex-end; color:#000;">
                        <div style="margin-right: auto;">
                            <h5 class="card-title"
                                style="font-size: 15px; font-weight: 500; color: rgba(0, 0, 0, 0.80); margin-right: 10px;">
                                Fitur Unggulan
                            </h5>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <div>
                                <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                                <span style="font-weight: 600;">Gratis</span> Download Hasil Analitik
                            </div>
                            <!-- Tooltip on top -->
                            <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                data-bs-html="true"
                                title="Fitur Analisis Sosial Media menyediakan pandangan komprehensif tentang kinerja Anda di media sosial dalam satu platform, membantu Anda memahami data, tren, dan interaksi dengan mudah."
                                style="display: flex; align-items: flex-end;">
                                <i class="fi fi-rr-interrogation"></i>
                            </span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <div>
                                <i class="fi fi-ss-check-circle" style="color:#00BFA6; margin-right: 5px;"></i>
                                <span style="font-weight: 600;">Gratis</span> Download Ide Generator
                            </div>
                            <!-- Tooltip on top -->
                            <span data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                data-bs-html="true"
                                title="Fitur Ide Generator adalah fitur yang membantu Anda dengan cepat menghasilkan ide kreatif untuk konten media sosial Anda, membantu Anda tetap terinspirasi dan terhubung dengan audiens dengan mudah."
                                style="display: flex; align-items: flex-end;">
                                <i class="fi fi-rr-interrogation"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.client_key') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.pay-button').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                let dataUrl = $(this).data('url');
                console.log(dataUrl);

                // Fetch Snap Token from the server
                $.ajax({
                    url: dataUrl,
                    method: 'GET',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        console.log(response);
                        // Check if the response contains a token
                        if (response.snapToken) {
                            // Trigger Snap popup
                            snap.pay(response.snapToken, {
                                onSuccess: function(result) {
                                    console.log(result);
                                    // Handle success here
                                },
                                onPending: function(result) {
                                    // Handle pending status
                                    alert("Waiting for your payment!");
                                    console.log(result);
                                },
                                onError: function(result) {
                                    // Handle payment error
                                    alert("Payment failed!");
                                    console.log(result);
                                },
                                onClose: function() {
                                    // Handle when the popup is closed
                                    alert(
                                        'You closed the popup without finishing the payment'
                                    );
                                }
                            });
                        } else {
                            alert("Failed to fetch Snap Token from the server.");
                        }
                    },
                    error: function() {
                        alert("Error fetching Snap Token from the server.");
                    }
                });
            });
        });
    </script>
@endsection
