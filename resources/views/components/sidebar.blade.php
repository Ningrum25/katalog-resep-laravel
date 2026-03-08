<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background:#fff;border-right:1px solid #eee;">

    <div class="app-brand demo p-3">
        <a href="/dashboard" class="app-brand-link">
            <span style="font-size:20px;font-weight:700;color:#ff6b00">🍜 Food</span>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon">🏠</i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('recipes*') ? 'active' : '' }}">
            <a href="/recipes" class="menu-link">
                <i class="menu-icon">📖</i>
                <div>Recipes</div>
            </a>
        </li>

        <li class="menu-item mt-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger w-100 mx-3" style="width:85%!important">
                    🚪 Logout
                </button>
            </form>
        </li>

    </ul>

</aside>