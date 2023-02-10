<!-- Dashboard -->
<li class="menu-item active">
    <a href="{{ route('dashboard.custemor') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>

<!-- Layouts -->
<!-- Components -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Menus</span></li>
<!-- Cards -->
<li class="menu-item">
    <a href="{{ route('transaksi.saya') }}" class="menu-link">
    <i class="menu-icon fa-solid fa-list-ul" style='color:#696cff'></i>
        <div data-i18n="Boxicons">Data Treatment</div>
    </a>
</li>
<li class="menu-item">
    <a href="{{ route('treatment.custemor') }}" class="menu-link">
    <i class="menu-icon fa-regular fa-credit-card" style='color:#696cff'></i>
        <div data-i18n="Boxicons">Checkout Treatment</div>
    </a>
</li>
<li class="menu-item">
    <a href="{{ route('my.treatment') }}" class="menu-link">
    <i class="menu-icon fa-solid fa-list-check" style='color:#696cff'></i>
        <div data-i18n="Boxicons">My Treatment</div>
    </a>
</li>