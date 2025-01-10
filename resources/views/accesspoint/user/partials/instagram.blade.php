@extends('accesspoint.user.analisis_page')

@section('tampilan')
    {{-- ini nanti instagram {{ $relatedSocialMedia->username }} --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="section-title mb-4">Rangkuman Profil Instagram</div>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <i class="fi fi-bs-laugh-beam"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Pengikut</h5>
                                    </div>
                                </div>
                                <h1 class="card-title mb-2">19.087</h1>
                                <small class="text-success"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                <small class="ml-2 me-4">dari 5 hari terakhir</small>
                            </div>
                            <span class="arrow-up-icon rounded bg-label-success me-2"><i class="bx bx-up-arrow-alt"
                                    style="font-size: 30px;"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <i class="fi fi-bs-heart"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Suka</h5>
                                    </div>
                                </div>
                                <h1 class="card-title mb-2">35.890</h1>
                                <small class="text-success"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                <small class="ml-2 me-4">dari 5 hari terakhir</small>
                            </div>
                            <span class="arrow-up-icon rounded bg-label-success me-2"><i class="bx bx-up-arrow-alt"
                                    style="font-size: 30px;"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <i class="fi fi-bs-picture"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Postingan</h5>
                                    </div>
                                </div>
                                <h1 class="card-title mb-2">6.678</h1>
                                <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                                <small class="ml-2 me-4">dari 5 hari terakhir</small>
                            </div>
                            <span class="arrow-up-icon rounded bg-label-danger me-2"><i class="bx bx-down-arrow-alt"
                                    style="font-size: 30px;"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <i class="fi fi-bs-chart-histogram"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Reach</h5>
                                    </div>
                                </div>
                                <h1 class="card-title mb-2">19.087</h1>
                                <small class="text-success"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                <small class="ml-2 me-4">dari 5 hari terakhir</small>
                            </div>
                            <span class="arrow-up-icon rounded bg-label-success me-2"><i class="bx bx-up-arrow-alt"
                                    style="font-size: 30px;"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--analitik profil-->
            <div class="row m-0 p-0">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div style="position: relative; z-index: 1;">
                                <div style="position: absolute; top: 0; right: 0; z-index: 2;">
                                    <select class="monthDropDown" id="monthSelector">
                                        <option value="0">Jan 2023</option>
                                        <option value="1">Feb 2023</option>
                                        <option value="2">Mar 2023</option>
                                    </select>
                                </div>
                                <div id="followersChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div id="ageChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div id="genderChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div style="position: relative; z-index: 1;">
                                <div style="position: absolute; top: 0; right: 0; z-index: 2;">
                                    <select class="monthDropDown" id="monthSelectorTime">
                                        <option value="0">Jan 2023</option>
                                        <option value="1">Feb 2023</option>
                                        <option value="2">Mar 2023</option>
                                    </select>
                                </div>
                                <div id="timeChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--top post-->
            <div class="section-title mt-5 mb-3">Postingan Paling Banyak Disukai</div>
            <div class="container-wrapper">
                <div class="container d-flex horizontal-scroll m-0" id="horizontalScrollContainer">
                    {{-- Nanti Foreach Disini --}}
                    <a href="#">
                        <div class="post-card">
                            <div class="number-post">1</div>
                            <img src="https://images.unsplash.com/photo-1682686578601-e7851641d52c?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=2940"
                                alt="">
                            <div class="mt-2 like-number align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path
                                        d="M5.93421 18.5442L15.3153 27.3567C15.6397 27.6615 15.802 27.8139 16 27.8139C16.198 27.8139 16.3602 27.6615 16.6847 27.3567L26.0657 18.5442C28.674 16.094 28.9907 12.0621 26.7971 9.23467L26.3846 8.70304C23.7603 5.32069 18.4928 5.88794 16.6489 9.75145C16.3884 10.2972 15.6116 10.2972 15.3511 9.75145C13.5071 5.88794 8.23961 5.32069 5.61537 8.70304L5.2029 9.23467C3.00924 12.0621 3.32598 16.094 5.93421 18.5442Z"
                                        fill="#FF3D40" stroke="#FF3D40" stroke-width="2" />
                                </svg>&nbsp;&nbsp;&nbsp;15.989
                            </div>
                        </div>
                    </a>
                    {{-- Endforeach --}}
                    <div class="side-button" id="scrollRightButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52"
                            fill="none">
                            <g clip-path="url(#clip0_1035_535)">
                                <path
                                    d="M17.6085 52L38.207 31.3733C39.6243 29.9494 40.42 28.0221 40.42 26.013C40.42 24.0039 39.6243 22.0766 38.207 20.6527L17.5847 0L13 4.5955L33.6223 25.246C33.8254 25.4492 33.9395 25.7247 33.9395 26.0119C33.9395 26.2992 33.8254 26.5747 33.6223 26.7778L13.0217 47.4045L17.6085 52Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1035_535">
                                    <rect width="52" height="52" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <!--post-->
            <div class="post-section">
                <div class="section-title mt-5 mb-5">Postingan</div>
                <div class="row post-instagram pb-5">
                    {{-- Nanti Foreach Disini --}}
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-1">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#fullscreenModalInstagram">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1682695795255-b236b1f1267d?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=2940"
                                    alt="">
                                <div class="like-post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="none">
                                        <path
                                            d="M3.52347 11.0107L9.02762 16.1813C9.14937 16.2957 9.21025 16.3529 9.27463 16.3854C9.41637 16.457 9.58368 16.457 9.72541 16.3854C9.78979 16.3529 9.85066 16.2957 9.97241 16.1813L9.97242 16.1813L15.4766 11.0107C17.0252 9.55597 17.2133 7.16197 15.9108 5.48322L15.6659 5.16756C14.1077 3.15929 10.9801 3.49609 9.8853 5.79005C9.73065 6.11409 9.2694 6.11409 9.11474 5.79005C8.0199 3.49609 4.8923 3.15929 3.33416 5.16756L3.08925 5.48322C1.78677 7.16197 1.97483 9.55596 3.52347 11.0107Z"
                                            fill="#FF3D40" stroke="#FF3D40" stroke-width="2" />
                                    </svg>&nbsp;&nbsp;&nbsp;15.989&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                        viewBox="0 0 19 19" fill="none">
                                        <g clip-path="url(#clip0_931_3178)">
                                            <path
                                                d="M18.9999 19H9.51337C7.6601 18.999 5.8476 18.4559 4.29912 17.4376C2.75064 16.4194 1.5338 14.9705 0.798472 13.2693C0.0631453 11.5682 -0.158551 9.68912 0.160688 7.86355C0.479928 6.03799 1.32616 4.34566 2.59516 2.99502C3.86416 1.64437 5.5005 0.694389 7.30264 0.262082C9.10478 -0.170225 10.994 -0.0659794 12.7377 0.56198C14.4813 1.18994 16.0032 2.31419 17.1159 3.79625C18.2286 5.27832 18.8835 7.05348 18.9999 8.90308V8.9775V19ZM9.51337 2.375C8.5777 2.375 7.65119 2.55929 6.78675 2.91736C5.9223 3.27542 5.13685 3.80025 4.47523 4.46186C3.81361 5.12348 3.28879 5.90894 2.93073 6.77338C2.57266 7.63783 2.38837 8.56433 2.38837 9.5C2.38837 10.4357 2.57266 11.3622 2.93073 12.2266C3.28879 13.0911 3.81361 13.8765 4.47523 14.5381C5.13685 15.1998 5.9223 15.7246 6.78675 16.0826C7.65119 16.4407 8.5777 16.625 9.51337 16.625H16.6249V9.01629C16.4995 7.21502 15.6961 5.52823 14.3764 4.29583C13.0567 3.06343 11.319 2.37705 9.51337 2.375Z"
                                                fill="white" />
                                            <path d="M11.0834 6.3335H6.33344V8.7085H11.0834V6.3335Z" fill="white" />
                                            <path d="M14.2501 11.0835H6.33344V13.4585H14.2501V11.0835Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_931_3178">
                                                <rect width="19" height="19" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>&nbsp;&nbsp;&nbsp;230
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- Endforeach --}}
                    <div id="expand-button">
                        <button class="more">Lihat Selengkapnya&nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_931_3280)">
                                    <path
                                        d="M-7.62939e-06 8.05696L9.51999 17.564C10.1772 18.2181 11.0667 18.5853 11.994 18.5853C12.9213 18.5853 13.8108 18.2181 14.468 17.564L24 8.04595L21.879 5.92896L12.348 15.446C12.2542 15.5397 12.1271 15.5923 11.9945 15.5923C11.8619 15.5923 11.7348 15.5397 11.641 15.446L2.12099 5.93996L-7.62939e-06 8.05696Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_931_3280">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('accesspoint.user.partials.instagram_details')
