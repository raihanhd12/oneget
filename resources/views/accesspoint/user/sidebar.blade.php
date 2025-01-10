<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('user') }}" class="app-brand-link">
            <span class="app-brand-logo demo ">
                <img src="{{ asset('assets/auth/images/logo.png') }}" alt="Oneget">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="fi fi-ss-angle-circle-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ">
        <li class="menu-item {{ Request::is('user') ? 'active' : '' }}">
            <a href="{{ route('user') }}" class="menu-link">
                <i class="menu-icon fi fi-bs-apps"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ (Request::is('analisis') ? 'active' : '' || Request::is('tabs/*')) ? 'active' : '' }} ">
            <a href="{{ route('analisis') }}" class="menu-link">
                <i class="menu-icon fi fi-bs-chart-histogram"></i>
                <div data-i18n="Dashboard">Analisis</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('hasil') || Request::is('hasil/add-report') ? 'active' : '' }}">
            <a href="{{ route('hasil') }}" class="menu-link">
                <i class="menu-icon fi fi-bs-document"></i>
                <div data-i18n="Results">Hasil</div>
            </a>
        </li>
        <li
            class="menu-item {{ Request::is('ide-generator') || Request::is('ide-generator/history') ? 'active' : '' }}">
            <a href="{{ route('ideGenerator') }}" class="menu-link">
                <i class="menu-icon fi fi-bs-search-alt"></i>
                <div data-i18n="Idea Generator">Ide Generator</div>
            </a>
        </li>
        <li class="menu-item">
            <div class="menu-link" style="background: none!important">
                @if ($errors->any())
                    <div id="errorAlert" class="alert alert-danger alert-dismissible text-center" role="alert">
                        @foreach ($errors->all() as $item)
                            {{ $item }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        @endforeach
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('errorAlert').style.display = 'none';
                        }, 3000);
                    </script>
                @endif
                @if (Session::get('success'))
                    <div id="successAlert" class="alert alert-success alert-dismissible text-center" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <script>
                        setTimeout(function() {
                            document.getElementById('successAlert').style.display = 'none';
                        }, 3000);
                    </script>
                @endif
            </div>
        </li>

        <ul class="menu-inner" style="justify-content:flex-end">
            <li class="menu-item py-2">
                <a href="{{ route('payment') }}" class="menu-link justify-content-center"
                    style="border-radius: 8px; background: var(--Background, linear-gradient(216deg, rgba(101, 110, 234, 0.15) 34.86%, rgba(60, 199, 244, 0.15) 69.5%));">
                    <i class="menu-icon fi fi-bs-megaphone" style="font-size: 30px; margin-right:1rem"></i>
                    <div style="display: flex; flex-direction: column; align-items: flex-start;">
                        <span data-i18n="Get" style="text-align: left;">Dapatkan</span>
                        <span data-i18n="Premium" style="text-align: left;">Premium</span>
                    </div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('social-profiles') ? 'active' : '' }}">
                <a href="{{ route('socialProfiles') }}" class="menu-link">
                    <i class="menu-icon fi fi-bs-user"></i>
                    <div data-i18n="Social Profiles">Social Profiles</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link" onclick="submitLogoutForm()">
                    <i class="menu-icon fi fi-bs-exit"></i>
                    <div data-i18n="Logout">Logout</div>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </ul>
</aside>
