<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                    class="dark-logo" width="180" alt="" />
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                    class="light-logo" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- Home -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- Dashboard -->
                <li class="sidebar-item {{ Request::is('/dashboard') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <!-- Halaman Berita -->
                <li class="sidebar-item {{ Route::is('news.index', 'news.create', 'news.edit') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('news.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i>
                        </span>
                        <span class="hide-menu">Halaman Berita</span>
                    </a>
                </li>
                <!-- Kategori Berita -->
                <li class="sidebar-item {{ Request::is('/category') ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('categories.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-tags"></i>
                        </span>
                        <span class="hide-menu">Kategori Berita</span>
                    </a>
                </li>
                <!-- User Section -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/account" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-user" style="font-size: 1.5em;"></i>
                                </div>
                                <span class="hide-menu">Akun</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/approval" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-license" style="font-size: 1.5em;"></i>
                                </div>
                                <span class="hide-menu">Pengajuan Berita</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Karyawan Section -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-briefcase"></i>
                        </span>
                        <span class="hide-menu">Karyawan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('employee.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-id-badge" style="font-size: 1.5em;"></i>
                                </div>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('subject.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-book" style="font-size: 1.5em;"></i>
                                </div>
                                <span class="hide-menu">Mata Pelajaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('employeeJob.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-clipboard-list" style="font-size: 1.5em;"></i>
                                </div>
                                <span class="hide-menu">Status Job</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Organisasi -->
                <li class="sidebar-item {{ Request::is(route('organization.index')) ? 'selected' : '' }}">
                    <a class="sidebar-link" href="{{ route('organization.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-building"></i>
                        </span>
                        <span class="hide-menu">Organisasi</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40"
                        height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                    aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="logout">
                    <i class="ti ti-logout"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
