<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/user/') }}" data-template="vertical-menu-template-free">

<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title', 'Untitled')</title>
    @yield('css')

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/home/images/White Logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/user/vendor/fonts/boxicons.css') }}" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/user/vendor/js/helpers.js') }}"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.client_key') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/user/js/config.js') }}"></script>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('accesspoint.user.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @yield('navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('accesspoint.user.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
        <!-- Enable Backdrop -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-buy-now" data-bs-toggle="modal"
            data-bs-target="#backDropModal">
            FAQ
        </button>

        <!-- Modal -->
        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="modalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalScrollableTitle">Frequently Asked Questions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne"
                                        role="tabpanel">
                                        Apa yang dimaksud dengan "All-in-One Analytic Dashboard"?
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dashboard All-in-One Analytics adalah fitur yang mengumpulkan data dari berbagai
                                        platform sosial ke dalam satu dashboard yang terpadu. Ini memungkinkan pengguna
                                        untuk melihat dan menganalisis performa secara komprehensif dari berbagai sumber
                                        data.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false"
                                        aria-controls="accordionTwo" role="tabpanel">
                                        Platform apa saja yang dapat diakses melalui All-in-One Analytic Dashboard?
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dashboard ini menyediakan akses ke platform seperti Facebook, Instagram, dan
                                        tiktok dalam satu tampilan terpadu.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionThree"
                                        aria-expanded="false" aria-controls="accordionThree" role="tabpanel">
                                        Bagaimana Ide Generator membantu dalam strategi konten?

                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Fitur Ide Generator memberikan rekomendasi ide kreatif berdasarkan analisis data
                                        yang dapat membantu pengguna dalam merencanakan dan mengembangkan strategi
                                        konten yang lebih efektif.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionFour"
                                        aria-expanded="false" aria-controls="accordionFour" role="tabpanel">
                                        Apakah Ide Generator didasarkan pada jenis konten tertentu?
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ide Generator mengambil inspirasi dari berbagai jenis konten yang sukses di
                                        platform media sosial dan memberikan saran yang relevan untuk memenuhi kebutuhan
                                        pengguna.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionFive"
                                        aria-expanded="false" aria-controls="accordionFive" role="tabpanel">
                                        Apa yang dimaksud dengan Sentimen Analysis?

                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Sentimen Analysis adalah fitur yang menganalisis opini atau perasaan pengguna
                                        terhadap merek, produk, atau layanan berdasarkan data yang terkumpul dari
                                        platform sosial.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionSix"
                                        aria-expanded="false" aria-controls="accordionSix" role="tabpanel">
                                        Bagaimana Sentimen Analysis membantu dalam pengambilan keputusan strategis?
                                    </button>
                                </h2>
                                <div id="accordionSix" class="accordion-collapse collapse"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Fitur ini membantu pengguna untuk memahami pandangan dan reaksi pengguna
                                        terhadap merek mereka, membantu dalam menyusun strategi yang lebih sesuai dengan
                                        kebutuhan dan preferensi pengguna.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionSeven"
                                        aria-expanded="false" aria-controls="accordionSeven" role="tabpanel">
                                        Apa peran User Feedback dalam analisis media sosial?
                                    </button>
                                </h2>
                                <div id="accordionSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        User Feedback adalah fitur yang memungkinkan pengguna untuk mengumpulkan dan
                                        menganalisis pendapat, komentar, dan tanggapan pengguna secara terstruktur dari
                                        berbagai platform.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionEight"
                                        aria-expanded="false" aria-controls="accordionEight" role="tabpanel">
                                        Bagaimana User Feedback membantu dalam meningkatkan interaksi dengan pengguna?
                                    </button>
                                </h2>
                                <div id="accordionEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Melalui fitur ini, pengguna dapat memahami tanggapan langsung dari pengguna
                                        mereka, memungkinkan perbaikan produk, layanan, atau konten untuk meningkatkan
                                        interaksi.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionNine"
                                        aria-expanded="false" aria-controls="accordionNine" role="tabpanel">
                                        Apa yang dimaksud dengan Analytic Brief?
                                    </button>
                                </h2>
                                <div id="accordionNine" class="accordion-collapse collapse"
                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Analytic Brief adalah ringkasan singkat yang memberikan gambaran umum tentang
                                        hasil analisis data dan memberikan saran strategis untuk meningkatkan performa
                                        kampanye atau konten.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionTen"
                                        aria-expanded="false" aria-controls="accordionTen" role="tabpanel">
                                        Bagaimana Analytic Brief membantu dalam pengambilan keputusan?
                                    </button>
                                </h2>
                                <div id="accordionTen" class="accordion-collapse collapse"
                                    aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Fitur ini memberikan gambaran komprehensif tentang analisis data yang relevan,
                                        membantu pengguna untuk membuat keputusan yang lebih terinformasi dalam strategi
                                        pemasaran dan pengembangan konten.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/user/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/user/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/user/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/user/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Include moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Include daterangepicker CSS and JS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.client_key') }}"></script>


    <script>
        function submitLogoutForm() {
            document.getElementById("logout-form").submit();
        }
    </script>

    {{-- Script Tabs --}}

    <script>
        function addNewTab() {
            // Lakukan permintaan AJAX ke endpoint tabs.store
            fetch('{{ route('tabs.store') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({}),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle response
                    console.log(data);

                    // Check if the 'slug' property exists in the response
                    if (data.tab && data.tab.slug) {
                        // Use the extracted slug to navigate to the new tab
                        window.location.href = '{{ url('tabs') }}/t/' + data.tab.slug;
                    } else {
                        // Handle the case where 'slug' is missing in the response
                        console.error('Error: Missing slug in the server response');
                    }
                })
                .catch(error => {
                    // Handle error
                    console.error('Error:', error);
                });
        }

        function deleteTab(slug) {
            // Implement AJAX request to delete the tab with the given slug
            fetch('{{ url('tabs/delete') }}/' + slug, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Handle response, e.g., update the UI
                    console.log(data);

                    // Reload the page after successfully deleting the tab
                    window.location.href = '/analisis'
                })
                .catch(error => {
                    // Handle error, e.g., show an alert
                    console.error('Error:', error);
                });
        }
    </script>

    @yield('js')

</body>

</html>
