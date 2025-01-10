    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <img style="max-width: 160px" src="{{ asset('assets/home/images/logo.png') }}" alt="Oneget">
                        <p>Platform Integrasi Sosial Media Tersentral untuk Keberhasilan Digital Anda.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h4>Home</h4>
                        <ul>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="{{ route('contact-us.create') }}">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h4>Resource</h4>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Forum</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-divider">
            <hr>
            <p>© 2023 Oneget. All Rights Reserved.</p>
            <a class="terms" href="{{ route('terms') }}">Terms of Service</a>
            <a class="privacy" href="{{ route('privacy') }}">Privacy Policy</a>
        </div>
    </footer>
