<!-- Dashboard -->
<li class="menu-item active">
    <a href="{{ route('dashboard.dokter') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>

<!-- Layouts -->
<!-- Components -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Menus</span></li>
<!-- Cards -->
<li class="menu-item">
    <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon fa-solid fa-list-ol" style='color:#696cff'></i>
        <div data-i18n="Extended UI">My Job</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item">
            <a href="{{ route('pending.dokter') }}" class="menu-link">
                <div data-i18n="Perfect Scrollbar">Pending</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('sucess.dokter') }}" class="menu-link">
                <div data-i18n="Text Divider">Done</div>
            </a>
        </li>
    </ul>
</li>
<li class="menu-item">
    <a href="{{ route('treatment.dokter') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-florist" style='color:#696cff'></i>
        <div data-i18n="Boxicons">MY Treatment</div>
    </a>
</li>
<li class="menu-item">
    <a href="{{ route('custemor.dokter') }}" class="menu-link">
        <i class="menu-icon fa-solid fa-user-group" style='color:#696cff'></i>
        <div data-i18n="Boxicons">MY Customer</div>
    </a>
</li>
<!-- End Menu A