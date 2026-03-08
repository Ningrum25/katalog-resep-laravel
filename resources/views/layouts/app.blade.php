<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name','Katalog Resep') }}</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
body { font-family:'Poppins',sans-serif; background:#fafafa; margin:0; }

/* NAVBAR */
.navbar-custom {
    background: white;
    border-bottom: 1px solid #eee;
    padding: 12px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
}
.logo-food { font-size:22px; font-weight:700; color:#ff6b00; text-decoration:none; }

.nav-links { display:flex; align-items:center; gap:8px; }
.nav-links a {
    text-decoration:none;
    color:#555;
    font-weight:500;
    padding:7px 16px;
    border-radius:20px;
    font-size:14px;
    transition:0.2s;
}
.nav-links a:hover, .nav-links a.active { background:#fff3e8; color:#ff6b00; }

.nav-right { display:flex; align-items:center; gap:12px; }

.search-box {
    border-radius:50px;
    border:1px solid #ddd;
    padding:7px 18px;
    font-size:14px;
    width:220px;
    outline:none;
}
.search-box:focus { border-color:#ff6b00; }

.btn-tambah {
    background:#ff6b00;
    color:white;
    border:none;
    border-radius:20px;
    padding:7px 16px;
    font-size:13px;
    font-weight:600;
    text-decoration:none;
    transition:0.2s;
}
.btn-tambah:hover { background:#e55f00; color:white; }

.profile-wrap { position:relative; cursor:pointer; }
.profile-avatar {
    width:38px; height:38px;
    border-radius:50%;
    background: linear-gradient(135deg,#ff6b00,#ff9a3c);
    color:white;
    font-weight:700;
    font-size:15px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:2px solid #ffe0c8;
}
.profile-dropdown {
    display:none;
    position:absolute;
    right:0; top:48px;
    background:white;
    border-radius:12px;
    box-shadow:0 8px 30px rgba(0,0,0,0.12);
    min-width:180px;
    padding:8px 0;
    z-index:999;
}
.profile-wrap:hover .profile-dropdown { display:block; }
.profile-dropdown a, .profile-dropdown button {
    display:block;
    width:100%;
    text-align:left;
    padding:9px 18px;
    font-size:13px;
    color:#333;
    text-decoration:none;
    background:none;
    border:none;
    cursor:pointer;
    transition:0.2s;
}
.profile-dropdown a:hover, .profile-dropdown button:hover { background:#fff3e8; color:#ff6b00; }
.profile-dropdown hr { margin:4px 0; border-color:#eee; }

/* CONTENT */
.main-content { padding: 30px; max-width:1200px; margin:0 auto; }

/* FOOTER */
.footer { text-align:center; padding:25px; color:#999; font-size:13px; border-top:1px solid #eee; margin-top:40px; }

/* CARD */
.recipe-card { border-radius:14px; overflow:hidden; background:white; box-shadow:0 4px 15px rgba(0,0,0,0.08); transition:0.3s; height:100%; }
.recipe-card:hover { transform:translateY(-6px); box-shadow:0 10px 30px rgba(0,0,0,0.15); }
.recipe-card img { width:100%; height:180px; object-fit:cover; }
</style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar-custom">

    <!-- LOGO -->
    <a class="logo-food" href="/dashboard">🍜 Food</a>

    <!-- NAV LINKS -->
    <div class="nav-links">
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
        <a href="/recipes" class="{{ request()->is('recipes*') ? 'active' : '' }}">📖 Recipes</a>
    </div>

    <!-- KANAN: Search + Tambah + Profil -->
    <div class="nav-right">

        <input type="text" class="search-box" placeholder="🔍 Cari resep makanan...">

        <a href="/recipes/create" class="btn-tambah">➕ Tambah Resep</a>

        <!-- PROFIL USER -->
        <div class="profile-wrap">
            <div class="profile-avatar">
                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
            </div>
            <div class="profile-dropdown">
                <div style="padding:10px 18px 6px;font-weight:600;font-size:13px;color:#333">
                    {{ auth()->user()->name ?? 'User' }}
                </div>
                <div style="padding:0 18px 8px;font-size:12px;color:#999">
                    {{ auth()->user()->email ?? '' }}
                </div>
                <hr>
                <a href="#">⚙️ Pengaturan</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">🚪 Logout</button>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @yield('content')
</div>

<!-- FOOTER -->
<div class="footer">🍜 Katalog Resep • Dibuat dengan Laravel</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>