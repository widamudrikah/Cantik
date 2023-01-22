<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo mb-3">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('gambar/logo.png') }}" alt="" width="40%">
                        </span>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">


                    <!-- Menu Admin -->
                    @if(Auth::user()->role == 1)
                        @include('include.menus.admin')
                    @elseif(Auth::user()->role == 2)
                        @include('include.menus.dokter')
                    @elseif(Auth::user()->role == 3)
                        @include('include.menus.custemor')
                    @endif
                    <!-- End Menu Custemor -->
                </ul>

            </aside>