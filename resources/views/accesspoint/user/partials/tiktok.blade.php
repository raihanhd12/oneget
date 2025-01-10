@extends('accesspoint.user.analisis_page')

@section('tampilan')
    {{-- ini nanti tiktok {{ $relatedSocialMedia->username }} --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="section-title mb-4">Rangkuman Profil TikTok</div>
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
                                <h1 class="card-title mb-2">{{ formatNumber($hasilAnalisisTiktok[0]->sum("followers")) }}</h1>
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
                                <h1 class="card-title mb-2">{{ formatNumber($hasilAnalisisTiktok[0]->sum("likes")) }}</h1>
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
                                <h1 class="card-title mb-2">{{ formatNumber($hasilAnalisisTiktok[0]->sum("posts")) }}</h1>
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
                                        <i class="fi fi-bs-play"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Ditonton</h5>
                                    </div>
                                </div>
                                <h1 class="card-title mb-2">{{ formatNumber($hasilAnalisisTiktok[0]->sum("views")) }}</h1>
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
            <div class="container content-tiktok">
                <!--top post-->
                <div class="section-title mt-5 mb-3">Postingan Paling Banyak Disukai</div>
                <div class="container d-flex horizontal-scroll" id="horizontalScrollContainer">
                    @foreach ($postinganTiktokLike as $idx => $ptl)
                        <div class="post-card">
                            <div class="number-post">{{ $idx + 1 }}</div>
                            <iframe
                                src="https://www.tiktok.com/static/profile-video?id={{ $ptl->tiktok_post_id }}&hide_author=1&utm_campaign=tt4d_open_api&utm_source=awkv1e530i6txmpu"
                                frameborder="0" allowfullscreen muted playsinline></iframe>
                            <div class="mt-2 like-number align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32"
                                    viewBox="0 0 35 32" fill="none">
                                    <path
                                        d="M5.93421 18.5442L15.3153 27.3567C15.6397 27.6615 15.802 27.8139 16 27.8139C16.198 27.8139 16.3602 27.6615 16.6847 27.3567L26.0657 18.5442C28.674 16.094 28.9907 12.0621 26.7971 9.23467L26.3846 8.70304C23.7603 5.32069 18.4928 5.88794 16.6489 9.75145C16.3884 10.2972 15.6116 10.2972 15.3511 9.75145C13.5071 5.88794 8.23961 5.32069 5.61537 8.70304L5.2029 9.23467C3.00924 12.0621 3.32598 16.094 5.93421 18.5442Z"
                                        fill="#FF3D40" stroke="#FF3D40" stroke-width="2" />
                                </svg>&nbsp;&nbsp;&nbsp;{{ formatNumber($ptl->tiktok_post_like_count) }}
                            </div>
                        </div>
                    @endforeach
                    {{-- EndForeach --}}
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
                <!--post-->
                <div class="post-section m-0 p-0">
                    <div class="section-title mt-5 mb-5">Postingan</div>
                    <div class="row post-instagram pb-5">
                        @foreach ($postinganTiktok as $pt)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-1">
                                <a href="javascript:void(0)" class="open-modal" data-bs-toggle="modal"
                                    data-bs-target="#fullscreenModalTiktok"
                                    data-tiktok-username="{{ $pt->tiktok->username }}"
                                    data-tiktok-video="{{ $pt->tiktok_post_id }}"
                                    data-tiktok-caption="{{ $pt->tiktok_post_caption }}"
                                    data-tiktok-like_count="{{ $pt->tiktok_post_like_count }}"
                                    data-tiktok-comment_count="{{ $pt->tiktok_post_comment_count }}"
                                    data-tiktok-share_count="{{ $pt->tiktok_post_share_count }}"
                                    data-tiktok-play_count="{{ $pt->tiktok_post_play_count }}">
                                    <div class="post-img-tiktok">
                                        <img
                                            src="{{ $pt->tiktok_post_thumbnail }}">
                                        <div class="show-detail" style="width: 100%">
                                            <i class="fi fi-bs-eye" style="font-size: 200%"></i>
                                        </div>

                                        <div class="like-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M3.95837 18.8108V0.22168L15.0647 7.31185C15.4346 7.54605 15.7391 7.87011 15.9499 8.2538C16.1608 8.63749 16.271 9.06831 16.2704 9.50611C16.2697 9.94391 16.1583 10.3744 15.9463 10.7575C15.7344 11.1406 15.4289 11.4638 15.0583 11.6969L3.95837 18.8108ZM6.33337 4.55606V14.4669L13.7845 9.6916C13.8187 9.67342 13.8472 9.6461 13.8668 9.61269C13.8863 9.57929 13.8962 9.5411 13.8954 9.50239C13.8967 9.46538 13.8879 9.42871 13.8699 9.39635C13.8519 9.36398 13.8254 9.33714 13.7932 9.31872L6.33337 4.55606Z"
                                                    fill="white" />
                                            </svg>&nbsp;&nbsp;&nbsp;{{ formatNumber($pt->tiktok_post_play_count) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M3.52347 11.011L9.02762 16.1816C9.14937 16.2959 9.21025 16.3531 9.27463 16.3856C9.41637 16.4572 9.58368 16.4572 9.72541 16.3856C9.78979 16.3531 9.85066 16.2959 9.97241 16.1816L9.97242 16.1816L15.4766 11.011C17.0252 9.55621 17.2133 7.16222 15.9108 5.48346L15.6659 5.1678C14.1077 3.15953 10.9801 3.49634 9.8853 5.7903C9.73065 6.11433 9.2694 6.11433 9.11474 5.7903C8.0199 3.49634 4.8923 3.15953 3.33416 5.1678L3.08925 5.48346C1.78677 7.16222 1.97483 9.55621 3.52347 11.011Z"
                                                    fill="white" stroke="white" stroke-width="2" />
                                            </svg>&nbsp;&nbsp;&nbsp;{{ formatNumber($pt->tiktok_post_like_count) }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
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
    @include('accesspoint.user.partials.tiktok_details')
@endsection

@section('js')
    <script>
        function formatNumber($num) {
            if ($num > 1000 && $num < 1000000) {
                return number_format($num / 1000, 1).
                'K';
            } else if ($num >= 1000000) {
                return number_format($num / 1000000, 1).
                'M';
            } else {
                return $num;
            }
        }
    </script>
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
        function formatNumber(num) {
            if (num >= 1000 && num < 1000000) {
                return (num / 1000).toFixed(1) + 'K';
            } else if (num >= 1000000 && num < 1000000000) {
                return (num / 1000000).toFixed(1) + 'M';
            } else if (num >= 1000000000) {
                return (num / 1000000000).toFixed(1) + 'B';
            } else {
                return num.toString();
            }
        }

        $(document).ready(function() {
            $('.open-modal').click(function() {
                // Get data from the clicked link
                var tiktokUsername = $(this).data('tiktok-username');
                var tiktokVideo = $(this).data('tiktok-video');
                var tiktokCaption = $(this).data('tiktok-caption');
                var tiktokLikeCount = $(this).data('tiktok-like_count');
                var tiktokCommentCount = $(this).data('tiktok-comment_count');
                var tiktokShareCount = $(this).data('tiktok-share_count');
                var tiktokPlayCount = $(this).data('tiktok-play_count');
                var iframeSrc = 'https://www.tiktok.com/static/profile-video?id=' + tiktokVideo +
                    '&hide_author=1&utm_campaign=tt4d_open_api&utm_source=awkv1e530i6txmpu';

                // Update modal content
                $('#usernameTiktok').text('Rangkuman Profil Tiktok : ' + tiktokUsername);
                $('#tiktokiframe').attr('src', iframeSrc);
                $('#suka').text(formatNumber(tiktokLikeCount));
                $('#komentar').text(formatNumber(tiktokCommentCount));
                $('#bagikan').text(formatNumber(tiktokShareCount));
                $('#tonton').text(formatNumber(tiktokPlayCount));

                // Trigger the modal to open
                $('#fullscreenModalTiktok').modal('show');
            });

            // Add event listener for modal close event
            $('#fullscreenModalTiktok').on('hidden.bs.modal', function() {
                // Refresh the browser when the modal is closed
                location.reload();
            });
        });
    </script>
@endsection
