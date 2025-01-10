    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav menu-container">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('assets/home/images/logo.png') }}" alt="Oneget" width="35"
                                height="35">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="margin-bottom: 30px">
                            <li><a href="{{ route('howitwork') }}"
                                    class="{{ request()->routeIs('howitwork') ? 'active' : '' }}">How it works</a></li>
                            <li class="dropdown">
                                <a class="dropbtn">Features &nbsp;<i id="arrow-icon" class="bi bi-chevron-down"></i></a>
                                <div class="dropdown-content wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0s">
                                    {{-- <a href="{{ route('featureanalisis') }}">Analisis</a>
                                    <a href="{{ route('featurereport') }}">Report</a>
                                    <a href="#">Feature 3</a> --}}
                                    <a href="{{ route('featureanalisis') }}" class="row option-link d-flex align-items-start">
                                        <div class="col-2 option-icon">
                                            <img src="{{ asset('assets/home/images/icon-analitic.svg') }}"alt="">
                                        </div>
                                        <div class="col ">
                                            <h6>Analisis</h6>
                                            <p>Analitik instan kendalikan strategi melalui data.</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('featurereport') }}" class="row option-link d-flex align-items-start">
                                        <div class="col-2 option-icon">
                                            <img src="{{ asset('assets/home/images/icon-report.svg') }}" alt="">
                                        </div>
                                        <div class="col ">
                                            <h6>Report</h6>
                                            <p>Raih keunggulan dengan informasi akurat.</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('featureidegenerator') }}" class="row option-link d-flex align-items-start">
                                        <div class="col-2 option-icon">
                                            <img src="{{ asset('assets/home/images/icon-ide-generator.svg') }}" alt="">
                                        </div>
                                        <div class="col ">
                                            <h6>Ide Generator</h6>
                                            <p>Temukan ide kreatif dalam hitungan detik.</p>
                                        </div>
                                    </a>
                            <li><a href="{{ route('contact-us.index') }}"
                                    class="{{ request()->routeIs('contact-us.index') ? 'active' : '' }}">Contact Us</a></li>
                            <li>
                                <div class="gradient-button"><a id="modal_trigger" href="{{ route('auth') }}"> Coba
                                        Gratis 30 Hari</a></div>
                            </li>
                        </ul>


                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
