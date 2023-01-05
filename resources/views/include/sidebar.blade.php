<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo mb-3">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('gambar/logo.png') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">

                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Menus</span></li>
                    <!-- Cards -->

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user" style='color:#696cff'></i>
                            <div data-i18n="Extended UI">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('data-dokter') }}" class="menu-link">
                                    <div data-i18n="Perfect Scrollbar">Doctor</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('data.custemor') }}" class="menu-link">
                                    <div data-i18n="Text Divider">Custemor</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('kategori') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-florist" style='color:#696cff'></i>
                            <div data-i18n="Boxicons">Kategori</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('data.treatment') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-florist" style='color:#696cff'></i>
                            <div data-i18n="Boxicons">Treatment</div>
                        </a>
                    </li>
                    <!-- menu custemor -->

                    <li class="menu-item">
                        <a href="{{ route('transaksi.saya') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cart" style='color:#696cff'></i>
                            <div data-i18n="Boxicons">Data Treatment</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('treatment.custemor') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cart" style='color:#696cff'></i>
                            <div data-i18n="Boxicons">Checkout Treatment</div>
                        </a>
                    </li>
                </ul>

            </aside>