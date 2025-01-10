@extends('accesspoint.user.analisis_page')

@section('tampilan')
    {{-- ini nanti facebook {{ $relatedSocialMedia->username }} --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="section-title mb-4">Rangkuman Profil Facebook</div>
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
                                        <i class="fi fi-bs-social-network"></i>
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
                                        <i class="fi fi-bs-comments"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Komentar</h5>
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
            <div class="content-facebook">
                <div class="container d-flex horizontal-scroll" id="horizontalScrollContainer">
                    {{-- Nanti Foreach Disini --}}
                    <a href="#">
                        <div class="post-card-fb  d-flex">
                            <img src="https://images.unsplash.com/photo-1682686578601-e7851641d52c?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=2940"
                                alt="">
                            <div class="align-items-center">
                                <div class="post-date">
                                    2 Juni 13:00
                                </div>
                                <div class="post-desc">
                                    Momen indah bersama hewan peliharaan, mer...
                                </div>
                                <div class="post-like align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28"
                                        viewBox="0 0 30 28" fill="none">
                                        <path
                                            d="M10.85 26H6C5.44772 26 5 25.5523 5 25V15C5 14.4477 5.44772 14 6 14H10.85C10.9328 14 11 14.0672 11 14.15V25.85C11 25.9328 10.9328 26 10.85 26Z"
                                            stroke="#FF3D40" stroke-width="2" stroke-linecap="round" />
                                        <path
                                            d="M11 14L13.5157 9.95687C13.6144 9.79832 13.6667 9.61531 13.6667 9.42857V5C13.6667 4.44772 14.1144 4 14.6667 4H17C18.1046 4 19 4.89543 19 6V14"
                                            stroke="#FF3D40" stroke-width="2" stroke-linecap="round" />
                                        <path
                                            d="M16.8182 14H24.7637C25.9564 14 26.884 15.0371 26.7513 16.2224L25.7443 25.2224C25.6311 26.2346 24.7753 27 23.7568 27H17.2304C16.9663 27 16.713 26.8956 16.5257 26.7096L15.6561 25.846C15.4688 25.66 15.2155 25.5556 14.9515 25.5556H11"
                                            stroke="#FF3D40" stroke-width="2" stroke-linecap="round" />
                                    </svg>&nbsp;&nbsp;&nbsp;15.989
                                </div>
                            </div>
                            <div class="number-post">1</div>
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
            <div class="post-section">
                <div class="section-title mt-5 mb-3">Postingan</div>

                <div class="post-facebook pb-5 pt-4 ps-0 pe-0 m-0">
                    {{-- Nanti foreach disini --}}
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#fullscreenModalFacebook">
                        <div class="post-card-fb  d-flex">
                            <img src="https://images.unsplash.com/photo-1682686578601-e7851641d52c?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=2940"
                                alt="">
                            <div class="align-items-center">
                                <div class="post-date">
                                    2 Juni 13:00
                                </div>
                                <div class="post-desc">
                                    Saatnya bersantai dengan buku favorit dan secangkit kopi
                                </div>
                                <div class="post-like d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28"
                                        viewBox="0 0 30 28" fill="none">
                                        <path
                                            d="M10.85 26H6C5.44772 26 5 25.5523 5 25V15C5 14.4477 5.44772 14 6 14H10.85C10.9328 14 11 14.0672 11 14.15V25.85C11 25.9328 10.9328 26 10.85 26Z"
                                            stroke="#FF3D40" stroke-width="2" stroke-linecap="round" />
                                        <path
                                            d="M11 14L13.5157 9.95687C13.6144 9.79832 13.6667 9.61531 13.6667 9.42857V5C13.6667 4.44772 14.1144 4 14.6667 4H17C18.1046 4 19 4.89543 19 6V14"
                                            stroke="#FF3D40" stroke-width="2" stroke-linecap="round" />
                                        <path
                                            d="M16.8182 14H24.7637C25.9564 14 26.884 15.0371 26.7513 16.2224L25.7443 25.2224C25.6311 26.2346 24.7753 27 23.7568 27H17.2304C16.9663 27 16.713 26.8956 16.5257 26.7096L15.6561 25.846C15.4688 25.66 15.2155 25.5556 14.9515 25.5556H11"
                                            stroke="#FF3D40" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    <div class="like">&nbsp;&nbsp;5.989</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M4.32698 6.63803L5.21799 7.09202L4.32698 6.63803ZM4.7682 20.2318L4.06109 19.5247H4.06109L4.7682 20.2318ZM18.362 16.673L18.816 17.564L18.816 17.564L18.362 16.673ZM19.673 15.362L20.564 15.816L20.564 15.816L19.673 15.362ZM19.673 6.63803L20.564 6.18404L20.564 6.18404L19.673 6.63803ZM18.362 5.32698L18.816 4.43597L18.816 4.43597L18.362 5.32698ZM5.63803 5.32698L6.09202 6.21799L5.63803 5.32698ZM7.70711 17.2929L7 16.5858L7.70711 17.2929ZM5 9.8C5 8.94342 5.00078 8.36113 5.03755 7.91104C5.07337 7.47262 5.1383 7.24842 5.21799 7.09202L3.43597 6.18404C3.18868 6.66937 3.09012 7.18608 3.04419 7.74817C2.99922 8.2986 3 8.97642 3 9.8H5ZM5 12V9.8H3V12H5ZM3 12V17H5V12H3ZM3 17V19.9136H5V17H3ZM3 19.9136C3 21.2054 4.56185 21.8524 5.4753 20.9389L4.06109 19.5247C4.40757 19.1782 5 19.4236 5 19.9136H3ZM5.4753 20.9389L8.41421 18L7 16.5858L4.06109 19.5247L5.4753 20.9389ZM15.2 16H8.41421V18H15.2V16ZM17.908 15.782C17.7516 15.8617 17.5274 15.9266 17.089 15.9624C16.6389 15.9992 16.0566 16 15.2 16V18C16.0236 18 16.7014 18.0008 17.2518 17.9558C17.8139 17.9099 18.3306 17.8113 18.816 17.564L17.908 15.782ZM18.782 14.908C18.5903 15.2843 18.2843 15.5903 17.908 15.782L18.816 17.564C19.5686 17.1805 20.1805 16.5686 20.564 15.816L18.782 14.908ZM19 12.2C19 13.0566 18.9992 13.6389 18.9624 14.089C18.9266 14.5274 18.8617 14.7516 18.782 14.908L20.564 15.816C20.8113 15.3306 20.9099 14.8139 20.9558 14.2518C21.0008 13.7014 21 13.0236 21 12.2H19ZM19 9.8V12.2H21V9.8H19ZM18.782 7.09202C18.8617 7.24842 18.9266 7.47262 18.9624 7.91104C18.9992 8.36113 19 8.94342 19 9.8H21C21 8.97642 21.0008 8.2986 20.9558 7.74817C20.9099 7.18608 20.8113 6.66937 20.564 6.18404L18.782 7.09202ZM17.908 6.21799C18.2843 6.40973 18.5903 6.71569 18.782 7.09202L20.564 6.18404C20.1805 5.43139 19.5686 4.81947 18.816 4.43597L17.908 6.21799ZM15.2 6C16.0566 6 16.6389 6.00078 17.089 6.03755C17.5274 6.07337 17.7516 6.1383 17.908 6.21799L18.816 4.43597C18.3306 4.18868 17.8139 4.09012 17.2518 4.04419C16.7014 3.99922 16.0236 4 15.2 4V6ZM8.8 6H15.2V4H8.8V6ZM6.09202 6.21799C6.24842 6.1383 6.47262 6.07337 6.91104 6.03755C7.36113 6.00078 7.94342 6 8.8 6V4C7.97642 4 7.2986 3.99922 6.74817 4.04419C6.18608 4.09012 5.66937 4.18868 5.18404 4.43597L6.09202 6.21799ZM5.21799 7.09202C5.40973 6.71569 5.71569 6.40973 6.09202 6.21799L5.18404 4.43597C4.43139 4.81947 3.81947 5.43139 3.43597 6.18404L5.21799 7.09202ZM8.41421 18V16C7.88378 16 7.37507 16.2107 7 16.5858L8.41421 18Z"
                                            fill="#222222" />
                                        <path d="M8 9L16 9" stroke="#222222" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 13L13 13" stroke="#222222" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div>&nbsp;&nbsp;15.989</div>
                                </div>

                            </div>
                        </div>
                    </a>
                    {{-- Endforeach --}}
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
    @include('accesspoint.user.partials.facebook_details')
@endsection
@section('js')
    <script>
        // script.js
        const expandButton = document.getElementById('expand-button');
        const imageContainer = document.querySelector('.post-facebook');

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
@endsection
