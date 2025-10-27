<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link {{ request()->is('/') ? 'active-link' : '' }}" href="{{ url('/') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Fitur</div>
            <a class="nav-link {{ request()->routeIs('pages.statistik') ? 'active-link' : '' }}" href="{{ route('pages.statistik') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Data Statistik Sensor
            </a>

            <a class="nav-link {{ request()->routeIs('pages.history-sensor') ? 'active-link' : '' }}" href="{{ route('pages.history-sensor') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Data Histori Sensor
            </a>

            <a class="nav-link {{ request()->routeIs('pages.history-aktivitas') ? 'active-link' : '' }}" href="{{ route('pages.history-aktivitas') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                Aktivitas Petani
            </a>

            <a class="nav-link {{ request()->routeIs('pages.relay') ? 'active-link' : '' }}" href="{{ route('pages.relay') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                On Off Relay
            </a>

        </div>
    </div>

    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        PT Melonponik
    </div>
</nav>
