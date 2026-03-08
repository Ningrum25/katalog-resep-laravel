@extends('layouts.app')

@section('content')

<style>
.hero {
    height: 240px;
    background: url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c');
    background-size:cover;
    background-position:center;
    border-radius:16px;
    display:flex;
    align-items:center;
    padding:40px;
    color:white;
    margin-bottom:30px;
}
.hero h1 { font-size:32px; font-weight:700; text-shadow:0 2px 8px rgba(0,0,0,0.3); }

.section-title { font-size:17px; font-weight:600; color:#333; margin-bottom:16px; }

.kategori-badge {
    background:#fff3e8;
    color:#ff6b00;
    border-radius:20px;
    padding:6px 14px;
    font-size:13px;
    font-weight:500;
    display:inline-block;
    margin:4px;
    cursor:pointer;
    transition:0.2s;
}
.kategori-badge:hover { background:#ff6b00; color:white; }

.popular-item { display:flex; align-items:center; gap:14px; padding:12px 0; border-bottom:1px solid #f0f0f0; }
.popular-item img { width:72px; height:72px; border-radius:12px; object-fit:cover; }
.popular-item .rating { color:#ffa500; font-size:13px; }
</style>


{{-- HERO --}}
<div class="hero">
    <div>
        <h1>🍜 Discover Delicious Recipes</h1>
        <p style="font-size:15px;opacity:0.9;margin:0">Find your favorite food recipes</p>
    </div>
</div>


<div class="row">

    {{-- KIRI: Resep Terbaru (grid 3 kolom) --}}
    <div class="col-md-8">

        <div class="section-title">🔍 Resep Terbaru</div>

        <div class="row row-cols-3 g-3">

            <div class="col">
                <div class="recipe-card">
                    <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2">
                    <div class="p-3">
                        <h6 class="fw-bold mb-1" style="font-size:13px">Spaghetti Carbonara</h6>
                        <p class="text-muted mb-0" style="font-size:12px">Creamy pasta with cheese</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="recipe-card">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836">
                    <div class="p-3">
                        <h6 class="fw-bold mb-1" style="font-size:13px">Healthy Salad</h6>
                        <p class="text-muted mb-0" style="font-size:12px">Fresh vegetable salad</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="recipe-card">
                    <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b">
                    <div class="p-3">
                        <h6 class="fw-bold mb-1" style="font-size:13px">Fried Rice</h6>
                        <p class="text-muted mb-0" style="font-size:12px">Classic Asian fried rice</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="recipe-card">
                    <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d">
                    <div class="p-3">
                        <h6 class="fw-bold mb-1" style="font-size:13px">Cheese Burger</h6>
                        <p class="text-muted mb-0" style="font-size:12px">Juicy burger with cheese</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="recipe-card">
                    <img src="https://images.unsplash.com/photo-1569050467447-ce54b3bbc37d">
                    <div class="p-3">
                        <h6 class="fw-bold mb-1" style="font-size:13px">Sushi Roll</h6>
                        <p class="text-muted mb-0" style="font-size:12px">Japanese rice rolls</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="recipe-card">
                    <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19">
                    <div class="p-3">
                        <h6 class="fw-bold mb-1" style="font-size:13px">Nasi Goreng</h6>
                        <p class="text-muted mb-0" style="font-size:12px">Indonesian fried rice</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {{-- KANAN: Sidebar --}}
    <div class="col-md-4">

        {{-- Kategori --}}
        <div class="card p-3 mb-3" style="border-radius:14px;border:none;box-shadow:0 4px 15px rgba(0,0,0,0.06)">
            <div class="section-title mb-2">🏷️ Kategori Resep</div>
            <div>
                <span class="kategori-badge">Masakan Indonesia 12</span>
                <span class="kategori-badge">Sayuran 8</span>
                <span class="kategori-badge">Daging 5</span>
                <span class="kategori-badge">Seafood 6</span>
                <span class="kategori-badge">Dessert 9</span>
                <span class="kategori-badge">Minuman 4</span>
            </div>
        </div>

        {{-- Resep Populer --}}
        <div class="card p-3" style="border-radius:14px;border:none;box-shadow:0 4px 15px rgba(0,0,0,0.06)">
            <div class="section-title mb-2">🔥 Resep Populer</div>

            <div class="popular-item">
                <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b">
                <div>
                    <div class="fw-bold" style="font-size:14px">Nasi Goreng Spesial</div>
                    <div class="rating">⭐ 4.8 Rating</div>
                </div>
            </div>

            <div class="popular-item">
                <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d">
                <div>
                    <div class="fw-bold" style="font-size:14px">Ayam Bakar</div>
                    <div class="rating">⭐ 4.7 Rating</div>
                </div>
            </div>

            <div class="popular-item" style="border:none">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836">
                <div>
                    <div class="fw-bold" style="font-size:14px">Gado-Gado</div>
                    <div class="rating">⭐ 4.6 Rating</div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection