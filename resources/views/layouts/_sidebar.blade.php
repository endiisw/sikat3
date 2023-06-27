<aside class="sidebar">
    <!-- Sidebar Header Starts -->
    <a href="/">
        <div class="sidebar-header">
            <div class="sidebar-logo-icon">
                <img src="{{ asset('images/logo-konstruksi.png') }}" alt="logo" class="h-[30px]" />
            </div>

            <div class="sidebar-logo-text">
                <h1 class="flex text-xl">
                    <span class="font-semibold text-[#030f6b] dark:text-slate-200"> SIKAT </span>
                    <span class="font-semibold text-[#fbb717]">K3</span>
                </h1>

                <p class="whitespace-nowrap text-xs text-slate-400">Sistem Informasi Pengawasan K3</p>
            </div>
        </div>
    </a>
    <!-- Sidebar Header Ends -->

    <!-- Sidebar Menu Starts -->
    <ul class="sidebar-content">
        <!-- Dashboard -->
        <li>
            <a href="{{ route('admin.home.index') }}"
                class="sidebar-menu @if (Route::is('admin.home.index')) active @endif">
                <span class="sidebar-menu-icon">
                    <i data-feather="home"></i>
                </span>
                <span class="sidebar-menu-text">Dashboard</span>
            </a>
        </li>

        <div class="sidebar-menu-header">Menu System</div>
        <li>
            <a href="javascript:void(0);" class="sidebar-menu @if (Route::is('admin.users.*', 'admin.roles.*')) active @endif">
                <span class="sidebar-menu-icon">
                    <i data-feather="settings"></i>
                </span>
                <span class="sidebar-menu-text">Pengaturan</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('admin.roles.index') }}"
                        class="sidebar-submenu-item @if (Route::is('admin.roles.*')) active @endif""> Roles </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}"
                        class="sidebar-submenu-item @if (Route::is('admin.users.*')) active @endif">Users</a>
                </li>
            </ul>
        </li>

        <div class="sidebar-menu-header">Master Data</div>

        <li>
            <a href="#" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="users"></i>
                </span>
                <span class="sidebar-menu-text">Data Pegawai</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i class="ti ti-users-group text-2xl""></i>
                </span>
                <span class="sidebar-menu-text">Data Konsultan</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i class="ti ti-building text-2xl""></i>
                </span>
                <span class="sidebar-menu-text">Data OPD</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i class="ti ti-checklist text-2xl""></i>
                </span>
                <span class="sidebar-menu-text">Data Pekerjaan</span>
            </a>
        </li>

        <!--  Commponents  -->
        <div class="sidebar-menu-header">Administrasi Data</div>
        <!-- Charts  -->
        <li>
            <a href="./chart.html" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i class="ti ti-calendar-event text-2xl"></i>
                </span>
                <span class="sidebar-menu-text">Kalender Kunjungan</span>
            </a>
        </li>
        <!-- Icons-->
        <li>
            <a href="./icons.html" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i class="ti ti-devices-pc text-2xl"></i>
                </span>
                <span class="sidebar-menu-text">Petugas SMKK</span>
            </a>
        </li>
        <!-- Typography-->
        <li>
            <a href="./typography.html" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="type"></i>
                </span>
                <span class="sidebar-menu-text">Typography</span>
            </a>
        </li>
        <!--  Pages  -->
        <div class="sidebar-menu-header">Pages</div>
        <!-- Authentication  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="lock"></i>
                </span>
                <span class="sidebar-menu-text">Authentication</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="./login.html" class="sidebar-submenu-item">Login</a>
                </li>
                <li>
                    <a href="./register.html" class="sidebar-submenu-item"> Register </a>
                </li>
                <li>
                    <a href="./recover-password.html" class="sidebar-submenu-item"> Forgot Password </a>
                </li>
                <li>
                    <a href="./reset-password.html" class="sidebar-submenu-item"> Reset Password </a>
                </li>
            </ul>
        </li>
        <!-- Miscellaneous  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="grid"></i>
                </span>
                <span class="sidebar-menu-text">Miscellaneous</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="./starter.html" class="sidebar-submenu-item"> Starter Page </a>
                </li>
                <li>
                    <a href="./comming-soon.html" class="sidebar-submenu-item"> Coming Soon </a>
                </li>
                <li>
                    <a href="./maintenance.html" class="sidebar-submenu-item"> Maintenance </a>
                </li>
                <li>
                    <a href="./404-error.html" class="sidebar-submenu-item"> Error 404 </a>
                </li>
                <li>
                    <a href="./500-error.html" class="sidebar-submenu-item"> Error 500 </a>
                </li>
                <li>
                    <a href="./not-authorized.html" class="sidebar-submenu-item"> Not Authorized </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Ends -->
</aside>
