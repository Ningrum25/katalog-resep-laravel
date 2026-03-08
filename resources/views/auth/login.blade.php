<x-guest-layout>

<style>
body{
    background:url('/images/food-bg.jpg');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

/* Overlay agar form tetap terbaca */
.login-overlay{
    background:rgba(0,0,0,0.55);
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.login-card{
    backdrop-filter: blur(12px);
    background: rgba(255,255,255,0.9);
    padding:35px;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.2);
    width:100%;
    max-width:420px;
}
</style>

<div class="login-overlay">

<div class="login-card">

<h2 class="text-center fw-bold mb-4">
🍜 Katalog Resep Login
</h2>

<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
@csrf

<div class="mb-3">
<x-input-label for="email" value="Email" />
<x-text-input id="email"
class="block mt-1 w-full"
type="email"
name="email"
:value="old('email')"
required autofocus />
<x-input-error :messages="$errors->get('email')" />
</div>

<div class="mb-3">
<x-input-label for="password" value="Password" />

<x-text-input id="password"
class="block mt-1 w-full"
type="password"
name="password"
required />
<x-input-error :messages="$errors->get('password')" />
</div>

<div class="flex items-center justify-between mt-4">

<label class="inline-flex items-center">
<input type="checkbox" name="remember"
class="rounded border-gray-300">
<span class="ms-2 text-sm">Remember me</span>
</label>

@if (Route::has('password.request'))
<a href="{{ route('password.request') }}"
class="text-sm text-primary">
Forgot password?
</a>
@endif

</div>

<button class="btn btn-primary w-100 mt-4">
Login
</button>

</form>

</div>

</div>

</x-guest-layout>
