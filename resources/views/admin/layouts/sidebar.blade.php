<div id="sidebar">
    <div class="sidebar-wrapper">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('landing') }}">
                        <img src="{{ asset('image/logo-himaya.png') }}" alt="Logo" srcset="">
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Route::is('booking.index') ? 'active' : '' }}">
                    <a href="{{ route('booking.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Booking</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('voucher.index') ? 'active' : '' }}">
                    <a href="{{ route('voucher.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Voucher</span>
                    </a>
                </li>


                <li class="sidebar-title">Keluar</li>
                <li class="sidebar-item">
                    <a type="button" class='sidebar-link' id="button-logout">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Keluar</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
