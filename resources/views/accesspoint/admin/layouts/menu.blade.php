<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.index') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                    <i class="mdi mdi-numeric-1-circle mdi-36px"></i>
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Get</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ Request::is('admin') || Request::is('admin/user') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                {{-- <div class="badge bg-danger rounded-pill ms-auto">5</div> --}}
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="menu-link">
                        <div data-i18n="Home">Home</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/user') ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="menu-link">
                        <div data-i18n="User Management">User Management</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header fw-medium mt-4">
            {{-- <span class="menu-header-text">Apps &amp; Pages</span> --}}
            <span class="menu-header-text">Guest</span>
        </li>

        <!-- Pages -->
        <li class="menu-item {{ Request::is('admin/contact-us') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                <div data-i18n="Contact Us">Contact Us</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/contact-us') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact-us.index') }}" class="menu-link">
                        <div data-i18n="Account">Contact From User</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header fw-medium mt-4">
            {{-- <span class="menu-header-text">Apps &amp; Pages</span> --}}
            <span class="menu-header-text">Auth</span>
        </li>
        <li class="menu-item {{ Request::is('admin/payment') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-cash-multiple"></i>
                <div data-i18n="Order">Payment</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('admin/payment') ? 'active' : '' }}">
                    <a href="{{ route('admin.payment.index') }}" class="menu-link">
                        <div data-i18n="Data Order">Data Payment</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::is('admin/analytic-brief') ? 'active' : '' }}">
            <a href="{{ route('admin.analytic-brief.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-comment-quote"></i>
                <div data-i18n="Order">Analytic Brief</div>
            </a>
        </li>
    </ul>
</aside>
