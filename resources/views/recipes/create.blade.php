@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            
            <a href="{{ url('/dashboard') }}" class="btn btn-link text-white mb-3 p-0 text-decoration-none fw-bold">
                <i class="fas fa-arrow-left me-2"></i> Kembali ke Dashboard
            </a>

            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
                <div class="card-header p-4 border-0" style="background-color: #f8f9fa;">
                    <h3 class="fw-bold mb-1" style="color: #2c3e50;">🍜 Bagikan Resep Baru</h3>
                    <p class="mb-0" style="color: #7f8c8d; font-size: 0.9rem;">Pastikan detail resep lengkap agar mudah diikuti orang lain.</p>
                </div>

                <div class="card-body p-4 bg-white">
                    <form action="/recipes" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="color: #34495e;">Nama Resep</label>
                            <input type="text" name="nama_resep" class="form-control custom-input" 
                                   placeholder="Misal: Rendang Daging Padang" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="color: #34495e;">Deskripsi & Cara Memasak</label>
                            <textarea name="deskripsi" class="form-control custom-input" rows="6" 
                                      placeholder="Tuliskan bahan-bahan dan langkah demi langkah..." required></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="color: #34495e;">Foto Hasil Akhir</label>
                            <div class="upload-area">
                                <input type="file" name="foto" class="form-control border-0" style="background: transparent;" accept="image/*">
                                <div class="mt-2 small" style="color: #95a5a6;">
                                    <i class="fas fa-info-circle me-1"></i> Gunakan format JPG atau PNG (Maks. 2MB)
                                </div>
                            </div>
                        </div>

                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-save py-3 rounded-pill fw-bold shadow">
                                <i class="fas fa-check-circle me-2"></i> Simpan Resep Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Perbaikan Kontras Input */
    .custom-input {
        background-color: #ffffff;
        border: 2px solid #ecf0f1;
        border-radius: 12px;
        padding: 12px 18px;
        color: #2c3e50;
        transition: all 0.3s ease;
    }

    .custom-input:focus {
        border-color: #1abc9c; /* Warna Hijau Teal yang sejuk */
        box-shadow: 0 0 0 0.25rem rgba(26, 188, 156, 0.1);
        background-color: #fff;
    }

    /* Area Upload yang Lebih Terlihat */
    .upload-area {
        border: 2px dashed #bdc3c7;
        border-radius: 15px;
        padding: 20px;
        background-color: #fcfcfc;
        transition: 0.3s;
    }

    .upload-area:hover {
        border-color: #1abc9c;
        background-color: #f4fdfb;
    }

    /* Tombol Save dengan Kontras Emerald */
    .btn-save {
        background: linear-gradient(135deg, #1abc9c, #16a085);
        border: none;
        color: white;
        font-size: 1.1rem;
        transition: 0.3s;
    }

    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(26, 188, 156, 0.3) !important;
        filter: brightness(1.1);
        color: white;
    }

    /* Placeholder agar lebih terbaca */
    .custom-input::placeholder {
        color: #bdc3c7;
    }
</style>
@endsection