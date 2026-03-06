@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* Background Utama dengan Gambar Makanan */
    body {
        background: url('{{ asset('images/bg-food.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    /* Overlay Gelap agar Teks Putih Kontras & Terbaca */
    .main-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(15, 12, 41, 0.85), rgba(48, 43, 99, 0.85), rgba(36, 36, 62, 0.9));
        z-index: -1;
    }

    /* Glassmorphism Card Premium */
    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.4);
    }

    /* Pencarian Modern */
    .search-box {
        background: white;
        border-radius: 50px;
        padding: 8px;
        display: flex;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    /* Badge & Tombol Interaktif */
    .btn-gradient {
        background: linear-gradient(45deg, #ff416c, #ff4b2b);
        border: none;
        color: white;
        transition: 0.3s;
    }

    .btn-gradient:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(255, 65, 108, 0.4);
        color: white;
    }

    .stat-number {
        font-size: 2.5rem;
        color: #ffcc33; /* Warna Kuning agar Kontras Tinggi */
        text-shadow: 0 2px 10px rgba(255, 204, 51, 0.3);
    }
</style>

<div class="main-overlay"></div>

<div class="container py-5 position-relative">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-7 text-white">
            <h1 class="display-4 fw-bold">Halo, {{ Auth::user()->name }}! 👋</h1>
            <p class="lead opacity-75">Siap memasak sesuatu yang luar biasa hari ini?</p>
        </div>
        <div class="col-md-5 text-md-end">
            <a href="{{ route('recipes.create') }}" class="btn btn-gradient rounded-pill px-4 py-3 fw-bold shadow">
                <i class="fas fa-plus-circle me-2"></i>Bagikan Resep Baru
            </a>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-3 mb-3">
            <div class="glass-card p-4 text-center">
                <h2 class="fw-bold stat-number mb-0">{{ $recipes->count() }}</h2>
                <small class="text-white-50 text-uppercase fw-bold">Total Resep</small>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="glass-card p-4 text-center">
                <h2 class="fw-bold stat-number mb-0">{{ $recipes->sum('likes') }}</h2>
                <small class="text-white-50 text-uppercase fw-bold">Total Likes</small>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="glass-card p-4 text-center">
                <h2 class="fw-bold stat-number mb-0">🔥</h2>
                <small class="text-white-50 text-uppercase fw-bold">Trending</small>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="glass-card p-4 text-center">
                <h2 class="fw-bold stat-number mb-0">📂</h2>
                <small class="text-white-50 text-uppercase fw-bold">Koleksi</small>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <form action="{{ url('/dashboard') }}" method="GET">
                <div class="search-box">
                    <input type="text" name="search" value="{{ request('search') }}" 
                           placeholder="Cari bumbu, nama masakan..." 
                           class="form-control border-0 px-4 bg-transparent text-dark shadow-none">
                    <button class="btn btn-primary rounded-pill px-5 fw-bold" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <h3 class="text-white fw-bold mb-4 border-bottom border-secondary pb-2">Jelajahi Resep Terbaru</h3>
    <div class="row">
        @forelse($recipes as $recipe)
            <div class="col-md-4 mb-4">
                <div class="card glass-card border-0 h-100 overflow-hidden">
                    <div class="position-relative">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-3 rounded-pill shadow">
                            ❤️ {{ $recipe->likes ?? 0 }}
                        </span>
                        @if($recipe->foto)
                            <img src="{{ asset('storage/recipes/' . $recipe->foto) }}" class="card-img-top" style="height:220px; object-fit:cover;">
                        @else
                            <img src="https://via.placeholder.com/400x220?text=Resep+Makanan" class="card-img-top">
                        @endif
                    </div>
                    <div class="card-body p-4 text-white">
                        <h5 class="fw-bold mb-2">{{ $recipe->nama_resep }}</h5>
                        <p class="small text-white-50">{{ Str::limit($recipe->deskripsi, 80) }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top border-secondary">
                            <form action="{{ route('recipe.like', $recipe->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-light btn-sm rounded-pill px-3">Suka</button>
                            </form>
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary btn-sm rounded-pill px-4">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5 text-white">
                <p class="opacity-50">Belum ada resep yang ditemukan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection