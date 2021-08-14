<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">KopKar PT.ISP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Ts</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header"></li>
        <li class="@yield('dashboard')">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="fas fa-columns"></i> <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a class="nav-link logout" href="#"  >
                <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>
