<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ route('dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('backend/assets/images/logo.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('backend/assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route('dashboard') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ url('backend/assets/images/logo-dark.png') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('backend/assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">PGFC | ADMIN</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false"
                    aria-controls="sidebarPages" class="side-nav-link">
                    <i class="ri-pages-line"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('Data-Sekolah.index')}}">Data Sekolah</a>
                        </li>
                        <li>
                            <a href="{{route('Group-klasmen.index')}}">Group Klasmen</a>
                        </li>
                        <li>
                            <a href="pages-profile.html">Hasil Pertandingan</a>
                        </li>
                        <li>
                            <a href="{{ route('upcoming-match.index') }}">Pertandingan Selanjutnya</a>
                        </li>
                        <li>
                            <a href="pages-invoice.html">Statistik</a>
                        </li>
                        <li>
                            <a href="{{route('Bagan-Championship.index')}}">Bagan Championship</a>
                        </li>
                        <li>
                            <a href="{{route('Jadwal.index')}}">Jadwal</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                    aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-user-line"></i>
                    <span> Authentication </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('Auth-User.index')}}">Auth User</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesCMS" aria-expanded="false"
                    aria-controls="sidebarPagesCMS" class="side-nav-link">
                    <i class="ri-file-text-line"></i>
                    <span> CMS Panel </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesCMS">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="auth-login.html">Slider</a>
                        </li>
                        <li>
                            <a href="auth-login.html">Testimonial</a>
                        </li>
                        <li>
                            <a href="auth-login.html">Gambar Skema</a>
                        </li>
                        <li>
                            <a href="auth-login.html">Aturan</a>
                        </li>
                        <li>
                            <a href="auth-login.html">Blog</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->