@endsection
@section('js')
    <script>
        // script.js
        const expandButton = document.getElementById('expand-button');
        const imageContainer = document.querySelector('.post-instagram');

        expandButton.addEventListener('click', function() {
            imageContainer.style.maxHeight = 'none'; // Hapus batasan tinggi
            expandButton.style.display = 'none'; // Sembunyikan tombol Expand
        });

        // Periksa apakah perlu menampilkan tombol Expand
        if (imageContainer.scrollHeight > imageContainer.clientHeight) {
            expandButton.style.display = 'block';
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollRightButton = document.getElementById("scrollRightButton");
            const horizontalScrollContainer = document.getElementById("horizontalScrollContainer");

            horizontalScrollContainer.addEventListener("scroll", function() {
                if (horizontalScrollContainer.scrollLeft > 0) {
                    scrollRightButton.style.display =
                        "none"; // Tombol disembunyikan saat ada scroll horizontal
                } else {
                    scrollRightButton.style.display =
                        "flex"; // Tombol ditampilkan saat scroll horizontal di puncak
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const horizontalScrollContainer = document.getElementById("horizontalScrollContainer");
            const scrollRightButton = document.getElementById("scrollRightButton");

            const scrollAmount = 200; // Jarak scroll setiap kali tombol ditekan (sesuaikan dengan kebutuhan)

            scrollRightButton.addEventListener("click", function() {
                horizontalScrollContainer.scrollLeft += scrollAmount;
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const horizontalScrollContainer = document.querySelector(".horizontal-scroll");

            let isMouseDown = false;
            let startX;
            let scrollLeft;

            horizontalScrollContainer.addEventListener("mousedown", (e) => {
                isMouseDown = true;
                startX = e.pageX - horizontalScrollContainer.offsetLeft;
                scrollLeft = horizontalScrollContainer.scrollLeft;
            });

            horizontalScrollContainer.addEventListener("mouseup", () => {
                isMouseDown = false;
            });

            horizontalScrollContainer.addEventListener("mousemove", (e) => {
                if (!isMouseDown) return;
                e.preventDefault();
                const x = e.pageX - horizontalScrollContainer.offsetLeft;
                const walk = (x - startX) * 3; // Atur kecepatan scrolling sesuai kebutuhan
                horizontalScrollContainer.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
    <script>
        function showWaiting() {
            // Sembunyikan tombol
            document.getElementById("feedbackButton").style.display = "none";
            // Tampilkan pesan menunggu
            document.getElementById("waitingMessage").style.display = "block";
        }
    </script>
@endsection
