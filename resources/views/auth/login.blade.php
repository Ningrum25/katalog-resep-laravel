<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - Katalog Resep</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
* { box-sizing: border-box; margin: 0; padding: 0; }

html, body {
    height: 100%;
    width: 100%;
    font-family: 'Poppins', sans-serif;
    background: url('/images/food-bg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.login-overlay {
    background: rgba(0,0,0,0.6);
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: stretch;
}

.login-wrapper {
    display: flex;
    width: 100%;
    min-height: 100vh;
}

/* KIRI - Branding */
.login-brand {
    flex: 1;
    background: linear-gradient(135deg, #ff6b00, #ff9a3c);
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
}
.login-brand h1 { font-size: 42px; font-weight: 800; margin-bottom: 16px; }
.login-brand p { font-size: 16px; opacity: 0.9; line-height: 1.7; margin-bottom: 36px; }
.brand-features { list-style: none; }
.brand-features li {
    font-size: 15px;
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 12px;
    opacity: 0.95;
}
.brand-features li span {
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    width: 32px; height: 32px;
    display: flex; align-items: center; justify-content: center;
    font-size: 15px;
    flex-shrink: 0;
}

/* KANAN - Form */
.login-form-wrap {
    width: 480px;
    flex-shrink: 0;
    background: white;
    padding: 60px 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.login-form-wrap h2 {
    font-size: 28px;
    font-weight: 700;
    color: #222;
    margin-bottom: 8px;
}
.login-form-wrap p.subtitle {
    font-size: 14px;
    color: #999;
    margin-bottom: 32px;
}

.form-label-custom {
    font-size: 13px;
    font-weight: 600;
    color: #444;
    margin-bottom: 6px;
    display: block;
}

.form-input-custom {
    width: 100%;
    border: 1.5px solid #e5e5e5;
    border-radius: 10px;
    padding: 12px 16px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: 0.2s;
    background: #fafafa;
}
.form-input-custom:focus {
    border-color: #ff6b00;
    background: white;
    box-shadow: 0 0 0 3px rgba(255,107,0,0.1);
}

.form-group { margin-bottom: 20px; }

.btn-login {
    width: 100%;
    background: linear-gradient(135deg, #ff6b00, #ff9a3c);
    color: white;
    border: none;
    border-radius: 12px;
    padding: 14px;
    font-size: 15px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 8px;
    letter-spacing: 0.3px;
}
.btn-login:hover {
    background: linear-gradient(135deg, #e55f00, #ff8422);
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(255,107,0,0.35);
}

.form-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 14px;
    font-size: 13px;
}
.remember-label {
    display: flex;
    align-items: center;
    gap: 7px;
    color: #555;
    cursor: pointer;
}
.remember-label input[type="checkbox"] {
    accent-color: #ff6b00;
    width: 15px; height: 15px;
}
.forgot-link {
    color: #ff6b00;
    text-decoration: none;
    font-weight: 500;
}
.forgot-link:hover { text-decoration: underline; }

.register-link {
    text-align: center;
    font-size: 13px;
    color: #777;
    margin-top: 20px;
}
.register-link a {
    color: #ff6b00;
    font-weight: 600;
    text-decoration: none;
}
.register-link a:hover { text-decoration: underline; }

@media (max-width: 768px) {
    .login-brand { display: none; }
    .login-form-wrap { width: 100%; padding: 40px 28px; }
}
</style>
</head>
<body>

<div class="login-overlay">
    <div class="login-wrapper">

        <!-- KIRI: Branding -->
        <div class="login-brand">
            <div style="font-size:56px;margin-bottom:20px">🍜</div>
            <h1>Katalog Resep</h1>
            <p>Temukan dan bagikan resep masakan favoritmu bersama komunitas kami.</p>
            <ul class="brand-features">
                <li><span>🔍</span> Ribuan resep lengkap</li>
                <li><span>⭐</span> Rating & ulasan jujur</li>
                <li><span>📖</span> Simpan resep favoritmu</li>
                <li><span>👨‍🍳</span> Dari chef berpengalaman</li>
            </ul>
        </div>

        <!-- KANAN: Form -->
        <div class="login-form-wrap">
            <h2>Selamat Datang! 👋</h2>
            <p class="subtitle">Masuk untuk melanjutkan ke Katalog Resep</p>

            <x-auth-session-status class="mb-3" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label class="form-label-custom">Email</label>
                    <input id="email"
                        class="form-input-custom"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="contoh@email.com"
                        required autofocus>
                    <x-input-error :messages="$errors->get('email')" />
                </div>

                <div class="form-group">
                    <label class="form-label-custom">Password</label>
                    <input id="password"
                        class="form-input-custom"
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required>
                    <x-input-error :messages="$errors->get('password')" />
                </div>

                <div class="form-bottom">
                    <label class="remember-label">
                        <input type="checkbox" name="remember">
                        Ingat saya
                    </label>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link">
                        Lupa password?
                    </a>
                    @endif
                </div>

                <button type="submit" class="btn-login">
                    🚀 Masuk Sekarang
                </button>

            </form>

            @if (Route::has('register'))
            <div class="register-link">
                Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
            </div>
            @endif

        </div>
    </div>
</div>

</body>
</html>